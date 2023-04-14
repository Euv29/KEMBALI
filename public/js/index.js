// Recarregar a página depois da animação acontecer
let flashMessage = document.querySelector(".msg-container");

if (flashMessage) {
    flashMessage.addEventListener("animationend", () => {
        location.reload();
    });
}

const menu = document.querySelector('.user-menu');
const notificationPopup = document.querySelector('.notification-popup');

function showMenu() {

    if (notificationPopup.classList.contains('active')) {
        notificationPopup.classList.remove('active');
        menu.classList.toggle('active');
    } else {
        menu.classList.toggle('active');

    }
}

function showNotification() {

    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        notificationPopup.classList.toggle('active');

    } else {
        notificationPopup.classList.toggle('active');

    }
}

/* Image Preview */

// Auth Imagem
const imageInputRegister = document.querySelector('#image');
const defaultImage = document.querySelector('#default-img');

if (imageInputRegister) {
    imageInputRegister.addEventListener("change", function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                defaultImage.setAttribute('src', this.result);
            });

            reader.readAsDataURL(file);
        }
    });
}

// Post Image
const imageInput = document.querySelector('#img');
const previewImage = document.querySelector('.image-preview ');

if (imageInput) {
    imageInput.addEventListener("change", function () {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                previewImage.setAttribute('src', this.result);
            });

            reader.readAsDataURL(file);
            previewImage.style.display = 'block';
        }
    });
}

const popup = document.querySelector('.post-imagem-pop-up');
const imagemPopup = document.querySelector('.imagem-popup');

if (document.querySelectorAll('.imagem-area img') && document.querySelector('.post-imagem-pop-up span')) {
    document.querySelectorAll('.imagem-area img').forEach(imagem => {
        imagem.onclick = () => {
            imagemPopup.setAttribute('src', imagem.getAttribute('src'));
            popup.style.display = 'block';
        }
    });

    document.querySelector('.post-imagem-pop-up span').onclick = () => {
        popup.style.display = 'none';
    }
}

//Coment Image
const imageComentInput = document.querySelector('#img-comentario');
const imageComentIcon = document.querySelector('.comentario-imagem-label');

if (imageComentInput) {
    imageComentInput.addEventListener("change", function () {
        const file = this.files[0];

        if (file) {
            imageComentIcon.innerHTML = '<ion-icon name="checkmark-circle-outline" class="post-icon"></ion-icon>';
        }
    });
}
