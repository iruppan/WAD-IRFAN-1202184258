<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:blue;">
    <div class="container">
      <h1 style="color: white">EAD EVENTS</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="home.php">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="buat.php">Buat Event</a>
          </li>
          
        </ul>
      </div>
  </nav>
  <br><br>


	

	<div class="container">
  <div class="row">
    <div class="col">
      <h4 style="color: blue">Buat Event</h4>
    </div>
    <div class="col">
      
    </div>
  </div>

			<form method="POST" action="simpan.php">
                <br>

                <div class="container">
  					<div class="row">
    				<div class="col">
				      					<div class="card" style="width: 30rem;">
				  
				  			<div class="card-body">

				                <div class="form-group">	
				                	<label class= "text-muted">Nama</label>
				                    <input type="input" class="form-control" id="fname" name="name" >
				                </div>
				                <div class="form-group">
				                	<label class= "text-muted">Deskripsi</label>
				                  	<input type="input" class="form-control" name="deskripsi" id="dek">
				                </div>
				                <div class="form-group">
				    			  <label for="exampleFormControlFile1">Upload Gambar</label>
				    			  <input type="file" class="form-control-file" name="upload" id="myfile">
				  				</div>
				  			
				  				<label class= "text-muted">Kategori</label>
				  				<br>
				  				<div class="form-check form-check-inline">
				  					<input class="form-check-input" type="radio" name="kategori" value="online">
				  					<label class="form-check-label" for="inlineRadio1">Online</label>
								</div>
								<div class="form-check form-check-inline">
				  					<input class="form-check-input" type="radio" name="kategori" value="Offline">
				  					<label class="form-check-label" for="inlineRadio2">Offline</label>
								</div>
							
				  			</div>
						</div>
    				</div>
    				<div class="col">
					      		
					      		<div class="card" style="width: 30rem;">
					  
					  				<div class="card-body">
										<div class="form-group">	
				                			<label class= "text-muted">Tanggal</label>
				                    		<input type="date" class="form-control" id="jm" name="jm" >
				                		</div>
				                		<div class="form-group">	
				                			<label class= "text-muted">Jam Mulai</label>
				                    		<input type="time" class="form-control" name="nama" >
				                		</div>
				                		<div class="form-group">	
				                			<label class= "text-muted">Jam Berakhir</label>
				                    		<input type="time" class="form-control"id="jb" name="jb">
				                		</div>
				                		<div class="form-group">	
				                			<label class= "text-muted">Tempat</label>
				                    		<input type="input" class="form-control" id="tmp" name="tempat">
				                		</div>
				                		<div class="form-group">	
				                			<label class= "text-muted">Harga</label>
				                    		<input type="number" class="form-control" id="hrg" name="Harga">
				                		</div>
				                		<div class="form-group">	
				                			<label class= "text-muted">Benefit</label>
				                			<br>
				                    		<input type="checkbox" name="benefit[]" value="Snacks">&nbsp;Snacks&nbsp;&nbsp;&nbsp;
				    						<input type="checkbox" name="benefit[]" value="Sertifikat">&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
				    						<input type="checkbox" name="benefit[]" value="Souvenir">&nbsp;Souvenir
				                		</div>

				                		<div class="button" >
											<button type="submit" name="simpan" class="btn-blue">Submit</button>
											<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
										</div>






					             
								</div>
							</div>

    				</div>
  				</div>

            

		

                      
                </form>


 
    

</body>
</html>