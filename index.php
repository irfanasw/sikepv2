<?
include "tanggal.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Ayuut" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ajax_login.js"></script>
    
</head>

<body>
<div id="pagewrap">
    <div id="header">
       <!-- <?php echo $cetak_date ?>  -->
    </div>
    <div id="content">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" name="form_login" method="post" >
        <table class="transparan" align="center">
        <tr>
        <td valign="center">
        <table  align="left">
        <tr>
        <td>
        <img Src = "img/log.jpg" align="center" width="170" height="190">
        </td>
        </tr>
        </table>
        <table width="190" align="right"  height="200">
        <tr><td style="font-family: Old English Text MT;font-size: 30px;color: #fff;">Login Admin</td></tr>
        <tr>
        <td><input type="text" name="username" id="username" size="30" placeholder="Username" title="Username"/></td>
        </tr>
        <tr>
        <td style="color: #fb0808;font-size: 10px;">* Diisi dengan Username Anda</td>
        </tr>
        <tr>
        <td><input type="password" name="password" id="password" size="30" placeholder="Password" title="Password"/></td>
        </tr>
        <tr>
        <td style="color: #fb0808;font-size: 10px;">* Diisi dengan Password Anda</td>
        </tr>
        <tr>
        <td align="right"><button id="btn_login" name="btn_login" type="button" class="btnLogin" title="Login"  onclick="javascript:validateDataLogin();">Login</button></td>
        </tr>
        <tr>
        <td><div id="error_messege"></div></td>
        </tr>
        </table>
        </td>
        </tr>
        </table></form>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#error_messege").css('display', 'none');
            $("#username").focus();
        });

        function showMessege(){
            $("#error_messege").css('display', 'block');
        }
        
        function validateDataLogin(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if(username == '' || password == ''){
                alert("Username dan Password tidak boleh kosong!");
            }else{
                showMessege();
        	document.getElementById("error_messege").innerHTML = "<img alt=\"loading\" src=\"img/spin.gif\" />";
                setTimeout(function(){
                    doLogin(username, password);
                }, 1000);
            }
        }
        </script>
    </div>
    
    </div><!--#pagewrap -->
    <div id="marquee">
        <marquee  direction="left">Selamat Datang di situs resmi Sistem Informasi Kependudukan Kelurahan Citangtu, Kecamatan Kuningan, Kabupaten Kuningan, Alamat: Kelurahan Citangtu, Kode Pos 45516</marquee> 
    </div> 


</body>
</html>