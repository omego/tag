<?php
if($_GET['type']!='ajax'){
    include 'header.php';
    echo "<div id='main-content'>";
}
?>



<div class="ajax">
							<div class="main clearfix">
							<div class="column">
							</div>
								<div class="column">
									<form action="index.html" method="post">
										
											<div><input class="form-control input-lg" type="text" id="prefix" placeholder="Prefix" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="fname" placeholder="First Name" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="lname" placeholder="Last Name" /></div>
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title1" placeholder="Title" /></div>


											 <div class="col-md-6"><input class="form-control input-lg" type="text" id="email" placeholder="Email" /> </div>
											<div class="col-md-3"><input class="form-control input-lg" type="text" id="ext" placeholder="EXT." /></div>
											<div class="col-md-3"> <input class="form-control input-lg" type="text" id="bleep" placeholder="Bleep" /></div>

										<input name="go" class="button-x" value="Create" onclick="dance()" type="button">
									</form>

											

								</div>
								<div class="column">
								</div>
								<div class="column-x">
									<canvas class="canvas" id="e" width="1700" height="413"></canvas>
											<img id="tag" src="images/small-tag.png" alt="" width="150" height="364">
								</div>

								<div class="info">
									<p>Designed and developed by COMJ IT</p>
								</div>
								
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