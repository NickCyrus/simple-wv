<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="author" content="Nick Cyrus Lemus Duque" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
<!--    <script type="text/javascript" src="cordova.js"></script> !-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body class="login"> 
<div id="contenidoApp">
           <div id="login">     
                <div class="logo">
                    <img src="images/login-logo.png" />
                </div>
                <div class="form" align="center">
                        <form action="" onsubmit="return false;" align="center">
                            
                          <input type="email" name="client_login" id="client_login" placeholder="ID CLIENTE" required class="input-rounded">   
                          <input type="password" name="client_pass" id="client_pass" placeholder="CONTRASEÑA" required class="input-rounded"> 
                          <div class="error_msg" id="error_msg"></div>
                          <button id="btnlogin" class="btnlogin" onclick="login()">ENTRAR</button>    
                        </form>
                    
                     
                </div>
            </div>
                 
</div>
</body>
</html> 