<template>
    <div>
        <div>
            <dropzone @uploadfile="uploadfile"></dropzone>
        </div>
        <div class="row col-md-12">
            <uploaded-image v-for="(uploadedimage, index) in imageslist" :key="uploadedimage.uuid"
                :uploadedimage="uploadedimage" @click-image="showImage"></uploaded-image>
            <!-- The Modal -->
        </div>
        <div id="myModal" class="modal" v-if="modalDisplay">
            <span class="close" @click="modalDisplay = false">&times;</span>
            <img class="modal-content" :src="showImageSrc" id="display-image">
        </div>
    </div>

</template>

<script>
    import ImageGallery from '../imagegallery';
    export default {
        props: ["defaultimage"],
        data() {
            return {
                imageslist: this.defaultimage,
                showImageSrc : '',
                modalDisplay : false
            };
        },
        methods: {
            uploadfile(file) {
                // new form data
                let formData = new FormData();
                formData.append('file', file);
                // new image gallery obj
                let tempImageObj = new ImageGallery();
                // set form data
                tempImageObj.setFormData(formData);
                // new image to list
                this.imageslist.push(tempImageObj);
            },
            showImage(path) {
                this.modalDisplay = true;
                this.showImageSrc = path;
            }
        }
    };
</script>

<style scoped>
    #display-image {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#display-image:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
