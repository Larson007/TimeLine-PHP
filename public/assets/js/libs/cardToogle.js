const cardToogle = () => {
    document.addEventListener('DOMContentLoaded', () =>{
        const boxCard = document.querySelector('.box-card');
        const boxCancel = document.querySelector('.box');
        boxCancel.onclick = function () {
            boxCard.classList.toggle('active');
        };
    });
};

export default cardToogle;