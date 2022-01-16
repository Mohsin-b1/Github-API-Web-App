<?php
if(isset($_POST['show'])){
    $name= $_POST["name"];
    header("Location: show.php?full_name=$name");
}
elseif (isset($_POST['back'])){
    header('Location: index.php');
}
elseif (isset($_POST['edit'])){
    $name= $_POST["name"];
    header("Location: edit.php?full_name=$name");
}
elseif (isset($_POST['delete'])){
    $name= $_POST["full_name"];
    header("Location: delete.php?full_name=$name");
}
/**  elseif (isset($_POST['update'])){
    $name= $_POST["name"];
    header("Location: update.php?full_name=$name");
}
 */