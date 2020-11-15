<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

			border: 1px solid #E1E1E1;
			background-color: white;	    
			margin-top: 20px;
			margin-right: 5px;
			width: 22%;
			float: left;
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

	<div>
		<center><h1 style="color:blue">WELCOME TO EAD EVENTS!</h1></center>
		<div class="column">
			<?php 
				include "koneksi.php";
				$sql = "SELECT * FROM event";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				 
				  while($row = $result->fetch_assoc()) {?>
				    <div class="card">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<center><h2><?php echo($row["name"]);?></h2></center>
							<center><p><?php echo($row["tanggal"]);?></p><center>
							<center><p><?php echo($row["tempat"]);?></p><center>
							<center><p>Kategori : <?php echo($row["kategori"]);?></p><center>
						</div>
						<div class="button">
							<a href="details.php?id=<?=$row['id']?>"><button class="btn-blue">Detail</button></a>
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
</html>