<html>
  <head>
	  <title><b>Judul Halaman</b></title>
	  <style type="text/css">
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
				border: 1px solid blue; 
				text-align:center;}
				
		#header h1,h3,p{padding:0; 
						margin:0;}
		#menu{display: block; 
			  min-height: 200px; 
			  width:100%; 
			  border: 1px solid blue; 
			  padding-top:20px;}
			  
		#menu a{display: block; 
				text-decoration:none;
				text-align: center; 
				margin: 5px 0 1px 0; 
				padding: 4px 2px 4px 2px;
				background: navy; 
				color: #FFF; }
		#konten{display: block; min-height: 200px;  width:100%; border: 1px solid blue;}
	  </style>
  </head>
  <body>
  <div id="wadah">
   <table border="1" cellspacing="0" width="100%">
	<tr>
	  <td colspan="2">
	    <div id="header">
		  <h1>Judul Baris Ke-1</h1> 
		  <h3>Judul Baris Ke-2</h3> 
		  <p>Judul Baris Ke-3</p> 
		</div></td>
	</tr>
	<tr>
		<td width="200px">
			<div id="menu">
			<a href="#">Menu 1</a>
			<a href="#">Menu 2</a>
			<a href="#">Menu 3</a>
			<a href="index.php?menu=....">Menu ....</a>
			</div>
		</td>
		<td>
			<div id="konten">
			
			</div>
		</td>
	</tr>
   </table>
   </div>
  </body>
</html>
<pre>
&lt;html&gt;
  &lt;head&gt;
	  &lt;title&gt;&lt;b&gt;Judul Halaman&lt;/b&gt;&lt;/title&gt;
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
				border: 1px solid blue; 
				text-align:center;}
				
		#header h1,h3,p{padding:0; 
						margin:0;}
		#menu{display: block; 
			  min-height: 200px; 
			  width:100%; 
			  border: 1px solid blue; 
			  padding-top:20px;}
			  
		#menu a{display: block; 
				text-decoration:none;
				text-align: center; 
				margin: 5px 0 1px 0; 
				padding: 4px 2px 4px 2px;
				background: navy; 
				color: #FFF; }
		#konten{display: block; min-height: 200px;  width:100%; border: 1px solid blue;}
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
			&lt;a href="index.php?menu=<b>menu1</b>"&gt;<b>Menu 1</b>&lt;/a&gt;
			&lt;a href="index.php?menu=<b>menu2</b>"&gt;<b>Menu 2</b>&lt;/a&gt;
			&lt;a href="index.php?menu=<b>menu3</b>"&gt;<b>Menu 3</b>&lt;/a&gt;
			&lt;a href="index.php?menu=<b>....</b>"&gt;<b>Menu ....</b>&lt;/a&gt;
			&lt;/div&gt;
		&lt;/td&gt;
		&lt;td&gt;
			&lt;div id="konten"&gt;
			&lt;?php
				if(!$_GET['menu'])
				{
					include "filedefault.php";
				}else{
					switch($_GET['menu']){
						case 'menu1': include "file-tampil-<b>menu1</b>.php"; break;
						case 'menu2': include "file-tampil-<b>menu2</b>.php"; break;
						case 'menu3': include "file-tampil-<b>menu3</b>.php"; break;
						case 'menuX': include "file-tampil-<b>X</b>.php"; break;
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
