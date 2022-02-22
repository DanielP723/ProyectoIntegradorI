const formulario = document.querySelector("#formulario");

formulario.addEventListener('submit', e => {

    const email = document.querySelector("#inputEmail");

    console.log(email.value);

    e.preventDefault();

});
