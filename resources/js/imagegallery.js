export default class ImageGallery {
    constructor(data) {
        this.uuid = this.uuidv4();
        this.status = 'new';
        this.percent = 0;
        for (let field in data) {
            this[field] = data[field];
            this.status = 'old';
            this.percent = 100;
        }
    }

    getPercentSucess() {
        return this.percent;
    }

    triggerDone(data) {
        for (let field in data) {
            this[field] = data[field];
        }
        this.status = 'old'
    }

    setFormData(data) {
        this.formData = data;
    }

    uuidv4() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }
}