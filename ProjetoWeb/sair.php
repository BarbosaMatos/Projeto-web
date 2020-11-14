<!-- ÁREA PARA LOG OUT DO SISTEMA -->

<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location:desconectar.php");
?>