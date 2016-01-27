<?php

////////////////////////////////////////////////////////////////
//For creating the 1st page which includes the large sized tag//
////////////////////////////////////////////////////////////////


if(isset($_GET['type'])!='ajax'){
    include 'header.php';
    echo "<div id='main-content'>";
}
?>

<div id="output" style="display:none;">waiting for action</div>

<div class="ajax">

								<div class="info">
									<span>
										This signage size is for shared offices with a maxmuim 3 of three names.
									</span>
								</div>

							<div class="main clearfix">

								

								<div class="column column-a">
									
											<div class="info">
												<span>
													First Entry 
												</span>
											</div>

											<div class="col-md-5"><input class="form-control input-lg" type="text" id="prefix" placeholder="Prefix" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="fname" placeholder="First Name" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="lname" placeholder="Last Name" /></div>
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title1" placeholder="Job Title" /></div>
											<div class="col-md-12"><input class="form-control input-lg" type="text" id="Department1" placeholder="Department" /></div>


											 <div class="col-md-6"><input class="form-control input-lg" type="text" id="email" placeholder="Email" /> </div>
											<div class="col-md-3"><input class="form-control input-lg" type="text" id="ext" placeholder="EXT." /></div>
											<div class="col-md-3"> <input class="form-control input-lg" type="text" id="bleep" placeholder="Bleep" /></div>

										

											

								</div>

								<div class="column column-a column-marg">
									
											<div class="info">
												<span>
													Second Entry (optional)
												</span>
											</div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="prefix2" placeholder="Prefix" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="fname2" placeholder="First Name" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="lname2" placeholder="Last Name" /></div>
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title2" placeholder="Job Title" /></div>
											<div class="col-md-12"><input class="form-control input-lg" type="text" id="Department2" placeholder="Department" /></div>


											 <div class="col-md-6"><input class="form-control input-lg" type="text" id="email2" placeholder="Email" /> </div>
											<div class="col-md-3"><input class="form-control input-lg" type="text" id="ext2" placeholder="EXT." /></div>
											<div class="col-md-3"> <input class="form-control input-lg" type="text" id="bleep2" placeholder="Bleep" /></div>


											

								</div>

								<div class="column column-a column-marg">
											<div class="info">
												<span>
													Third Entry (optional)
												</span>
											</div>
										
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="prefix3" placeholder="Prefix" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="fname3" placeholder="First Name" /></div>
											<div class="col-md-5"><input class="form-control input-lg" type="text" id="lname3" placeholder="Last Name" /></div>
										

											<div class="col-md-12"><input class="form-control input-lg" type="text" id="title3" placeholder="Job Title" /></div>
											<div class="col-md-12"><input class="form-control input-lg" type="text" id="Department3" placeholder="Department" /></div>


											 <div class="col-md-6"><input class="form-control input-lg" type="text" id="email3" placeholder="Email" /> </div>
											<div class="col-md-3"><input class="form-control input-lg" type="text" id="ext3" placeholder="EXT." /></div>
											<div class="col-md-3"> <input class="form-control input-lg" type="text" id="bleep3" placeholder="Bleep" /></div>

									

											

								</div>

<div class="column-b">
									<input name="go" class="button-x" value="Create" onclick="getSuccessOutput();large()" type="button">
									<button id="printer" class="printer" onclick="Printed()">Print</button>
								</div>

								<div class="column-x">
									<canvas class="canvas" id="e3" width="1700" height="971"></canvas>
											<img id="tag" src="images/large-tag.png" alt="" width="150" height="364">
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