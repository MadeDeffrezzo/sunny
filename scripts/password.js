document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    togglePassword.addEventListener('click', function () {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.src = type === 'password' ? '../img/eye-icon.png' : '../img/eye-icon-open.png'; // Замените на путь к иконке открытого глаза
    });
});