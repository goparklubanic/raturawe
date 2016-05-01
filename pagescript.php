<pre>
&lt;html&gt;
  &lt;head&gt;
	  &lt;title&gt;Produk RATURAWE&lt;/title&gt;
	  &lt;style type="text/css"&gt;
		body{
			margin: 0;
			padding: 0;
			}
			
		#wadah{
			display: block;
			padding-left: 5%;
			padding-right: 5%;
			padding-top: 5%;
		}
		
		#header{display: block; 
				min-height: 100px; 
				text-align:center;}
				
		#header h1,h3,p{padding:0; 
						margin:0;}
		#menu{display: block; 
			  min-height: 400px; 
			  width:100%; 
			  padding-top:20px;}
			  
		#menu a{display: block; 
				text-decoration:none;
				text-align: center; 
				margin: 5px 0 1px 0; 
				padding: 4px 2px 4px 2px;
				background: navy; 
				color: #FFF; }
		#konten{display: block; 
				min-height: 400px;  
				width:100%;}
	  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div id="wadah"&gt;
   &lt;table border="1" cellspacing="0" width="100%"&gt;
	&lt;tr&gt;
	  &lt;td colspan="2"&gt;
	    &lt;div id="header"&gt;
		  &lt;h1&gt;Judul Baris Ke-1&lt;/h1&gt; 
		  &lt;h3&gt;Judul Baris Ke-2&lt;/h3&gt; 
		  &lt;p&gt;Judul Baris Ke-3&lt;/p&gt; 
		&lt;/div&gt;&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td width="200px"&gt;
			&lt;div id="menu"&gt;
 <?php
for($i=0;$i<count($_POST['menu']);$i++)
{
echo "\t \t \t &lt;a href=index.php?menu=tampil-".$_POST['menu'][$i]."&gt;".$_POST['menu'][$i]."&lt/a&gt;<br />";
}
?>
			&lt;/div&gt;
		&lt;/td&gt;
		&lt;td&gt;
			&lt;div id="konten"&gt;
			&lt;?php
			if(!$_GET['menu']){
				include "filedefault.php";
			}else{
				switch($_GET['menu']){
<?php
for($i=0;$i<count($_POST['menu']);$i++)
{
	$page_inc=array("tampil-","form-update-","form-input-","detil-");
	for($pi=0;$pi<4;$pi++){
echo "\t \t \t \t case '".$page_inc[$pi].$_POST['menu'][$i]."': include \"".$page_inc[$pi].$_POST['menu'][$i].".php\"; break;<br />";
	}
}
?>
				}
			}
			?&gt;
			&lt;/div&gt;
		&lt;/td&gt;
	&lt;/tr&gt;
   &lt;/table&gt;
   &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;

</pre>
