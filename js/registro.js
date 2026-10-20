document.addEventListener('DOMContentLoaded', function () {
    const generoRadios = document.querySelectorAll('input[name="genero"]');
    const otroGeneroInput = document.getElementById('otro-genero');
  
    generoRadios.forEach(radio => {
      radio.addEventListener('change', function () {
        if (this.value === 'otro') {
          otroGeneroInput.classList.remove('hidden');
        } else {
          otroGeneroInput.classList.add('hidden');
        }
      });
    });
  });