$(function() {
  $('#edit-continue-shopping, #continue-shopping-link a').click(function() {
    window.history.go(-1);
    return false;
  });
});   //directs people to their previous page when they click the continue shopping link.