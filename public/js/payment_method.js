$(document).ready(function() {
  function input_disable() {
    console.log('all disabled.');
    $('.cash_amount').prop('disabled', true);
    $('.cheque_amount').prop('disabled', true);
    $('.transfer_amount').prop('disabled', true);
    $('.cheque_number').prop('disabled', true);
    $('.account_number').prop('disabled', true);
    $('.select_unit').prop('disabled', true);
    $('.cheque_bank').prop('disabled', true);
    $('.transfer_bank').prop('disabled', true);
  }
  $('.modal').on('shown.bs.modal', function() {
    $('.cash_amount').prop('disabled', false);
    $('.select_unit').prop('disabled', false);
  });
  $('.transfer_bank').on('select2:select', function() {
    console.log($(this).data('banks')[parseInt($(this).val()) - 1]['bank_account_number']);
    var account_number = $(this).data('banks')[parseInt($(this).val()) - 1]['bank_account_number'];
    $(this).closest('.form-group').find('.account_number').val(account_number);
  });
  $('.i-checks').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
  }).on('ifChecked', function() {
    console.log($(this).val());
    input_disable();
    $(this).closest('.form-group').find('input').each(function() {
      $(this).prop('disabled', false);
    });
    $(this).closest('.form-group').find('select').prop('disabled', false);
  });
});
