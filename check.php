<?php
//fungsi check.php ini adalah untuk mengecek data user yang ada dalam database agar bisa login ke halaman website.
	session_start();
	require_once "config.php";

	if(ISSET($_POST['user']) && ISSET($_POST['password']))
  	{
      	$user=$_POST['user'];
      	$password=$_POST['password'];
      	$perintah="SELECT * FROM user_table WHERE username='$user' AND password='$password'";
     	$hasil=mysql_query($perintah);
      	$jml_data=mysql_num_rows($hasil);
	  	if ($jml_data>0)
	  	{

	    	$_SESSION['user']=$user;
	    	function sesi($user){
	    		$usr=$user;
	    	}
		 	include "home.php";		 
	  	}else{
	    ?>
			<script type="text/javascript" language="JavaScript">
				alert('Username atau Password yang Anda Masukkan Salah');
				document.location='login.php';
			</script>
		<?php
		}
	}
?>