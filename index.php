<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Selamat Datang Karyawan Login PT. DNASoftware House</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="css/demo.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

</head>

<body OnLoad="document.login.username.focus();">
<div id="main">
 <center><h3>Selamat datang Karyawan PT. DNASoftware House</h3></center>
 <form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
 <div class="login"> 
        <div class="login-screen">
			<div class="judul-login">
				<font>Login Karyawan  :<br/></font>
			</div>
          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" id="input" placeholder="Masukkan Nomer Induk Karyawan" id="login-name" name="username" />
	         <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Masukkan Password" id="login-pass" name="password" id="input"/>
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>
            <input type="submit" class=" btn btn-primary btn-lg btn-block" value="Login"name="Submit"></input><br/>
			</form id="register">
			<center><font color="#34495E" size="3px" >Anda  belum memiliki akun ? Silahkan membuatnya <a class="login-link" href="registrasi.php">Disini</a><font></center>
          </div>
        </div>
      </div> 
<div class="clear"></div><center><b>
Copyright &copy; 2015 PT. DNASoftware House Indonesia.<br/></b>
<font color="#332fdx"><a href="">Bantuan</a> | <a href="">Tentang Kami</a> | <a href="">Hubungi kami<a></font></div></center>

</div>
</body>
</html>
