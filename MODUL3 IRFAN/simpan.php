<?php
	if (isset($_POST['simpan'])) {
		include "koneksi.php";
		$name = $_POST['name'];
		$deskripsi = $_POST['deskripsi'];
		$kategori = $_POST['kategori'];
		$tgl = $_POST['tgl'];
		$jm = $_POST['jm'];
		$jb = $_POST['jb'];
		$tempat = $_POST['tempat'];
		$harga = $_POST['Harga'];

		$for_query = '';
        foreach($_POST["benefit"] as $benefit){
			$for_query .= $benefit . ', ';
        }

        $for_query = substr($for_query, 0, -2);

		$rand = rand();
		$ekstensi =  array('png','jpg','JPG','jpeg');
		$filename = $_FILES['upload']['name'];
		$ukuran = $_FILES['upload']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$ekstensi) ) {
			header("location:index.php");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['upload']['tmp_name'], 'img/'.$rand.'_'.$filename);
				$sql = "INSERT INTO `event` (`name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES ('$name', '$deskripsi', '$xx', '$kategori', '$tgl', '$jm', '$jb', '$tempat', '$harga', '$for_query')";
				if ($conn->query($sql) === TRUE) {
				  header("location:index.php");
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}else{
				header("location:index.php");
			}
		}
	}
?>