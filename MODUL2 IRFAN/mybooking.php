<!DOCTYPE html>
<html>
<head>
	<title>mybooking</title>
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

		  	<?php 
		  		$nama = $_GET['inputNama'];
		  		$CheckIn = $_GET['inputDate'];
		  		$Duration = $_GET['inputDuration'];
		  		$RoomType = $_GET['inputRoom'];
		  		$nomor = $_GET['inputNomor'];
		  		$room = $_GET['inputRoom'];
		  	 ?>

			<div class="container">

				<table class="table table-hover text-center">
 
 					<tr>
				   		<td>
				    		<b>Booking Number</b>
				   		</td>
				   		<td>
				    		<b>Name</b>
				   		</td>
				   		<td>
				    		<b>Check-in</b>
				   		</td>
				   		<td>
				   	 		<b>Check-out</b>
				   		</td>
				  		<td>
				    		<b>Room Type</b>
				   		</td>
				   		<td>
				    		<b>Phone Number</b>
				   		<td>
				    		<b>Service</b>
				   		</td>
				   		<td>
				    		<b>Total Price</b>
				   		</td>

				   	<tr>

				   		<td>
				    		<b>
				    			<?php
     								echo rand();
    							?>
				    		</b>
				   		</td>

				   		<td>
				    		<b>
				    			<?php
     								echo "$nama";
    							?>
    						</b>


				   		</td>

				   		<td>
				    		<b>
				    			<?php
     								echo "$CheckIn";
    							?>

				    		</b>
				   		</td>

				   		<td>
				   	 		<b>
				   	 			<?php 
     								echo date('Y-m-d', strtotime($CheckIn. " +" .$Duration. "days"));
    							?>
				   	 		</b>
				   		</td>
				  		<td>
				    		<b>
				    		<?php
     							echo "$RoomType";
    						?>

    						</b>
				   		</td>

				   		<td>
				    		<b>
				    			<?php
     								echo "$nomor";
   								?>
				    		</b>
				   		<td>
				    		<b>
				    			<?php
      								if (!empty($_GET['InputService'])) {
      								foreach ($_GET['InputService'] as $InputService) {
        							echo "<li>" .$InputService."</li>";
       
       							if ($InputService == 'option1') {
        							$harga += 20;
       							}else if ($InputService == 'option2') {
        							$harga += 20;
       										}
      									}
     								}
     							?>
				    		</b>
				   		</td>
				   		<td>
				    		<b>
				    			<?php
      								if ($room == 'Standard') {
       									$harga = 90;
      								}else if ($room == 'Superior') {
       									$harga = 150;
      								}else if ($kamar == 'Luxury') {
       									$harga = 200;
      								}

      							?>
     							<?php 
     								echo '$ ' .$harga;

     							 ?>
				    		</b>
				   		</td>
				</tr>
			</tr>
			
  				</table>
 			</div> 



</body>
</html>