$(document).ready(function() {
    $('#validades').validate({
      rules: {
        prazo: {
          required: true
        },
        vendedor: {
          required: true
        },
        armacao: {
          required: true
        },
        lente: {
          required: true
        }
      },
      messages: {
        prazo: "Por favor, selecione a data de entrega!",
        vendedor: "Por favor, selecione a consultora!",
        armacao: "Por favor, insira o tipo de armação!",
        lente: "Por favor, insira o tipo de lente!"
      },
      errorElement: 'div',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  
    flatpickr('#prazo', {
      dateFormat: 'd/m/Y',
      minDate: 'today',
      locale: 'pt',
      disable: [
        function(date) {
          // Desabilitar sábados e domingos (0 = domingo, 6 = sábado)
          return date.getDay() === 0 || date.getDay() === 6;
        }
      ]
    });
  });
  