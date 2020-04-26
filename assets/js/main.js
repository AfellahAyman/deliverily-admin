(function ($) {
function handleApprove() {
  $('.handleApprove').click(function (event) {
    event.preventDefault();
    window.location.replace('http://localhost/handler.php?action=approve&id='+$(this).closest('tr').find('.id').text());
  });
}
handleApprove();
function handleDisable() {
  $('.handleDisable').click(function (event) {
    event.preventDefault();
    window.location.replace('http://localhost/handler.php?action=disable&id='+$(this).closest('tr').find('.id').text());
  });
}
handleDisable();
})(jQuery);
