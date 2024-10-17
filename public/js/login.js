const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const pencetBtn = document.getElementById('pencet');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
pencetBtn.addEventListener('click', () => {
    container.classList.remove("active");
})