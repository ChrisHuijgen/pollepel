<?php

if(isset($_POST['posten']) && isset($_FILES['my_image'])&& isset($_POST['gerecht'])){
include "db_conn.php";

print($_POST['gerecht']);
echo "<pre>";
print_r($_FILES['my_image']);
echo "</pre>";


$img_name = $_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_name = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];

if ($error === 0){
    if(img_size > 125000){
        $em = "Uw bestand is te groot!";
        header("Location: index.php?error=$em");
    }
    }else {
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_lc = strtolower($img_ex);

       $allowed_exs = array("jpg", "jpeg", "png");
    }
       if (in_array($img_ex_lc, $allowed_exs)){
           $new_img_name = uniqid("IMG-", true). '.' . $img_ex_lc;
           $img_upload_path = 'uploads/'. $new_img_name;
           move_uploaded_file($tmp_name, $img_upload_path);

       }else{
        $em = "Dit type bestand kan niet geupload worden";
        header("Location: index.php?error=$em");
       }
    }
    else {
    $em = "Er is een onbekende fout opgetreden!";
    header("Location: index.php?error=$em");
}

 else{
    header("Location: index.php");   
}

