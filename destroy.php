<?php
session_start();//compulsary in session
#unset($_SESSION['Name']);
session_destroy();
?>