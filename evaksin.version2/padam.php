<?php

include ('config.php');

    $id_pelajar = $_GET['id_pelajar'];
    $padam= mysqli_query($connect, "DELETE FROM maklumat WHERE id_pelajar = '$id_pelajar' ");

//sila lengkapkan kod aturacara

header("Location:index.php");

?>




