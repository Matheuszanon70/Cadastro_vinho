<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vinho</title>
</head>
<body>
    
<form action="" method="post">
<fieldset style="width: 30px;">
<legend>Cadastre o vinho abaixo</legend>

Nome:<input type= "text" name="nome" value=""/><br/>
Tipo:<input type= "text" name="tipo" value=""/><br/>
Preço:<input type= "number" name="preço" value=""/><br/>
Safra: <input type= "text" name= "safra" value=""/> <br/>
Cadastrar:<input type= "submit" name= "btnCadastrar" value= "Cadastrar"/>

</fieldset>
</form>

<?php
class Vinho {
    private $nome;
    private $tipo;
    private $preço;
    private $safra;
//criando o construtor
    public function _contruct($nome, $tipo, $preço, $safra){

        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preço = $preço;
        $this->safra = $safra;
    }
}

?> 
</body>
</html>