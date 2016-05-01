<?php session_start(); ?>
<html>
  <head>
    <title>RATU RAWE</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bs/bootstrap.min.css">
	<script src="bs/jquery.min.js"></script>
	<script src="bs/bootstrap.min.js"></script>
	<style type="text/css">
	#kiri{background:#DDD; padding-left: 2%; height: 100%;}
	#kiri li{list-style-type:none;}
	pre{height:100%; width: 100%;}
	
    .form{display:block; width:100%; background:#EEEFFF; color: #000FFF; 
			padding-top: 20px; padding-bottom: 20px; padding-left: 20px;}
    .sql{display:block; width:100%; background:#004C00; color: #90FF90; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
	.php{display:block; width:100%; background:#0A0765; color: #B6AEFA; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
  
	</style>
  </head>
  <body>
<div class="row">
	<div class="col-md-2" id="kiri">
<?php
//session_start();
$tn=$_SESSION['tblname'];
echo "
	<p>File Pengolahan</p>
	<li><a href='datashow.php?p=kelasdata.php'>File kelas-".$tn.".php</a></li>
	<li><a href='datashow.php?p=tampil-data.php'>File tampil-".$tn.".php</a></li>
	<li><a href='datashow.php?p=detil-data.php'>File detil-".$tn.".php</a></li>
	<li><a href='datashow.php?p=form-input-data.php'>File form-input-".$tn.".php</a></li>
	<li><a href='datashow.php?p=form-update-data.php'>File form-update-".$tn.".php</a></li>
	<li><a href='datashow.php?p=proses-data.php'>File proses-".$tn.".php</a></li>
	<br/><br/>
	<p>File Penampilan</p>
	<li><a href='datashow.php?p=fileindex.php'>File Index.php</a></li>
	<li><a href='datashow.php?p=rencanaMenu.php'>Lebih Lanjut</a></li>
	<br/><br/>
	<li><a href='putus.php'>Selesai</a></li>

";
echo "</div>";
echo "<div class='col-md-10'>";
//echo "<pre>"; print_r($_SESSION); echo "</pre>";
if(!$_GET){
	echo "Belum ada pilihan <hr />";
}else{
	switch($_GET['p']){
		default: echo "Belum ada pilihan"; break;
		case 'kelasdata.php':include('kelasdata.php'); break;
		case 'tampil-data.php':include('tampil-data.php'); break;
		case 'detil-data.php':include('detil-data.php'); break;
		case 'form-input-data.php':include('form-input-data.php'); break;
		case 'form-update-data.php':include('form-update-data.php'); break;
		case 'proses-data.php':include('proses-data.php'); break;
		case 'fileindex.php': include('fileindex.php'); break;
		case 'rencanaMenu.php': include('rencanaMenu.html'); break;
		case 'pagescript.php': include('pagescript.php'); break;
	}
}
echo "</div>";
?>
</div>
   </body>
</html>
