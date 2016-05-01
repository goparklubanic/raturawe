<pre>
&lt;?php
//nama file: form-update-<?php echo $_SESSION['tblname'];?>.php
//libatkan file kelas-<?php echo $_SESSION['tblname'];?>.php
require("kelas-<?php echo $_SESSION['tblname'];?>.php");

//buat objek data
$data = new <?php echo $_SESSION['tblname']; ?>();

//panggil fungsi pilih dari file kelas-<?php echo $_SESSION['tblname'];?>.php
//variabel $id diambil dari nilai parameter <b>id=</b> pada address bar
//hasil pemanggilan disimpan di variabel $isi

$id=$_GET['id'];
$isi=$data->pilih($id);
?&gt;

//sesuaikan teks tercetak tebal;
&lt;form action='proses-<?php echo $_SESSION['tblname']; ?>.php?proses=update' method='post'&gt;
&lt;table align='center' width='50%' &gt;
<?php
for($i=0;$i<$_SESSION['da'];$i++){
	if($i==0){$ro="readonly";}else{$ro="";}
	if($_SESSION['data'][$i][1]!='enum'){
		echo "&lt;tr&gt;&lt;td&gt;". $_SESSION['data'][$i][0]."&lt;/td&gt;&lt;td&gt;:&lt;input type='text' name='".$_SESSION['data'][$i][0]."' value='&lt;?php echo \$isi['$i']; ?&gt;' ".$ro." &gt;&lt;/td&gt;&lt;/tr&gt;<br />";
	}else{
		$jd=explode(",",$_SESSION['data'][$i][2]);
		echo "&lt;tr&gt;&lt;td&gt;".$_SESSION['data'][$i][0]."&lt;/td&gt;&lt;td&gt;:&lt;select name='".$_SESSION['data'][$i][0]."'&gt;<br />";
		for($opt=0;$opt<count($jd);$opt++)
		{
			echo "\t&lt;option value=".$jd[$opt]."&gt;<b>".str_replace("'","",$jd[$opt])."</b>&lt;/option&gt;<br />";
		}
		echo "&lt;/select&gt;&lt;/td&gt;&lt;/tr&gt;<br />";
	}
}
?>
&lt;tr&gt;&lt;td&gt;&nbsp;&lt;/td&gt;&lt;td&gt;
&lt;input type='submit' value='Update'&gt;
&lt;input type='reset' value='Reset'&gt;
&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;
&lt;/form&gt;
</pre>
&lt;tr&gt;
&lt;td&gt;
