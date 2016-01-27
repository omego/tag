/*!
 * ========================================================================
 * Office signage creator Javascript
 * Copyright 2014 Moayad alserihi, COMJ
 * ========================================================================
 */


$( document ).ready(function() {

      var post = document.getElementById('printer');
      post.style.display = 'none'; // to show
});
      function Printed() {
              var post = document.getElementById('printer');
      post.style.display = 'none'; // to show
       window.print();
      }

  /*$.cergis = $.cergis || {};*/
/*$.cergis.loadContent = function () {
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
};
*/
/*$.cergis.backForwardButtons = function () {
    $(window).on('popstate', function () {
        $.ajax({
            url: location.pathname + '?type=ajax',
            success: function (data) {
                $('#main-content').html(data);
            }
        });
    });
};*/
/*$("a").on('click', function (e) {
    pageUrl = $(this).attr('href');
    $.cergis.loadContent();
    e.preventDefault();
});
$.cergis.backForwardButtons();*/


     function small() {

      var canvas = document.getElementById('e1');
      var context = canvas.getContext('2d');
       var post = document.getElementById('printer');
      post.style.display = 'block'; // to show
            var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;
      var Department1 = document.getElementById("Department1").value;
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
      var secthirdline = Department1;
      var thirdline = email + spaced + "Ext. " + ext + spaced + bleep;

      var qrx = firstline + bbb + secondline + bbb + secthirdline + bbb + thirdline;
      var str = "http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx + "";

      function loadImages(sources, callback) {

        var images = {};
        var loadedImages = 0;
        var numImages = 0;
        // get num of sources
        for(var src in sources) {
          numImages++;
        }
        for(var src in sources) {
          images[src] = new Image();
          images[src].onload = function() {
            if(++loadedImages >= numImages) {
              callback(images);
            }

      context.fillStyle = "#ab8630";
      context.font = "bold 70px Arial";
      context.fillText(firstline, 100, 160);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secondline, 100, 210);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secthirdline, 100, 255);


      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline, 100, 300);
     
          };
          images[src].src = sources[src];
        }
      }

      var sources = {
        image1: './images/small-tag.png',
        image2: str
      };
      loadImages(sources, function(images) {
      context.drawImage(images.image1, 0, 0, 1700, 413);

             if (fname && lname && title1 != "") {
      context.drawImage(images.image2, 1450, 95, 200, 200);         
       }


      });
       

      
    }

    function meduim() {
      


      var canvas = document.getElementById('e2');
      var context = canvas.getContext('2d');
       var post = document.getElementById('printer');
      post.style.display = 'block'; // to show
            var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;
      var Department1 = document.getElementById("Department1").value;
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
      var secthirdline = Department1;
      var thirdline = email + spaced + "Ext. " + ext + spaced + bleep;

      var qrx = firstline + bbb + secondline + bbb + secthirdline + bbb + thirdline;
      var str = "http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx + "";

      function loadImages(sources, callback) {

        var images = {};
        var loadedImages = 0;
        var numImages = 0;
        // get num of sources
        for(var src in sources) {
          numImages++;
        }
        for(var src in sources) {
          images[src] = new Image();
          images[src].onload = function() {
            if(++loadedImages >= numImages) {
              callback(images);
            }

      context.fillStyle = "#ab8630";
      context.font = "bold 80px Arial";
      context.fillText(firstline, 100, 210);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 40px Arial";
      context.fillText(secondline, 100, 280);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 40px Arial";
      context.fillText(secthirdline, 100, 330);


      context.fillStyle = "#c1c1c1";
      context.font = "bold 40px Arial";
      context.fillText(thirdline, 100, 390);
          };
          images[src].src = sources[src];
        }
      }

      var sources = {
        image1: './images/meduim-tag.png',
        image2: str
      };
      loadImages(sources, function(images) {
      context.drawImage(images.image1, 0, 0, 1700, 550);

       if (fname && lname && title1 != "") {
      context.drawImage(images.image2, 1450, 150, 200, 200);
       }

      });
       

    }

    function large() {


var post = document.getElementById('printer');
      post.style.display = 'block'; // to show
      
      var canvas = document.getElementById("e3");
      var context = canvas.getContext("2d");

      var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;
      var Department1 = document.getElementById("Department1").value;

      var email = document.getElementById("email").value;
      var ext = document.getElementById("ext").value;
      var bleep = document.getElementById("bleep").value;

      ////

      var prefix2 = document.getElementById("prefix2").value;
      var fname2 = document.getElementById("fname2").value;
      var lname2 = document.getElementById("lname2").value;

      var title2 = document.getElementById("title2").value;
      var Department2 = document.getElementById("Department2").value;

      var email2 = document.getElementById("email2").value;
      var ext2 = document.getElementById("ext2").value;
      var bleep2 = document.getElementById("bleep2").value;

      ////

      var prefix3 = document.getElementById("prefix3").value;
      var fname3 = document.getElementById("fname3").value;
      var lname3 = document.getElementById("lname3").value;

      var title3 = document.getElementById("title3").value;
      var Department3 = document.getElementById("Department3").value;

      var email3 = document.getElementById("email3").value;
      var ext3 = document.getElementById("ext3").value;
      var bleep3 = document.getElementById("bleep3").value;

      var eee ="";
      var eee2 = "";
      var eee3 = "";

      var spaced = " ";
      var comma = ", ";
      var bbb = "<br>";
      if (ext.length != 0){
       eee = "Ext. " + ext;}
      if (ext2.length != 0){
       eee2 = "Ext. " + ext2;}
      if (ext3.length != 0){
       eee3 = "Ext. " + ext3;}

      var tag = document.getElementById("tag");
      var qr = document.getElementById("qr");

      
      var firstline = prefix + spaced + fname + spaced + lname;
      var secondline = title1;
      var secthirdline = Department1;
      var thirdline =  email + spaced + eee + spaced + bleep;
        


      var firstline2 = prefix2 + spaced + fname2 + spaced + lname2;
      var secondline2 = title2;
      var secthirdline2 = Department2;
      var thirdline2 = email2 + spaced + eee2 + spaced + bleep2;

      var firstline3 = prefix3 + spaced + fname3 + spaced + lname3;
      var secondline3 = title3;
      var secthirdline3 = Department3;
      var thirdline3 = email3 + spaced + eee3 + spaced + bleep3;



      var qrx = firstline + bbb + secondline + bbb + secthirdline + bbb + thirdline;
      var str = "http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx + "";

      var qrx2 = firstline2 + bbb + secondline2 + bbb + secthirdline2 + bbb + thirdline2;
      var str2 = "http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx2 + "";

      var qrx3 = firstline3 + bbb + secondline3 + bbb + secthirdline3 + bbb + thirdline3;
      var str3 = "http://chart.googleapis.com/chart?chs=230x230&cht=qr&chl=" + qrx3 + "";

      function loadImages(sources, callback) {

        var images = {};
        var loadedImages = 0;
        var numImages = 0;
        // get num of sources
        for(var src in sources) {
          numImages++;
        }
        for(var src in sources) {
          images[src] = new Image();
          images[src].onload = function() {
            if(++loadedImages >= numImages) {
              callback(images);
            }

      context.fillStyle = "#ab8630";
      context.font = "bold 50px Arial";
      context.fillText(firstline, 100, 200);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secondline, 100, 250);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secthirdline, 100, 290);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline, 100, 330);

      ////

      context.fillStyle = "#ab8630";
      context.font = "bold 50px Arial";
      context.fillText(firstline2, 100, 400);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secondline2, 100, 450);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secthirdline2, 100, 490);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline2, 100, 530);
      ////

      context.fillStyle = "#ab8630";
      context.font = "bold 50px Arial";
      context.fillText(firstline3, 100, 640);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secondline3, 100, 690);

      context.fillStyle = "#c1c1c1"; 
      context.font = "bold 30px Arial";
      context.fillText(secthirdline3, 100, 730);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline3, 100, 770);



          };
          images[src].src = sources[src];
        }
      }

      var sources = {
        image1: './images/large-tag.png',
        image2: str,
        image3: str2,
        image4: str3
      };
      loadImages(sources, function(images) {
     
      context.drawImage(images.image1, 0, 0, 1700, 960);
       if (fname && lname && title1 != "") {
            context.drawImage(images.image2, 1450, 105, 200, 200);
          }
      if (fname2 && lname2 && title2 !=""){
      context.drawImage(images.image3, 1450, 320, 200, 200);
    }
          if (fname3 && lname3 && title3 !=""){

      context.drawImage(images.image4, 1450, 555, 200, 200)
    }


      });


       }

     /* var post = document.getElementById('printer');
      post.style.display = 'block'; // to show
      
      var canvas = document.getElementById("e3");
      var context = canvas.getContext("2d");

      var prefix = document.getElementById("prefix").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;

      var title1 = document.getElementById("title1").value;

      var email = document.getElementById("email").value;
      var ext = document.getElementById("ext").value;
      var bleep = document.getElementById("bleep").value;

      ////

      var prefix2 = document.getElementById("prefix2").value;
      var fname2 = document.getElementById("fname2").value;
      var lname2 = document.getElementById("lname2").value;

      var title12 = document.getElementById("title12").value;

      var email2 = document.getElementById("email2").value;
      var ext2 = document.getElementById("ext2").value;
      var bleep2 = document.getElementById("bleep2").value;

      ////

      var prefix3 = document.getElementById("prefix3").value;
      var fname3 = document.getElementById("fname3").value;
      var lname3 = document.getElementById("lname3").value;

      var title13 = document.getElementById("title13").value;

      var email3 = document.getElementById("email3").value;
      var ext3 = document.getElementById("ext3").value;
      var bleep3 = document.getElementById("bleep3").value;

      var spaced = " ";
      var comma = ", ";
      var bbb = "<br>";

      var tag = document.getElementById("tag");


      
      var firstline = prefix + spaced + fname + spaced + lname;
      var secondline = title1;
      var thirdline = email + comma + ext + comma + bleep;

      var firstline2 = prefix2 + spaced + fname2 + spaced + lname2;
      var secondline2 = title12;
      var thirdline2 = email2 + comma + ext2 + comma + bleep2;

      var firstline3 = prefix3 + spaced + fname3 + spaced + lname3;
      var secondline3 = title13;
      var thirdline3 = email3 + comma + ext3 + comma + bleep3;

      //var secondline = prefix2 + spaced + fname2 + spaced + lname2 + bbb + title12 + bbb + email2 + comma + ext2 + comma + bleep2;
      //var thirdline = prefix3 + spaced + fname3 + spaced + lname3 + bbb + title13 + bbb + email3 + comma + ext3 + comma + bleep3;

      context.drawImage(tag, 0, 0);


      context.fillStyle = "#ab8630";
      context.font = "bold 40px Arial";
      context.fillText(firstline, 100, 210);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(secondline, 100, 267);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline, 100, 330);

      ////

      context.fillStyle = "#ab8630";
      context.font = "bold 40px Arial";
      context.fillText(firstline2, 100, 440);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(secondline2, 100, 500);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline2, 100, 560);

      ////

      context.fillStyle = "#ab8630";
      context.font = "bold 40px Arial";
      context.fillText(firstline3, 100, 670);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(secondline3, 100, 740);

      context.fillStyle = "#c1c1c1";
      context.font = "bold 30px Arial";
      context.fillText(thirdline3, 100, 800);
      */
    
  
  