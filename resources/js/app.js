require('./bootstrap');

const Dropzone = require('dropzone').Dropzone;
Dropzone.autoDiscover = false;

const dropzone = document.querySelector('#dropzone-upload');
if (dropzone) {
    const myDropzone = new Dropzone('#dropzone-upload', {
        dictDefaultMessage: 'Arrastra tu imagen aquí o haz clic para subir',
        acceptedFiles: '.png,.jpg,.jpeg,.gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Eliminar imagen',
        maxFiles: 1,
    });
}
