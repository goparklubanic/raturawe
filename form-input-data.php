
<pre>
&lt;!-- nama file: form-input-<?php echo $_SESSION['tblname']; ?>.php	--&gt;
&lt;!--sesuaikan teks tercetak tebal; --&gt;
&lt;table width="50%" align="center" border=""1" cellspacing="0" cellpadding="5" &gt;
  &lt;tr&gt;
    &lt;td align="center"&gt;

&lt;form action='proses-<?php echo $_SESSION['tblname']; ?>.php?proses=tambah' method='post'&gt;
<?php
for($i=0;$i<$_SESSION['da'];$i++){
	if($_SESSION['data'][$i][1]!='enum'){
		echo "&lt;input type='text' name='".$_SESSION['data'][$i][0]."' placeholder='<b>".$_SESSION['data'][$i][0]."</b>'&gt;&ltbr /&gt;<br />";
	}else{
		$jd=explode(",",$_SESSION['data'][$i][2]);
		echo $_SESSION['data'][$i][0].": &lt;select name='".$_SESSION['data'][$i][0]."'&gt;<br />";
		for($opt=0;$opt<count($jd);$opt++)
		{
			echo "\t&lt;option value=".$jd[$opt]."&gt;<b>".str_replace("'","",$jd[$opt])."</b>&lt;/option&gt;<br />";
		}
		echo "&lt;/select&gt;&lt;br /&gt;<br />";
	}
}
?>
&lt;input type='submit' value='Simpan'&gt;
&lt;input type='reset' value='Reset'&gt;
&lt;/form&gt;
    
    &lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>
