<?php
session_register(Name);
session_destroy();
header("location:signin.php");


?>