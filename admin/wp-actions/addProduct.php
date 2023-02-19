<?php
session_start();
require_once("../../wp-includes/autoLoader.php");
require_once("../../wp-includes/utils.php");
if (isset($_POST['add-product']) && !empty($_POST['csrf_token'])) {
    if ($_POST['csrf_token'] == $_SESSION['csrf_token']) {
        $pid = "pid_" . generate_number(11);
        $category_id = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $prize = filter_input(INPUT_POST, 'prize', FILTER_SANITIZE_NUMBER_INT);
        $stock = filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_NUMBER_INT);

        $redirect = header("Location: ../dashboard/products.php");
        if (isset_file('photo')) {
            $img_name = $_FILES['photo']['name'];
            $tmp_name = $_FILES['photo']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = "img_" . rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/products/" . $new_name)) {
                    $products->addProduct($pid, $category_id, $new_name, $name, $description, $prize, $stock);
                    $redirect;
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            $_SESSION['error'] = "Please select product photo.";
            $redirect;
        }
    } else {
        $_SESSION['error'] = "Invalid Request";
        $redirect;
    }
} else {
    $_SESSION['error'] = "Invalid Request";
    $redirect;
}
?>