<?php 

$hari = array("Senin","Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu","Minggu");

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Depan</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h2>Data Hari</h2>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Hari</td>
		</tr>

		<?php
	    $no=1;
	    for($i=0;$i<count($hari);$i++){
	        echo"
	            <tr>
	                <td>$no</td>
	                <td>$hari[$i]</td>
	            </tr>            
	        ";
	        $no++;
	       }
		?>
	</table>

	<h3>Mencari Nama hari</h3>
	<form action="smth.php" method="post">
		<input type="text" name="hari">
		<button type="submit">Cari!!</button>
	</form>

</body>
</html>

<?php 

	if (isset($_POST['hari'])) {
	$inputAngka =$_POST['hari'];
	if ($inputAngka == 1) {
		echo "Hari".$hari[0];
	}elseif ($inputAngka == 2){ 
		echo "Hari".$hari[1];
	}elseif ($inputAngka == 3){ 
		echo "Hari".$hari[2];
	}elseif ($inputAngka == 4){ 
		echo "Hari".$hari[3];
	}elseif ($inputAngka == 5){ 
		echo "Hari".$hari[4];
	}elseif ($inputAngka == 6){ 
		echo "Hari".$hari[5];
	}elseif ($inputAngka == 7){ 
		echo "Hari".$hari[6];
	}else {
		echo "Data hari gagal";
	}
}

?>