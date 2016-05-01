<?php session_start(); ?>
<html>
  <head>
    <title>RATU RAWE</title>
  </head>
  <style type="text/css">
    .form{display:block; width:100%; background:#EEEFFF; color: #000FFF; 
			padding-top: 20px; padding-bottom: 20px; padding-left: 20px;}
    .sql{display:block; width:100%; background:#004C00; color: #90FF90; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
	.php{display:block; width:100%; background:#0A0765; color: #B6AEFA; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
	b{color: yellow; }
  </style>
  </head>
  <body>
<?php
//error_reporting(0);

if($_POST){

	$_SESSION['da']=count($_POST['kol']);
	$_SESSION['tblname']=$_POST['tbname'];
	for($df=0;$df<count($_POST['kol']);$df++)
	{
		$kol=$_POST['kol'][$df];
		$ktp=$_POST['tipe'][$df];
		$prm=$_POST['colparam'][$df];
		$_SESSION['data'][$df]=array($kol,$ktp,$prm);
	}
	
	
	//echo "<pre>"; print_r($_SESSION); echo "</pre>";
	//echo "<pre>"; print_r($_POST); echo "</pre>";
	echo "<span>Salin skrip Berikut pada konsol sql</span>";
	echo "<div class='sql'>";
	echo "CREATE TABLE ".$_POST['tbname']."(<br />";
	for($i=0;$i<$_SESSION['da'];$i++){
		//if($i==count($_POST['kol'])-1){$delimiter=";";}else{$delimiter=",";}
		if($_POST['colparam'][$i]!=''){
			if($i==0 && $_POST['tipe'][0]=='int'){
				echo $_POST['kol'][$i]." ".$_POST['tipe'][$i]."(".$_POST['colparam'][$i].") auto_increment,<br />";
			}else{
				echo $_POST['kol'][$i]." ".$_POST['tipe'][$i]."(".$_POST['colparam'][$i]."),<br />";
			}
		}else{
			echo $_POST['kol'][$i]." ".$_POST['tipe'][$i].$_POST['colparam'][$i].",<br />";
		}
	}
	echo "primary key(".$_POST['kol'][0].")<br />";
	echo ");";
	echo "</div>";
	
	echo "<a href='datashow.php'>Lanjut</a>";
	
	
}else{
	$jmlCol=$_GET['jk'];
	$tbName=$_GET['tn'];
	echo "<div class='form'>";
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
	echo "<input type='hidden' name='tbname' value='".$tbName."'>";
	echo "<i>Kolom pertama akan dijadikan kolom kunci</i><br />";
	echo "<table>";
	echo "<tr>
	<th>Nama Kolom</th>
	<th>Tipe Data</th>
	<th>Panjang data / Value</th>
	</tr>";
	for($i=0;$i<$jmlCol;$i++)
	{
		echo "
		<tr>
		<td><input type='text' name='kol[$i]'></td>
		<td><select name='tipe[$i]'>
			<option value='int'>Integer</option>
			<option value='varchar'>varchar</option>
			<option value='date'>Tanggal</option>
			<option value='enum'>Pilihan Terbatas</option>
		</select></td>
		<td><input type='text' name='colparam[$i]'></td>
		</tr>
		";
	}
	echo "<tr><td colspan='3' align='center'><input type='submit' value='Gelar'></td></tr>";
	echo "</table>";
	echo "</form>";
	echo "</div>";
}
?>
  </body>
</html>
