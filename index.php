<html>
  <head>
    <title>RATU RAWE</title>
  <style type="text/css">
    .form{display:block; width:100%; background:#EEEFFF; color: #000FFF; 
			padding-top: 20px; padding-bottom: 20px; padding-left: 20px;}
    .sql{display:block; width:100%; background:#004C00; color: #90FF90; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
	.php{display:block; width:100%; background:#0A0765; color: #B6AEFA; 
		 padding-top: 20px; padding-bottom: 20px; padding-left: 20px;
		 font-family: monospace; font-size: 10pt;}
  </style>
  <script type="text/javascript">
    function genDB()
    {
		var dbh=document.getElementById('dbhost');
		var dbn=document.getElementById('dbname');
		var dbu=document.getElementById('dbuser');
		var dbp=document.getElementById('dbpass');
		
		var cdb='CREATE DATABASE '+dbn.value+';<br> use '+dbn.value+';';
		var gdb="GRANT ALL PRIVILEGES ON "+dbn.value+".* TO "+dbu.value+"@"+dbh.value+" IDENTIFIED BY '"+dbp.value+"';";
		var cns='&lt;?php<br />';
			cns=cns+'$dbhost="'+dbh.value+'";<br />';
			cns=cns+'$dbname="'+dbn.value+'";<br />';
			cns=cns+'$dbuser="'+dbu.value+'";<br />';
			cns=cns+'$dbpass="'+dbp.value+'";<br />';
			cns=cns+"try<br />";
			cns=cns+" { <br />";
			cns=cns+'$conn = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);<br />';
			cns=cns+"$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />";
			cns=cns+"$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);<br />";
			cns=cns+"}<br /><br />";
		
			cns=cns+"catch(PDOException $pe)<br />";
			cns=cns+"{<br />";
			cns=cns+"die('Maaf, gangguan koneksi: ' .$pe->getMessage());<br />";
			cns=cns+"}<br />";
			cns=cns+'?&gt;';
		var dbCode='Salin sintaks berikut di konsol mysql<br />'+cdb;
			dbCode=dbCode + '<br /><br />' + gdb;
			dbCode=dbCode +'<br />sematkan skrip berikut dalam file koneksi.php<br />'+cns;
		document.getElementById('dbCode').innerHTML=cdb +'<br />'+ gdb;
		document.getElementById('dbphp').innerHTML=cns;
		
	}
	
	function makeForm()
	{
		var jk=document.getElementById('tblCol').value;	    
		var tn=document.getElementById('tblname').value;
		
		window.location='makeform.php?jk='+jk+'&tn='+tn;

	}
  </script>
  </head>
  <body>
  <h1>peRAngkat banTU peRAncangan WEb</h1>
  <h2>RANCANAN BASIS DATA</h2>
  <div class="form">
      <table>
		<tr>
		  <td>Nama Host / Server</td><td><input type="text" id="dbhost" value="localhost"></td>
		</tr>
		<tr>
		  <td>Nama Basis Data</td><td><input type="text" id="dbname" value="dbwarga"></td>
		</tr>
		<tr>
		  <td>Nama User Basis Data</td><td><input type="text" id="dbuser" value="ketuart"></td>
		</tr>
		<tr>
		  <td>Kata Sandi User Basis Data</td><td><input type="text" id="dbpass" value="erte0401"></td>
		</tr>
		<tr>
		  <td colspan="2" align="center"><button onClick="genDB()">Kode Basis Data</button></td>
		</tr>
      </table>
  </div>
  <span>Salin kode berikut ke konsol sql</span>
  <div id="dbCode" class="sql"></div>
  <span>Salin kode berikut ke dalam file koneksi.php</span>
  <div id="dbphp" class="php"></div>
  <h2>RENCANA TABEL</h2>
  <div class="form">
    <table>
      <tr>
        <td>Nama Tabel</td><td><input type="text" id="tblname" value="warga"></td>
      </tr>
      <tr>
        <td>Jumlah Kolom</td><td><input type="text" id="tblCol" value="5"><button onclick="makeForm()">Gelar</button></td>
      </tr>
    </table>
    <div id="formEls"></div>
  </div>
  </body>
</html>
