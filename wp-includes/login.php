<?php
session_start();
include_once("config.php");

class Login
{
    private $conn;
    private $status;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->status = null;
    }

    public function Login($username, $password)
    {
        $getDetails = $this->conn->query("SELECT * FROM tbl_users WHERE username = '{$username}' LIMIT 1");
        if ($getDetails->num_rows > 0) {
            $fetchDetails = $getDetails->fetch_assoc();
            if (password_verify($password, $fetchDetails['password'])) {
                $_SESSION['user_token'] = $fetchDetails['user_id'];
                $this->status = 'success';
            } else {
                $_SESSION['error'] = "Incorrect Username or Password";
                $this->status = 'incorrect';
            }
        } else {
            $_SESSION['error'] = "Invalid Username or Password";
            $this->status = 'invalid';
        }
    }
    public function LoginStatus()
    {
        return $this->status;
    }
}

$login = new Login($conn);

if (isset($_POST['login']) && !empty($_POST['csrf_token'])) {
    if ($_POST['csrf_token'] == $_SESSION['csrf_token']) {
        $username = htmlspecialchars($_POST['username']);
        $password = $_POST['password'];
        $login->Login($username, $password);
        $status = $login->LoginStatus();

        if ($status === 'success') {
            header("Location: ../admin/dashboard/");
        }else{
            header("Location: ../admin/");
        }
    } else {
        $_SESSION['error'] = "Invalid Request";
        header("Location: ../admin/");
    }
}
?>
