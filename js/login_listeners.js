const input_login = document.querySelectorAll('input[type="text"]');
const input_password = document.querySelectorAll('input[type="password"]');
const input_re_password = document.querySelector('#re_password');


input_login.forEach( (tag_element) => {
    tag_element.addEventListener("focus", () => tag_element.placeholder = '');
    tag_element.addEventListener("blur", () => tag_element.placeholder = 'Login');
});

input_password.forEach( (tag_element) => {
    tag_element.addEventListener("focus", () => tag_element.placeholder = '');
    tag_element.addEventListener("blur", () => tag_element.placeholder = 'Hasło');
});

input_re_password.addEventListener("focus", () => tag_element.placeholder = '');
input_re_password.addEventListener("blur", () => tag_element.placeholder = 'Powtórz hasło');