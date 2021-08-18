$(document).ready(function () {
  var modal = $('.modal');
  var modal2 = $('.modal2');
  var modal3 = $('.modal3');
  var modal4 = $('.modal3');
  var btn1 = $('.btn1');
  var btn2 = $('.btn2');
  var btn3 = $('.btn3');
  var btn4 = $('.btn4');
  var cancel1 = $('.btn-cancel');
  var cancel2 = $('.btn-cancel2');
  var cancel3 = $('.btn-cancel3');
  var cancel4 = $('.btn-cancel4');

  btn1.click(function () {
    modal.show();
  });
  cancel1.click(function () {
    modal.hide();
  });

  btn2.click(function () {
    modal2.show();
  });
  cancel2.click(function () {
    modal2.hide();
  });

  btn3.click(function () {
    modal3.show();
  });
  cancel3.click(function () {
    modal3.hide();
  });

  btn4.click(function () {
    modal4.show();
  });
  cancel4.click(function () {
    modal4.hide();
  });

});
