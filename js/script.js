const form = document.querySelector('#form');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    const confirm = window.confirm('Are you sure you want to submit this form?');
    confirm ? this.submit() : '';
})