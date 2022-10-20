<?php
#Altere as variáveis
$titulo = "YouNet Telecom - SpeedTest";
$cor_fundo = "1d1d1d"; //A mesma que vc anotou la do custom
$cor_texto = "067980"; //A mesma que vc anotou la do custom
$url_custom = "https://bhzfibra.speedtestcustom.com"; // Seu link no custom
$url_local = "https://velocidade.bhzfibra.com.br"; //Url que voce vai mostrar para os seus clientes
$ip = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
<title><?php echo "$titulo "; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">
  html, body {
    font-family: Lucida Grande, sans-serif;
    color: #<?php echo "$cor_texto"; ?>;
    background: #<?php echo "$cor_fundo"; ?>;
  }
  .iframe-placeholder {
    background: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100% 100%"><text fill="%23<?php echo "$cor_texto"; ?>" x="50%" y="50%" font-family="\'Lucida Grande\', sans-serif" font-size="38" text-anchor="middle">Carregando...</text></svg>') 0px 0px no-repeat;
  }

  @font-face {
  font-family: "AirStrike";
  src: url('../assets/airstrike.ttf');
}
.logoContainer {
  display: flex;
  transition: transform .4s;
}
.logoContainer:hover{
  transform: scale(1.1);
}

.logo {
  width: 50px;
  height: 50px;
}

.TextodaLogo {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  margin-left: -15px;
  margin-top: 18px;
  font-size: 13px;
  color: #<?php echo "$cor_texto"; ?>;
  text-decoration: none;

}

.logoText {
  font-family: AirStrike;
}

.footer{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.developed-by{
  display: flex;
  flex-direction: row;
  align-items: center;
  font-size:14px;
}


</style>
</head>
<body>
<iframe class="iframe-placeholder" width="100%" height="650px" scrolling="no" frameborder="0" src="<?php echo "$url_custom"; ?>"></iframe>
<div class='footer'>
<p>
<?php echo "Seu IP é: $ip "; ?>
</p>

<p>
<a href="http://validador.ipv6.br/index.php?lang=pt&site=<?php echo "$url_local"; ?>&uri=referer">
<img alt="Este Sítio Web é acessível via IPv6!" src="banipv62branco.png"> </a>
</p>

<div class="developed-by">
<div class="text-developed" style="margin-right: 7px;">Desenvolvido por:</div>
<a href="https://tripleplay.network" target="_blank" rel="noopener noreferrer" style="text-decoration:none">
<div class="logoContainer">
      <img class="logo" src="logotp.png" alt="LogoTP">
      <div class="TextodaLogo">
        <div class="logoText">Triple Play</div>
        <div class="logoText" style="margin-top: -2px;">Network</div>
      </div>
</div>
</a>
</div>



</div>

</body>
</html>
