/*=============== HIDE & SHOW PASSWORD ===============*/
const showHiddenPass = (password, eye) => {
const passwordInput = document.getElementById(password),
        iconEye = document.getElementById(eye);

    iconEye.addEventListener('click', () => {
        input.Type === 'password' ? input.Type = 'text' 
                                  : input.Type = 'password';
        iconEye.classList.toggle('ri-eye-of-line');
        iconEye.classList.toggle('ri-eye-line');
})
}
showHiddenPass('loginPass','loginEye');

/*=============== SWIPER IMAGES ===============*/
