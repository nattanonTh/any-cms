require('./bootstrap');
import ImageGallery from './imagegallery';
window.Vue = require('vue');

Vue.component('dropzone', require('./components/DropZone').default);
Vue.component('image-gallery', require('./components/ImageGallery').default);
Vue.component('uploaded-image', require('./components/Image').default);


let imageslist = [];

if (defaultImage) {
    defaultImage.forEach(element => {
        imageslist.push(new ImageGallery(element))
    });
}


window.app = new Vue({
    el: '#gallery',
    data: {
        defaultimage : imageslist
    }
});
