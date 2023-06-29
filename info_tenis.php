<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Informações Tênis</title> 
</head>
<body>
<?php 
$conectar = mysql_connect('localhost','root','');
$banco    = mysql_select_db('netshoes');

$codigo = $_POST['codigoM'];
$sql_tenis = "SELECT codigo,marca,modelo,descricao,cor,tamanho,preco,foto1,foto2 from tenis where tenis.codigo = '$codigo'";
$pesquisa_tudo = mysql_query($sql_tenis);
$res = mysql_fetch_array($pesquisa_tudo);
echo $res['codigo'];
echo '<br>';
echo $res['marca'];
echo '<br>';
echo $res['modelo'];
echo '<br>';
echo $res['descricao'];
echo '<br>';
echo $res['cor'];
echo '<br>';
echo $res['tamanho'];
echo '<br>';
echo $res['preco'];
echo '<br>';
echo ''.utf8_encode('<img src="'.$res['foto1'].'"  height="200" width="220" />').'';
echo '<br>';
echo ''.utf8_encode('<img src="'.$res['foto2'].'"  height="200" width="260" />').'';

?>
</body>
</html>