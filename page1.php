


<?php

///////////////////////////////////////////////////////////////
//For creating the 1st page which includes the small sized tag/
///////////////////////////////////////////////////////////////


if(isset($_GET['type'])!='ajax'){
    include 'header.php';
    echo "<div id='main-content'>";
}

?>

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
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title1" placeholder="Job Title" /></div>
											<div class="col-md-12"><input class="form-control input-lg" type="text" id="Department1" placeholder="Department" /></div>

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
											<div id="printHere" style="margin-bottom:20px;">
	
</div>
											

								</div>

								<script src="js/myjs.js"></script>
							</div><!-- /main -->
						</div><!-- /ajax -->



						<div class="bubblingG">
<span id="bubblingG_1">
</span>
<span id="bubblingG_2">
</span>
<span id="bubblingG_3">
</span>
</div>
<?php
if($_GET['type']!='ajax'){
    echo "</div>";
    include 'footer.php';
}?>