const burgerMenu = () => {
    document.addEventListener('DOMContentLoaded', () => {
        const burgerMenu = document.getElementById('burger-menu');
        const overlay = document.getElementById('navbar');
        burgerMenu.addEventListener('click', function () {
            this.classList.toggle("close");
            overlay.classList.toggle("overlay");
        });
    });
};

export default burgerMenu;