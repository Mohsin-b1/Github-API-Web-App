<?php
if(isset($_POST['show'])){
    $name= $_POST["name"];
    header("Location: show.php?full_name=$name");
}
elseif (isset($_POST['back'])){
    header('Location: index.php');
}
elseif (isset($_POST['commits'])){
    $name= $_POST["name"];
    header("Location: commits.php?full_name=$name");
}
elseif (isset($_POST['issues'])){
    $name= $_POST["name"];
    header("Location: issues.php?full_name=$name");
}
elseif (isset($_POST['pulls'])){
    $name= $_POST["name"];
    header("Location: pulls.php?full_name=$name");
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