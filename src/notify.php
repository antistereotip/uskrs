<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@antistereotip" />
  <meta name="twitter:title" content="Nova Kripto Valuta?" />
  <meta name="twitter:description" content="Nova Kripto Valuta? Detaljan opis" />
  <meta name="twitter:image" content="https://usk.rs/EGGY/egg.png" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="google-site-verification" content="WgSTITldChv0UTsrjW1NZfWeid4lDgyh_6E6KQZ0HpY" />
	<title>УСКРС</title>
<link rel="icon" href="favicon.png" type="image/x-icon"/>
</head>
<body>

<?php
$datum = round(microtime(true) * 1000);
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	Е-адреса ".$email." је валидна. <br />Бићеш обавештен/а о новинама.<br /> 
	Врати се на <a href='https://usk.rs' style='color: #5fdab2;'>почетну страну</a></p>";
} else {
	echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	Е-адреса ".$email." <span style='color: orangered;'>НИЈЕ</span> валидна. <br />
	Врати се на <a href='https://usk.rs' style='color: #5fdab2;'>почетну страну</a></p>";
	return 0;
}
$podaci = array($datum, $email);
file_put_contents('../secured/email.txt', implode(' || ',$podaci)."\n",FILE_APPEND | LOCK_EX);


// Poruka
$poruka = "Бићеш благовремено обавештен о свим новинама. Срдачно. Админ.";

// Posalji email na unetu adresu
mail($email, "Аутоматска порука", $poruka);


// Poruka
$porukameni = "Неко са е-адресом ".$email." се управо пријавио за обавештења.";

// Posalji email na admin adresu
mail("milutingavrilovic@gmail.com", "Аутоматска порука админу", $porukameni);

?>

</body>
</html>
