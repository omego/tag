

<div id="output" style="display:none;">waiting for action</div>


<div class="ajax">
							<div class="main clearfix">
							<div class="column">
							</div>
								<div class="column column-a column-marg">
									<form>
										
											<div><input class="form-control input-lg" type="text" id="prefix" placeholder="Prefix" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="fname" placeholder="First Name" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="lname" placeholder="Last Name" /></div>
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title1" placeholder="Title" /></div>


											 <div class="col-md-6"><input class="form-control input-lg" type="text" id="email" placeholder="Email" /> </div>
											<div class="col-md-3"><input class="form-control input-lg" type="text" id="ext" placeholder="EXT." /></div>
											<div class="col-md-3"> <input class="form-control input-lg" type="text" id="bleep" placeholder="Bleep" /></div>

										
									</form>

											

								</div>
								<div class="column">
								</div>
								<div class="column-b">
											<input name="go" class="button-x" value="Create" onclick="getSuccessOutput();small();" type="button">
											<button id="printer" class="printer" onclick="Printed()">Print</button>
								</div>
								<div class="column-x">
									<canvas class="canvas" id="e1" width="1700" height="413"></canvas>
											<img id="tag" src="images/small-tag.png" alt="" width="150" height="364">
											<div id="printHere"></div>
											

								</div>

							</div><!-- /main -->
						</div><!-- /ajax -->


 <script type="text/javascript">
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
          };
          images[src].src = sources[src];
        }
      }
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      var sources = {
        image1: 'http://farm3.static.flickr.com/2666/3686946460_0acfa289fa_m.jpg',
        image2: 'http://farm4.static.flickr.com/3611/3686140905_cbf9824a49_m.jpg'
      };

      loadImages(sources, function(images) {
        context.drawImage(images.image1, 100, 30, 200, 137);
        context.drawImage(images.image2, 350, 55, 93, 104);
      });
 </script>