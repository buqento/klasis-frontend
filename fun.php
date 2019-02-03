<?php

$con = mysqli_connect("localhost","root","","klasisambon");
// $con = mysqli_connect("localhost","klasisko_bvqento","Manggureb3!","klasisko_dev");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

function getProdukKelembagaan($id, $con){
  $query = "SELECT name FROM kategori_produk WHERE id=".$id;
  $result = $con->query($query);
  $row = $result->fetch_assoc();
  return $row['name'];
}

function getNamaJemaat($jemaatId, $con){
	$sql = "SELECT nama_jemaat FROM jemaat WHERE id=".$jemaatId;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['nama_jemaat'];
}

function getChurch($jemaatId, $con){
	$sql = "SELECT gambar FROM jemaat WHERE id=".$jemaatId;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['gambar'];
}

function getJmlJemaat($con){
	$sql = "SELECT COUNT(id) AS jumlah FROM jemaat";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
	// $rowcount = mysqli_num_rows($result);
	// return $rowcount;
}

function getJmlUnit($con){
	$sql = "SELECT COUNT(id) AS jumlah FROM unit";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

function getJmlJiwa($con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

function getJmlPelayan($con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata_majelis";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}


function getJmlJiwaByStatusPernikahan($jemaat_id, $status_pernikahan, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND status_pernikahan=".$status_pernikahan;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

function getJmlJiwaByJemaat($jemaat_id, $jenis_kelamin, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND jenis_kelamin=".$jenis_kelamin;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

//sakramen baptisan
function getJmlJiwaByBaptisJenkel($jemaat_id, $status_baptis, $jenis_kelamin, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND status_baptis=".$status_baptis." AND jenis_kelamin=".$jenis_kelamin;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

//pendidikan
function getJmlJiwaByPendidikan($jemaat_id, $pendidikan_id, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND pendidikan_id=".$pendidikan_id;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

//pekerjaan
function getJmlJiwaByPekerjaan($jemaat_id, $pekerjaan_id, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND pekerjaan_id=".$pekerjaan_id;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

//disabilitas
function getJmlJiwaByDisabilitas($jemaat_id, $cacat_id, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM biodata WHERE jemaat_id=".$jemaat_id." AND cacat_id=".$cacat_id;
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

//range umur
function getJmlJiwaByUmur($dari, $sampai, $jenis_kelamin, $jemaat_id, $con){
	$sql = "SELECT rangeumur_jemaat($dari, $sampai, $jenis_kelamin, $jemaat_id) AS jumlah";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row['jumlah'];
}

function tglIndo($tgl){
	$tanggal = substr($tgl,8,2);
	$bulan = getBulan(substr($tgl,5,2));
	$tahun = substr($tgl,0,4);
	return $tanggal.' '.$bulan.' '.$tahun;		 
}	



function getBulan($bln){
	switch ($bln){
		case 1: 
			return "Jan";
			break;
		case 2:
			return "Feb";
			break;
		case 3:
			return "Mar";
			break;
		case 4:
			return "Apr";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Jun";
			break;
		case 7:
			return "Jul";
			break;
		case 8:
			return "Agu";
			break;
		case 9:
			return "Sep";
			break;
		case 10:
			return "Okt";
			break;
		case 11:
			return "Nov";
			break;
		case 12:
			return "Des";
			break;
	}
} 

function getKategori($id, $con){
	$sql = "SELECT name FROM kategori WHERE id=$id";
	$result = $con->query($sql);
	if ($result) {
	  $row = $result->fetch_assoc();
	}

	return $row['name'];
}

function getJmlKategori($kategori_id, $con){
	$sql = "SELECT COUNT(id) AS jumlah FROM artikel WHERE kategori_id=$kategori_id";
	$result = $con->query($sql);
	if ($result) {
	  $row = $result->fetch_assoc();
	}

	return $row['jumlah'];
}

function seo_title($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}