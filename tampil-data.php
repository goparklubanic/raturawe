<pre>
&lt;?php
//nama file: tampil-<?php echo $_SESSION['tblname']; ?>.php
//libatkan file kelas-<?php echo $_SESSION['tblname']; ?>.php
require("kelas-<?php echo $_SESSION['tblname']; ?>.php");

//membentuk objek data
$data=new <?php echo $_SESSION['tblname']; ?>();

//bagian kepala tabel
//Sesuaikan teks tercetak tebal
echo "&lt;table width='100%' border='1' cellspacing='0' cellpadding='4' &gt;";
echo "&lt;tr&gt;
<?php
for($i=0;$i<$_SESSION['da']; $i++)
{
echo "\t &lt;th&gt;<b>".$_SESSION['data'][$i][0]."</b>&lt;/th&gt; \n";
}
?>
	&lt;th&gt;Proses&lt;/th&gt;
	&lt;/tr&gt;";
//panggil fungsi tampil dari file kelas-<?php echo $_SESSION['tblname']; ?>.php
$data->tampil();

//bagian penutup tabel
echo "&lt;/table&gt;";
echo "&lt;a href='./?menu=form-input-<?php echo $_SESSION['tblname']; ?>'&gt;Tambah Data&lt;/a&gt;";
?&gt;

</pre>
