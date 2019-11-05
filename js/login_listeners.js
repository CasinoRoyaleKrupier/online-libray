const input_login = document.querySelector('input[type="text"]');
const input_password = document.querySelector('input[type="password"]');

input_login.addEventListener("focus", () => input_login.placeholder = '');
input_login.addEventListener("blur", () => input_login.placeholder = 'Login');

input_password.addEventListener("focus", () => input_password.placeholder = '');
input_password.addEventListener("blur", () => input_password.placeholder = 'Hasło');