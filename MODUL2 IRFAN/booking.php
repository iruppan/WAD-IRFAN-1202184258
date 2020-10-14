<!DOCTYPE html>
<html>
<head>
	<title>booking</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary" >
     
     		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       			<span class="navbar-toggler-icon"></span>
     		</button>

     		<div class=" collapse navbar-collapse justify-content-center" >
       			<ul class="navbar-nav " >

         			<li class="nav-item">
           				<a class=" nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
         			</li>

         			<li class="nav-item active">
           				<a class=" nav-link" href="booking.php">Booking<span class="sr-only">(current)</span></a>
         			</li>
         
       			</ul>
    		 </div>

  	</nav>

		<br><br>
    		<h2 style="color:#0000FF ";><center>Booking</center></h2>
    		<h3 style="color:#000080 ";><center>EAD Hotel</center></h3>
    	<br><br>

  	<div class="container">
  		<div class="row">
    		<div class="col-sm">

     			<form action="mybooking.php" method="GET" >
 					<div class="form-group row">
    						<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
   					 			<div class="col-sm-10">
      								<input type="Nama" class="form-control" name="inputNama">
    							</div>
    				</div>

    				<div class="form-group row">
    						<label for="inputDate" class="col-sm-2 col-form-label">Check-in</label>
   					 			<div class="col-sm-10">
      								<input type="Date" class="form-control" name="inputDate">
    							</div>
    				</div>

  					<div class="form-group row">
    						<label for="inputDuration" class="col-sm-2 col-form-label">Duration</label>
    							<div class="col-sm-10">
     								 <input type="Duration" class="form-control" name="inputDuration">
     								 <small id="passwordHelpBlock" class="form-text text-muted">
         									Day(s)
       								</small>
   								</div>
  					</div>

  					<div class="form-group row">
    						<label for="inputDuration" class="col-sm-2 col-form-label">Room Type</label>
    							<div class="col-sm-10">
     								<select action ="booking.php" method ="get" class="custom-select" name="inputRoom"> 
            							<option value="Standard" >Standard</option>
            							<option value="Superior">Superior</option>
            							<option value="Luxury">Luxury</option>
          							</select>
   								</div>
  					</div>

  					<div class="form-group row">
    					<div class="col-sm-2">Add Service(s)</div>
    						<div class="col-sm-10">

      							<div class="form-check form-check-inline">
  									<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Room Service" name="InputService[]">
  										<label class="form-check-label" for="inlineCheckbox1">Room Service</label>
								</div>

								<div class="form-check form-check-inline">
  									<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Breakfast" name="InputService[]">
 										 <label class="form-check-label" for="inlineCheckbox2">Breakfast</label>
								</div>
								<small id="passwordHelpBlock" class="form-text text-muted">
         									$20/Service
       								</small>
    						</div>
  						</div>

  					<div class="form-group row">
    						<label for="inputNomor" class="col-sm-2 col-form-label">Phone Number</label>
   					 			<div class="col-sm-10">
      								<input type="Nomor" class="form-control" name="inputNomor">
    							</div>
    				</div>

  					<div class="form-row">
         				<div class="col-sm-12">
           					<center><input type="submit" name="submit" value="Book" class="btn btn-primary btn-lg btn-block mt-1 "></center>
        				</div>
        			</div>
				</form>

			</div>

    		<div class="col-sm">
          <?php
          $room = $_GET = ['inputRoom'] ;

          if ($room == 'Standard') {
            #gatau bang, soalnya kalo mau buat image picker dari option pake database.
          }

           ?>

            <img src="img/standard.png" style="width: 100%; height: 300px">
            
    		</div>


  		</div>
	</div>

</body>
</html>