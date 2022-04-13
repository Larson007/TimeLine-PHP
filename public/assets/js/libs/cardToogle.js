const cardToogle = () => {
    document.addEventListener('DOMContentLoaded', () =>{
        const boxCard = document.querySelectorAll('.box-card');
        const boxCancel = document.querySelectorAll('.box');
        console.log(boxCard);
        for (let i = 0; i < boxCard.length; i++) {
            boxCancel[i].onclick = () => {
                boxCard[i].classList.toggle('active');
            };
        }
    });
};

export default cardToogle;