$(document).ready(function () {
  $('.select2').select2({
    width: '100%'
  });

  $('.datepicker').daterangepicker({
    singleDatePicker: true,
    locale: {
      format: config('format.date'),
    }
  });

  $('.datetimepicker').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    singleDatePicker: true,
    locale: {
      format: config('format.datetime'),
    }
  });

  $('body').on('click', '.action-confirmable', function (e) {
    e.preventDefault();
    swal({
      title: $(this).data('sa2-title') || "Confirmation",
      text: $(this).data('sa2-text') || "Are you sure?",
      type: $(this).data('sa2-type') || "question",
      animation: false,
      showCancelButton: true,
    }).then(result => {
      if (result.value !== true) {
        return;
      }
      if ($(this).is('a')) {
        return window.location = $(this).attr('href');
      }
      $(this).parents('form').submit();
    });
  });

});