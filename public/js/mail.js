  $(document).ready(function(){
    $('#button-blue').on("click", function(event) {
      event.preventDefault();
       var data = {
                nombres: $('#name').val(),
                email: $('#email').val(),
                mensaje: $('#comment').val(),
            };
      enviarMail(data);
    });
  });


  function enviarMail(data) {
      $.ajax({
          url:"../../send-mail.php",
          type: "post",
          data: data,
          success:function(respuesta) {
              if (respuesta == "1") {
                //modificando el map...
                $('#map').css("height", "644px");
                $('#msje').html('<div class="alert alert-success" role="alert">Mensaje enviado correctamente.</div>');
              }
          },
          complete: function(xhr, status) {
              limpiarFormulario();
          }

      });
  }

  function limpiarFormulario() {
      $('#name').val('');
      $('#email').val('');
      $('#comment').val('');
  }