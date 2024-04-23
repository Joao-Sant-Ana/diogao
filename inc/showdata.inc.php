<?php
    session_start();
    function mostrardados() {
        if (isset($_SESSION["valorfinal"])) {
            return $_SESSION['valorfinal'];
        } else {
            return '';
        }
    }