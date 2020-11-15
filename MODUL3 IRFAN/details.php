<!DOCTYPE html>
<html>
<head>
	<title>Details Event</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<style>
		.column {
			width: 100%;
			padding: 0 10%;
		}

		
		.fakeimg {
			background-color: #aaa;
			width: 100%;
			height:200px;
		}

		.card {
			margin: 0 auto;
        	float: none; 
       	    margin-bottom: 10px;
       	    border: 1px solid #E1E1E1;
			background-color: white;	    
			width: 25%;
			
		}
		.text{
			padding: 0 20px;
		}
		.button{
			text-align: right;
			padding: 20px;
			border-top: 1px solid #E1E1E1;
		}

		.row{
			padding-bottom: 20px;
			border: 1px solid #0078B7;
		}
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
</head>
<body>

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
	<div >
		<div>
		 <center><h1>Detail Event</h1></center>
		</div>
		<div class="column2">
			<?php 
				include "koneksi.php";
				$ID=$_GET['id'];
      			$sql = "SELECT * FROM event WHERE id='$ID'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) { 
					$checked = explode(', ', $row['benefit']);
				  	?>
				    <div class="card">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<h2><?php echo($row["name"]);?></h2>
							<h4>Deskripsi</h4>
							<p><?php echo($row["deskripsi"]);?></p>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["tanggal"]);?></p>
								<p><?php echo($row["tempat"]);?></p>
								<p><?php echo($row["mulai"]);?>&nbsp;&nbsp;<?php echo($row["berakhir"]);?></p>
							</div>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["benefit"]);?></p>
							</div>
							<br>
							<div style="width: 100%;">
								<p><b>Kategori:</b> <?php echo($row["kategori"]);?></p>
								<h4>HTM Rp.<?php echo($row["harga"]);?></h4>								
							</div>
						</div>
						<div class="button">
							<button class="btn-blue" id="myBtn">Edit</button>
							<a href="hapus.php?id=<?=$row['id']?>"><button class="btn-red">Delete</button></a>
						</div>
				    </div>
				    <div id="myModal" class="modal">

					  <!-- Modal content -->
					<div class="modal-content">
					    <span class="close">&times;</span>
					    <p>Edit Content Events</p>

						<form action="ubah.php" method="POST" enctype="multipart/form-data" class="tengah">
							<input type="hidden" name="id" value="<?php echo($row["id"]);?>">
								<div class="column">
									<h2 style="background: #DC3545;color:#DC3545;border-radius: 4px;">.</h2>
								    <label for="fname">Name</label>
								    <input type="text" id="fname" name="name" value="<?php echo($row["name"]);?>" placeholder="Your name..">

								    <label for="dek">Deskripsi</label>
								    <textarea id="dek" name="deskripsi" ><?php echo($row["deskripsi"]);?></textarea>

								    <label for="myfile">Upload Gambar</label>
				  					<input type="file" id="myfile" name="upload">
								  	
								  	<label for="kat">Kategori</label>
								  	<div style="margin: 8px 0;">
									  	<input type="radio" name="kategori" value="Online" <?php echo ($row["kategori"]=="Online") ? 'checked="checked"' : '' ;?>>Online&nbsp;&nbsp;
									  	<input type="radio" name="kategori" value="Offline" <?php echo ($row["kategori"]=="Offline") ? 'checked="checked"' : '' ;?>>Offline
									</div>
								</div>

								<div class="column">
									<h2 style="background: #007BFF;color:#007BFF;border-radius: 4px;">.</h2>
									<label for="ttl">Tanggal</label>
								    <input type="date" id="ttl" name="tgl" value="<?php echo($row["tanggal"]);?>">

								    <div class="tourow" style="margin-right: 4%">
								    	<label for="jm">Jam Mulai</label>
									    <input type="time" id="jm" name="jm" value="<?php echo($row["mulai"]);?>">
								    </div>
								    <div class="tourow">
								    	<label for="jb">Jam Berakhir</label>
									    <input type="time" id="jb" name="jb" value="<?php echo($row["berakhir"]);?>">
								    </div>

								    <label for="tmp">Tempat</label>
								    <input type="text" id="tmp" name="tempat" value="<?php echo($row["tempat"]);?>">

								    <label for="hrg">Harga</label>
								    <input type="number" id="hrg" name="Harga"  value="<?php echo($row["harga"]);?>">

								    <label for="hrg">Benefit</label>
								    <div style="margin: 8px 0;">
									    <input type="checkbox" name="benefit[]" value="Snacks" <?php in_array ('Snacks', $checked) ? print "checked" : ""; ?>>&nbsp;Snacks&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Sertifikat" <?php in_array ('Sertifikat', $checked) ? print "checked" : ""; ?>>&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Souvenir" <?php in_array ('Souvenir', $checked) ? print "checked" : ""; ?>>&nbsp;Souvenir
								    </div>
									<div class="button" >
										<button type="submit" name="simpan" class="btn-blue">Submit</button>
										<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
									</div>
								</div>
						</form>
					</div>

					</div>
				    <?php
				  }
				} else {
				  echo "No Event Found";
				}
				$conn->close();
			?>	    
		</div>
	</div>
</body>

</body>
</html>