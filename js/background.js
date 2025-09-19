
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('formCadastro');
  const inputs = form.querySelectorAll('.form-control');


  form.addEventListener('submit', function(event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);

  
  inputs.forEach(input => {
    input.addEventListener('input', function() {
      if (input.checkValidity()) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
      } else {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
      }
    });
  });
});
