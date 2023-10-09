import { default as axios } from "axios";

const register = document.getElementById('register');
register.addEventListener('click', registerUser);

function messageError(message) {
    return `<p class="flex items-center gap-2 text-sm text-white font-semibold">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
    </svg>
    ${message}
    </p>`;
}

async function registerUser(e) {
    e.preventDefault();
    const loading = document.getElementById('spinnerLoading');
    loading.style.display = 'flex';

    const dataForm = new FormData(document.getElementById('registerUser'));
    const nameUser = dataForm.get("name");
    const emailUser = dataForm.get("emailRegister");
    const passwordUser = dataForm.get("passwordRegister");

    const dataSend = {name: nameUser, email: emailUser, password: passwordUser};
    const user = await axios.post('/users', dataSend).catch(error => error.response.data);
    loading.style.display = 'none';
    let messageErrorsField = document.getElementById('messageErrors');
    if (user.data === undefined) {
        let errors = user.errors;
        messageErrorsField.innerHTML = '';
        messageErrorsField.style.display = 'flex';

        verifyIsEmpty(errors.name, messageErrorsField);
        verifyIsEmpty(errors.password, messageErrorsField);
        verifyIsEmpty(errors.email, messageErrorsField);
    }

    if (user.data !== undefined && user.data.success) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: `${user.data.message}`
        })
        messageErrorsField.style.display = 'none';
        setTimeout(() => window.location.href = '/users', 2000)
    }
}

function verifyIsEmpty(fieldToCheck, fieldMessageError) {
    if (fieldToCheck !== undefined) {
        fieldToCheck.forEach(error => fieldMessageError.innerHTML += messageError(error));
    }
}
