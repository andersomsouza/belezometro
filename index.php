<?php
$path = $_GET['nome'];
if (!empty($path)) {
	$soma = 0;
	for ($i = 0; $i < strlen($path); $i++) {
		$soma += ord($path[$i]);
	}
	$soma %= 100;
	$graudebeleza = "Seu grau de beleza é " . $soma . " %";
	if ($soma > 90) {
		$frase = "Poucas pessoas possuem esse grau de beleza, você é radicalmente bonito.";
	} else if ($soma > 50 && $soma <= 90) {
		$frase = "Você é tão bonito quanto a maioria dos brasileiros.";
	} else if ($soma > 10 && $soma <= 50) {
		$frase = "Um caso um tanto complicado.";
	} else {
		$frase = "Não se desespere, conheça agora os produtos Jequiti.";
	}
} else {
	$graudebeleza = "Belezômetro!";
	$frase = "Descubra sua beleza em barbaruiva.xyz/belezometro/nome";
}

$reqUri = $_SERVER['REQUEST_URI'];
//caso veio barra no final, remove.
if ($reqUri[strlen($reqUri) - 1] == '/') {
	$reqUri = substr($reqUri, 0, strlen($reqUri) - 1);
}
$url = 'http://' . $_SERVER['HTTP_HOST'] . substr($reqUri, 0, strrpos($reqUri, '/'));
?>
<html>
<head>
<meta property="og:title" content="<?=$graudebeleza?>"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="<?=$frase?>"/>
<meta property="og:image" content="<?=$url?>/icon.png"/>
<meta property="og:site_name" content="BarbaRuiva"/>
	<title>Belezometro - BarbaRuiva</title>
</head>
<body>
<script type="text/javascript">
	location.href = "http://google.com.br";
</script>
</body>
</html>