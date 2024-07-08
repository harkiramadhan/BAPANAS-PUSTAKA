document.getElementById('confirm-password').addEventListener('input', function () {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (confirmPassword !== password) {
        this.classList.add('is-invalid');
        $('.btn-register').attr('disabled', true)
    } else {
        this.classList.remove('is-invalid');
        $('.btn-register').attr('disabled', false)
    }
});