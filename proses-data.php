
<pre>
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;	  

&lt;?php
//nama file: proses-<?php echo $_SESSION['tblname']; ?>.php
//libatkan file kelas-<?php echo $_SESSION['tblname']; ?>.php
require("kelas-<?php echo $_SESSION['tblname']; ?>.php");

//membentuk objek data
$data=new <?php echo $_SESSION['tblname']; ?>();

//variabel id diambil dari parameter <b>id=</b> pada address bar
//variabel proses diambil dari parameter <b>proses=</b> pada address bar

$proses=$_GET['proses'];

//jika parameter <b>proses=tambah</b>

if($proses=="tambah"){
	//buat variabel datainput bertipe array dengan isi dari elemen formulir
<?php
$datapost='';
for($i=0;$i<$_SESSION['da'];$i++){
	if($i!=$_SESSION['da']-1){$delimiter=",";}else{$delimiter="";}
	$datapost=$datapost."\$_POST['".$_SESSION['data'][$i][0]."']".$delimiter;
}
?>
	$datainput=array(<?php echo $datapost;?>);

	//panggil fungsi tambah dari file kelasdata.php dengan $datainput sebagai parameter
	$data->tambah($datainput);	
}

//jika parameter <b>proses=update</b>
if($proses=='update'){
	//buat variabel datainput bertipe array dengan isi dari elemen formulir
	//data yang merupakan kunci, ditempatkan di belakang
<?php
$datapost='';
for($i=1;$i<$_SESSION['da'];$i++){
	
	$datapost=$datapost."\$_POST['".$_SESSION['data'][$i][0]."'],";
}
	$datapost=$datapost."\$_POST['".$_SESSION['data'][0][0]."']";
?>
	$datainput=array(<?php echo $datapost;?>);
	
	//panggil fungsi update dari file kelasdata.php dengan $datainput sebagai parameter
	$data->update($datainput);

}

//jika parameter <b>proses=hapus</b>

if($proses=='hapus'){
	//panggil fungsi hapus dari file kelasdata.php
	$data->hapus($_GET['id']);
}

echo "proses ".$proses." selesai. &lt;a href='.\'&gt;kembali&lt;/a&gt;";

?&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
