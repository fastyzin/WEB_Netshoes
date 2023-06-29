<?php
    $conectar = mysql_connect('localhost','root','');
    $banco    = mysql_select_db('netshoes');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Tênis</title>
</head>
<body>
    <div id="cabecalho"> 
        <img class="logo" src="./images/logo_white.png" width="300" height="65">
    </div>
    <br>
    <br>
    <center>
        <div class="cadastro">
            <form name="form" method="post" action="cadastroTenis.php" enctype="multipart/form-data">
                <br>
                Codigo: <input type="text" name="codigo" id="codigo" size="15">
                <br>
                <br>
                Marca: <input type="text" name="marca" id="marca" size="15">
                <br>
                <br>
                Modelo: <input type="text" name="modelo" id="modelo" size="15">
                <br>
                <br>
                Descrição: <input type="text" name="descricao" id="descricao" size="15">
                <br>
                <br>
                Cor: <input type="text" name="cor" id="cor" size="15">
                <br>
                <br>
                Tamanho: <input type="text" name="tamanho" id="tamanho" size="15">
                <br>
                <br>
                Preço: <input type="text" name="preco" id="preco" size="15">
                <br>
                <br>
                Foto 1: <input type="file" name="foto1" id="foto1"> 
                <br>
                <br>
                Foto 2: <input type="file" name="foto2" id="foto2">
                <br>
                <br>
                <input type="submit" name="gravar" id="gravar" value="Gravar">
                <input type="submit" name="alterar" id="alterar" value="Alterar">
                <input type="submit" name="excluir" id="excluir" value="Excluir">
                <input type="submit" name="pesquisar" id="pesquisar" value="Pesquisar">
            </form>
        </div>
    </center>

<?php
    if (isset($_POST['gravar']))
    {
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $descricao = $_POST['descricao'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];
        $pasta = "images/";

        $foto1_nome = $pasta . $foto1["name"];
        $foto2_nome = $pasta . $foto2["name"];

        move_uploaded_file($foto1["tmp_name"], $foto1_nome);
        move_uploaded_file($foto2["tmp_name"], $foto2_nome);

        $sql = "insert into tenis (codigo,marca,modelo,descricao,cor,tamanho,preco,foto1,foto2)
                values ('$codigo', '$marca', '$modelo', '$descricao', '$cor', '$tamanho', '$preco', '$foto1_nome', '$foto2_nome')";

        $resultado = mysql_query($sql);

        

        if ($resultado){
            echo "<center><br>Dados enviados com sucesso.</center><br> ";
        }
        else {
            echo "<center><br>Erro ao enviar dados</center><br>";
        }
    }

    if (isset($_POST['alterar']))
    {
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $descricao = $_POST['descricao'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];

        $sql = "update tenis set preco = '$preco', descricao = '$descricao'
        where codigo = '$codigo'";

        $resultado = mysql_query($sql);
        if($resultado) {
            echo "<br><br><br><center>Dados alterados com sucesso meu consagrado.</center><br><br><br> ";
        }
        else {
            echo "<br><center> Erro ao alterar os dados. </center><br>";
        }
    }

    if (isset($_POST['excluir']))
    {
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $descricao = $_POST['descricao'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];

        $sql = "delete from tenis
            where codigo = '$codigo'";

        $resultado = mysql_query($sql);
        if ($resultado) {
            echo "<br><center>Dados deletados com sucesso meu consagrado. </center><br>";
        }
        else {
            echo "<br><center> Houve algum erro ao deletar. </center><br>";
        }
        
    }

    if (isset($_POST['pesquisar']))
    {
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $descricao = $_POST['descricao'];
        $cor = $_POST['cor'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];
        $foto1 = $_FILES['foto1'];
        $foto2 = $_FILES['foto2'];

        $sql = "select * from tenis";

        $resultado = mysql_query($sql);

        if (mysql_num_rows($resultado) == 0) {
            echo "<br><center>Desculpe sua pesquisa nao retornou dados. </center><br>";

        }
        else {
            echo "<center>Resultado das pesquisas por Tenis "."</center><br> ";
        }
            while ($tenis = mysql_fetch_array ($resultado)) {
            echo"<center>codigo : ".$tenis['codigo']."</center><br>".
                "<center>Modelo : ".$tenis['modelo']."</center><br>".
                "<center>Descrição : ".$tenis['descricao']."</center><br>".
                "<center>Preço : ".$tenis['preco']."</center><br><br>";
        }
    }
?>
<footer class="rodape">
  <div class="conteudo">
    <p>Website developed by Gustavo Correa da Boit</p><br>
    <p><a href="https://www.instagram.com/gustaaavuh/"><img src="./images/insta_icon.png" width="32" height="32"></a></p>
  </div>
</footer>

<style>
    .rodape {
        background-color: black;
        color: white;
        padding: 20px;
    }

    .conteudo {
        max-width: 600px;
        height: 65px;
        margin: 0 auto;
        text-align: center;
    }

    input,
    textarea,
    select {
    margin-bottom: 16px;
    padding: 8px;
    border: none;
    border-radius: 4px;
    box-shadow: 0 0 5px #000000;
    transition: 0.2s ease-in-out;
    }
    input[type="submit"] {
    background-color: #543bdd;
    color: black;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    }
    input[type="submit"]:hover {
     background-color: #000;
     color: white;
    }
    .cadastro {
        background-color: #d0bef7;
        width: 30%;
        height: 60%;
        border-radius: 10px;
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
    font-family: Arial;
  }



</style>    
</body>
</html>