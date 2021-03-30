(function ($) {
  $(document).ready(function() {

    //Create and display modal using jquery dialog
    $("#northern-modal-button").click(function () {
      $('#northern-modal').toggleClass('hidden');
      $('#northern-modal').attr('aria-hidden', 'false');
      $('#northern-modal').dialog({
        modal: true,
        title: $('#northern_modal_label').html(),
      });
    });

    //Adjust aria on dialog close
    $("#northern-modal" ).on( "dialogclose", function(e) {
      $('#northern-modal').toggleClass('hidden');
      $('#northern-modal').attr('aria-hidden', 'true');
    } );

  });
})(jQuery);
