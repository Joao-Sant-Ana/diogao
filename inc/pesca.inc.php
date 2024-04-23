<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        session_start();

        $dados = [
            "quantidade"=> $_POST["quantidade"],
            "data"=>$_POST["data"],
            "hora"=> $_POST["hora"],
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

        if ($dados["quantidade"] > 50) {
            $valorfinal = $dados["quantidade"] - 50;
            $valorfinal = $valorfinal * 5; 
            $_SESSION['valorfinal'] = $valorfinal;
            unset($valorfinal);
        }

        header("Location: ../pesca.php");
        die();
    } else {
        header("Location: ../index.php");
        die();
    }