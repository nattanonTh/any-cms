<template>
  <div v-if="!isDeleted">
    <div v-if="!hasError">
      <div v-if="galleryimage.percent==100">
        <div class="container-image">
          <img
            class="images image"
            :src="'../' + galleryimage.path"
            :alt="galleryimage.name"
            :percent="galleryimage.percent"
          />
          <div class="overlay">
            <a href="javascript:void(0)" class="btn btn-danger" @click="deleteImage">DELETE</a>
            <a
              href="javascript:void(0)"
              class="btn btn-primary"
              title="User Profile"
              @click="$emit('click-image', '../' + galleryimage.path)"
            >VIEW</a>
          </div>
        </div>
      </div>
      <div v-else class="lds-roller">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <p class="percentage">{{galleryimage.percent}}</p>
      </div>
    </div>
    <div v-else>
      <div class="container-image">
        <div class="error-box text-center">
          <p style="font-size:15px;">{{ errorMassge }}</p>
        </div>
        <div class="overlay">
          <a
            href="javascript:void(0)"
            class="btn btn-danger btn-danger-error"
            title="User Profile"
            @click="deleteImage"
          >DELETE</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["uploadedimage"],
  mounted() {
    if (this.galleryimage.status == "new") {
      // upload if new image
      $.ajax({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        xhr: evt => {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener(
            "progress",
            evt => {
              if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                this.galleryimage.percent = (percentComplete * 100).toFixed(0);
              }
            },
            false
          );

          return xhr;
        },
        url: "/image/gallery/upload",
        method: "POST",
        data: this.galleryimage.formData,
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        enctype: "multipart/form-data",
        success: res => {
          if (res.status) {
            this.galleryimage.path = res.newImage.path;
            this.galleryimage.name = res.newImage.name;
            this.galleryimage.id = res.newImage.id;
            this.galleryimage.percent = 100;
          }
        },
        error: res => {
          this.hasError = true;
          if (res.responseJSON.errors && res.responseJSON.errors.file) {
            this.errorMassge = res.responseJSON.errors.file.join(",");
          }
        }
      });
    }
  },
  data() {
    return {
      galleryimage: this.uploadedimage,
      hasError: false,
      errorMassge: "Error",
      isDeleted: false
    };
  },
  methods: {
    deleteImage() {
      this.isDeleted = true;
      $.ajax({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "/image/gallery/delete",
        method: "POST",
        data: {id : this.galleryimage.id},
        dataType: "json",
        success: res => {
          if (res.status) {
            console.log('id : ' + this.galleryimage.id + ' is deleted.');
          }
        },
        error: res => {
          console.log('can not delete image.');
        }
      });
    }
  }
};
</script>

<style scoped>
.images {
  max-width: 219px;
  padding: 10px;
  display: inline;
}

.lds-roller {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 32px 32px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: rgb(82, 82, 82);
  margin: -3px 0 0 -3px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 50px;
  left: 50px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 54px;
  left: 45px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 57px;
  left: 39px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 58px;
  left: 32px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 57px;
  left: 25px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 54px;
  left: 19px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 50px;
  left: 14px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 45px;
  left: 10px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.percentage {
  padding-left: 22px;
  padding-top: 22px;
}

.error-box {
  color: #d8000c;
  background-color: #ffbaba;
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
  min-height: 100%;
  max-width: 200px;
  min-width: 200px;
  display: flex;
}

.container-image {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.3s ease;
  background-color: rgb(80, 80, 80);
}

.container-image:hover .overlay {
  opacity: 1;
}

.container-image .btn-danger {
  color: white;
  position: absolute;
  top: 50%;
  left: 30%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container-image .btn-danger-error {
  color: white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container-image .btn-primary {
  color: white;
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
</style>
