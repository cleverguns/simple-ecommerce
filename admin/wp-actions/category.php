<?php
session_start();
require_once("../../wp-includes/autoLoader.php");
require_once("../../wp-includes/utils.php");

if(isset($_POST['add-category']) && !empty($_POST['csrf_token'])){
    $redirect = header("Location: ../dashboard/category.php");
    $name = $_POST['name'];
    $category_id = "cid_". generate_number(11);
    if($_POST['csrf_token'] === $_SESSION['csrf_token']){
        $category->addCategory($category_id, $name);
        $redirect;
    }else{
        $_SESSION['error'] = "Invalid Request";
    }
}elseif(isset($_GET['cid']) && !empty($_GET['_token'])){
    $redirect = header("Location: ../dashboard/category.php");

    if($_GET['_token'] === $_SESSION['csrf_token']){
        $category->deleteCategory($_GET['cid']);
        $redirect;
    }else{
        $_SESSION['error'] = "Invalid Request";
        $redirect;
    }
}else{
    $_SESSION['error'] = "Invalid Request"; 
    header("Location: ../dashboard/category.php");
}
?>