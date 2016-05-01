<pre>
&lt;?php
//nama file: kelas-<?php echo $_SESSION['tblname']; ?>.php
class <?php echo $_SESSION['tblname']; ?>
{
	function koneksi()
	{
		include('koneksi.php');
		return $conn;
	}
	
	
	function tambah($data){
		$sql="INSERT INTO <?php echo $_SESSION['tblname']; ?> SET 
		<?php
		for($i=0;$i<$_SESSION['da'];$i++)
		{
			if($i==$_SESSION['da']-1){$delimiter="";}else{$delimiter=",";}
			echo $_SESSION['data'][$i][0]." = ?".$delimiter;
		}
		?>";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute($data);
	}
	
	function tampil(){
		$sql="SELECT * FROM <?php echo $_SESSION['tblname']; ?> LIMIT 40";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute();
		
		while($rs=$qry->fetch()){
			echo "
			&lt;tr&gt;
<?php
for($i=0;$i<$_SESSION['da'];$i++)
{
echo "\t \t \t &lt;td&gt;\".\$rs['".$_SESSION['data'][$i][0]."'].\"&lt;/td&gt;<br />";
}
//echo "\n";
			?>
			";
			echo "&lt;td&gt;&lt;a href='./?menu=detil-<?php echo $_SESSION['tblname']; ?>&id=".$rs['<?php echo $_SESSION['data'][0][0]; ?>']."'&gt;Pilih&lt;/a&gt;&lt;/td&gt;
			&lt;/tr&gt;	";
		}
	}
	
	function detil($id){
		$sql="SELECT * FROM <?php echo $_SESSION['tblname']; ?> WHERE <?php echo $_SESSION['data'][0][0]; ?>= ? ";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute(array($id));
		
		echo "&lt;table align='center' width='50%' cellspacing='5' cellpadding='4' &gt;";
		//sesuaikan teks tertulis tebal

		$rs=$qry->fetch();
		echo "
<?php
for($i=0;$i<$_SESSION['da'];$i++){
	echo "\t \t &lt;tr&gt; &lt;td&gt;<b>".$_SESSION['data'][$i][0]."</b>&lt;/td&gt;&lt;td&gt;\".\$rs['".$_SESSION['data'][$i][0]."'].\"&lt;/td&gt;&lt;/tr&gt;<br />";
}
?>
		";
		echo "
		&lt;tr&gt;
		&lt;td&gt;Tindakan&lt;/td&gt;
		&lt;td&gt;
		&lt;a href='./?menu=form-update-<?php echo $_SESSION['tblname']; ?>&id=".$rs['<?php echo $_SESSION['data'][0][0];?>']."'&gt;Edit&lt;/a&gt;
		&lt;a href='proses-<?php echo $_SESSION['tblname']; ?>.php?proses=hapus&amp;id=".$rs['<?php echo $_SESSION['data'][0][0];?>']."'&gt;Hapus&lt;/a&gt;
		&lt;/td&gt;
		&lt;/tr&gt;
		&lt;/table&gt;";
	}
	
	function pilih($id)
	{
		$sql="SELECT * FROM <?php echo $_SESSION['tblname']; ?> WHERE <?php echo $_SESSION['data'][0][0]; ?>= ? ";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute(array($id));
		$rs=$qry->fetch();
		return $rs;
	}
	
	function update($data){
		$sql="UPDATE <?php echo $_SESSION['tblname']; ?> SET 
		<?php
		for($i=1;$i<$_SESSION['da'];$i++)
		{
			if($i==$_SESSION['da']-1){$delimiter="";}else{$delimiter=",";}
			echo $_SESSION['data'][$i][0]." = ?".$delimiter;
		}
		?> WHERE <?php echo $_SESSION['data'][0][0];?>=?";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute($data);
	}
	
	function hapus($id){
		$sql="DELETE FROM <?php echo $_SESSION['tblname']; ?> WHERE <?php echo $_SESSION['data'][0][0]; ?>= ? LIMIT 1";
		$con=$this->koneksi();
		$qry=$con->prepare($sql);
		$qry->execute(array($id));
	}
}
?&gt;
</pre>
