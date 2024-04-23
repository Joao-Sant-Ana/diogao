<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $observacao = $_POST["observacoes"];

        $dados = [
            "nome"=> $_POST["nome"],
            "email"=>$_POST["email"],
            "cpf"=> $_POST["cpf"],
            "idade"=> $_POST["idade"],
            "trabalhadores"=> $_POST["trabalhadores"],
            "coopnumero"=>  $_POST["coopnumero"],
            "barco"=> $_POST["barco"],
            "endereco" => $_POST["endereco"],
            "numero"=> $_POST["numero"]
        ];

        global $verfiy;
        $verfiy = false;
        foreach($dados as $key => $value) {
            if ($value == "") {
                $verfiy = true;
                echo "erro" . "<br>";
            }
        }

        if ($verfiy) {
            header("Location: ../index.php");
            die();
        }

        header("Location: ../pesca.php");
    } else {
        header("Location: ../index.php");
    }