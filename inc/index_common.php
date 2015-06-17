<?php 
	include '../php/conexion.php';
	// include '../php/reader.php';
	include '../php/frontpagecontent.php';
	mysqli_set_charset($dbconnect,'utf8');
 ?>
<!-- ADS SECTION -->
<div id="AdSection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<p class="adimaget">AD IMAGE</p>
				</div>
				<div class="col-md-12">
					<input type="image" name="" value="" placeholder="IMAGE" id="addisplay" src="banner.jpg">
						<a class="btn btn-default hidden-xs" href="#" role="button" id="btnselect">
						<h3 id="lblselect">SELECT</h3>
						</a>
						<div class="col-xs-3">
							<button class="btn btn-default visible-xs" type="submit" id="btn-movil"><span class="glyphicon glyphicon-open-file"></span></button>
						</div>
				</div>

				</div>
			</div>
		</div>
	</div>
<!-- END ADS SECTION -->
<div id="FontPageSection" class="hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="fpsection">
				<p class="fptitle">FRONT PAGE NEWS</p>
				<div class="col-md-4">
					<p class="fptiles"><?php echo $titlea ?></p>
					<textarea readonly class="form-control" rows="4"><?php echo $contenta ?></textarea>
					<div class="btncenter">
						<button class="btn btn-default" type="submit" id="editbtn" data-toggle="modal" data-target="#modalno1">EDIT</button>
					</div>
				</div>
				<div class="col-md-4">
					<p class="fptiles"><?php echo $titleb ?></p>
					<textarea readonly class="form-control" rows="4"><?php echo $contentb ?></textarea>
					<div class="btncenter">
						<button class="btn btn-default" type="submit" id="editbtn" data-toggle="modal" data-target="#modalno2">EDIT</button>
					</div>
				</div>
				<div class="col-md-4">
					<p class="fptiles"><?php echo $titlec; ?></p>
					<textarea readonly class="form-control" rows="4"><?php echo $titlec; ?></textarea>
					<div class="btncenter">
						<button class="btn btn-default test" type="button" id="editbtn" data-toggle="modal" data-target="#modalno3">EDIT</button>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'modals_common.php'; ?>

<!-- Out Standing News -->
<div id="outstanding" class="hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="fpsection">
				<p class="otn">Out-Standing news</p>
				<div class="col-md-4">
					<textarea readonly class="form-control" rows="5" id="outstxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>					
				</div>
				<div class="col-md-4">
					<textarea readonly class="form-control" rows="5" id="outstxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>
				</div>	
				<div class="col-md-4">
					<textarea readonly class="form-control" rows="5" id="outstxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>				
				</div>
			</div>
		</div>
	</div>
</div>
