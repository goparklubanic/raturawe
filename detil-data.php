<pre>
&lt;?php
//nama file: detil-<?php echo $_SESSION['tblname']; ?>.php
//libatkan file kelas-<?php echo $_SESSION['tblname'];?>.php
require("kelas-<?php echo $_SESSION['tblname'];?>.php");

//membentuk objek data
$data=new <?php echo $_SESSION['tblname']; ?>();

//panggil fungsi detil dari file kelas-<?php echo $_SESSION['tblname'];?>.php
//variabel $id diambil dari nilai parameter <b>id=</b> pada address bar
$id=$_GET['id'];
$data-&gt;detil($id);
?&gt;
</pre>
