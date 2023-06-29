<?php
$servidor = mysql_connect('localhost','root','');
$banco = mysql_select_db('netshoes');
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">  
<head>
    <meta charset="UTF-8">  
    <title>Netshoes</title>
    <link rel="icon" type="image/png" href="./images/netshoesicon.png">
</head>
<body link="#FFFFFF" alink="#FFFFFF" vlink="#FFFFFF">
  <div id="cabecalho"> 
    <img class="logo" src="./images/logo_white.png" width="300" height="65">
  </div>



<?php
  $sql_tenis = "select codigo, foto1, modelo, descricao, preco from tenis";
  $seleciona_tenis = mysql_query($sql_tenis);
?>
        
<br><br><h1><div class="text">Nossos Tênis:</div></h1><br>

<?php
  while($res = mysql_fetch_array($seleciona_tenis))
          {
              echo '<div class="produtos">';
              echo ''.utf8_encode('<img src="'.$res['foto1'].'"  height="200" width="220" />').'</a><br><br>';
              echo ''.utf8_encode('Codigo:'.$res['codigo'].'').'</a><br>';
              echo ''.utf8_encode('Modelo:'.$res['modelo'].'').'</a><br>';
              echo ''.utf8_encode('Descricao:'.$res['descricao'].'').'</a><br>';
              echo ''.utf8_encode('Preco:R$ '.$res['preco'].'').'</a><br>';
              echo '</p><p>';
              echo '</p>';
              echo "<form action='info_tenis.php?codigo = codigoM' method='POST'> 
                    <input type='hidden' name='codigoM' id='codigoM' value='".$res['codigo']."'><br>";
              echo '</div>';
              echo "<input class='mais_info_botao' type='submit' name='mais_info' id='mais_info' value='Mais Informações'>
              </form>";
              
          }   
?>
</div>
</main>





<style>
  .text {
    color: black;
  }
  .produtos {
    display: inline-flex;
  }
  #cabecalho {
    background-color: #5a2d82;
    width: 100%;
    height: 30%;
  }
  body {
    background-color: #f5f5fa;
    font-family: Arial, sans-serif;
  }
  * {
    padding: 0;
    margin: 0;
  }

  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;  
  }

  h1 {
    color: #6a0dad;
  }

  p {
    color: #4d2675;
    line-height: 1.5;
  }

  a {
    color: #9d61c2;
    text-decoration: none;
  }

  a:hover {
    color: #6a0dad;
  }

  .mais_info_botao {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    background-color: purple;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
  }

  .mais_info_botao:hover {
    background-color: darkpurple;
  }



</style>