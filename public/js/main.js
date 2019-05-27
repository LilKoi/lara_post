const buttonAuth = document.querySelector('.wrapper-menu .auth');
const buttonAuthClose = document.querySelector('.close-auth');
const authModal = document.querySelector('.wrapper-auth');
const buttonReg = document.querySelector('.wrapper-menu .reg');
const buttonRegClose = document.querySelector('.close-reg');
const regModal = document.querySelector('.wrapper-reg');
buttonAuth.addEventListener('click', () => {
    authModal.style.top = '0%';
})
buttonAuthClose.addEventListener('click', () => {
    authModal.style.top = '-100%';
})

buttonReg.addEventListener('click', () => {
    regModal.style.top = '0%';
})
buttonRegClose.addEventListener('click', () => {
    regModal.style.top = '-100%';
})