$(document).ready(function () {
  var screen = $('#loading-screen');
  configureLoadingScreen(screen);

  function configureLoadingScreen(screen) {
    $(document)
      .ajaxStart(function () {
        screen.fadeIn();
      })
      .ajaxStop(function () {
        screen.fadeOut();
      });
  }

  //FUNCION UNICA PARA MANDAR DATOS MEDIANTE AJAX
  function sendFormArray($form, $result) {
    $("#" + $form).submit(function (event) {
      event.preventDefault();
      $.post(
          $(this).attr('action'), {
            input: $(this).serialize()
          })
        .done(function (data) {
          $("#" + $result).html(data);
        });
    });
  };

  sendFormArray("formPrimos", "resultadoPrimos");
  sendFormArray("formPalindromos", "resultadoPalindromos");
  sendFormArray("formMayusMinus", "resultadoMayusMinus");
  sendFormArray("formfactoriales", "resultadofactoriales");
  sendFormArray("formdiasFechas", "resultadodiasFechas");
  sendFormArray("formconvFechas", "resultadoconvFechas");
});