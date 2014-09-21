/*!
 * ========================================================================
 * Office signage creator Javascript
 * Copyright 2014 Moayad alserihi, COMJ
 * ========================================================================
 */



    $.cergis = $.cergis || {};
$.cergis.loadContent = function () {
    $('.bubblingG').show();
    $.ajax({
        url: pageUrl + '?type=ajax',
        success: function (data) {
            $('#main-content').html(data);
            // hide ajax loader
            $('.bubblingG').hide();
        }
    });
    if (pageUrl != window.location) {
        window.history.pushState({ path: pageUrl }, '', pageUrl);
    }
}
$.cergis.backForwardButtons = function () {
    $(window).on('popstate', function () {
        $.ajax({
            url: location.pathname + '?type=ajax',
            success: function (data) {
                $('#main-content').html(data);
            }
        });
    });
}
$("a").on('click', function (e) {
    pageUrl = $(this).attr('href');
    $.cergis.loadContent();
    e.preventDefault();
});
$.cergis.backForwardButtons();


     function small() {

      
      var canvas = document.getElementById("e");
      var context = canvas.getContext("2d");

      var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;

      var email = document.getElementById("email").value;
      var ext = document.getElementById("ext").value;
      var bleep = document.getElementById("bleep").value;

      var spaced = " ";
      var comma = ", ";
      var bbb = "<br>";

      var tag = document.getElementById("tag");
      var qr = document.getElementById("qr");

      
      var firstline = prefix + spaced + fname + spaced + lname;
      var secondline = title1;
      var thirdline = email + comma + ext + comma + bleep;

      var qrx = firstline + bbb + secondline + bbb + thirdline;
      var str = "<img id='qr' src='http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx + "' />";
      $('#printHere').html(str);

      context.drawImage(tag, 0, 0);


      context.fillStyle = "#ab8630";
      context.font = "bold 70px Arial";
      context.fillText(firstline, 100, 170);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(secondline, 100, 217);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline, 100, 260);
      context.drawImage(qr, 1220, 60);
    };


function meduim() {

      
      var canvas = document.getElementById("e");
      var context = canvas.getContext("2d");

      var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;

      var email = document.getElementById("email").value;
      var ext = document.getElementById("ext").value;
      var bleep = document.getElementById("bleep").value;

      var spaced = " ";
      var comma = ", ";
      var bbb = "<br>";

      var tag = document.getElementById("tag");
      var qr = document.getElementById("qr");

      
      var firstline = prefix + spaced + fname + spaced + lname;
      var secondline = title1;
      var thirdline = email + comma + ext + comma + bleep;

      var qrx = firstline + bbb + secondline + bbb + thirdline;
      var str = "<img id='qr' src='http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx + "' />";
      $('#printHere').html(str);

      context.drawImage(tag, 0, 0);


      context.fillStyle = "#ab8630";
      context.font = "bold 70px Arial";
      context.fillText(firstline, 100, 170);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(secondline, 100, 217);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline, 100, 260);
      context.drawImage(qr, 1220, 60);
    };

