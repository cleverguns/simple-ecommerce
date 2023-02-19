<?php
class Users
{
    private $conn;
    public $tbl_name = "tbl_users";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // public function addUser($uid, $file, $fname, $lname, $username, $role, $password, $cpassword){
    //     $user_query = $this->conn->query("INSERT INTO tbl_users(user_id, fname, lname, avatar, username, password, user_role) VALUES ");
    // }

    function addUser($uid, $fname, $lname, $avatar, $username, $password, $user_role)
    {
        $stmt = $this->conn->prepare("INSERT INTO tbl_users (user_id, fname, lname, avatar, username, password, user_role) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $uid, $fname, $lname, $avatar, $username, $password, $user_role);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $_SESSION['success'] = "Successfully Saved";
        } else {
            $_SESSION['error'] = "Failed Saved";
        }
    }
    public function totalUsers()
    {
        $users_query = $this->conn->query("SELECT * FROM {$this->tbl_name}");
        $total = mysqli_num_rows($users_query);
        return $total;
    }
}

$user = new Users($conn);
