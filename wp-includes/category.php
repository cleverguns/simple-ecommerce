<?php
class Category {
    private $conn;
    public $tbl_name = "tbl_category";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function totalCategory(){
        $category_query = $this->conn->query("SELECT * FROM {$this->tbl_name}");
        $total = mysqli_num_rows($category_query);
        return $total;
    }

    public function addCategory($cid, $name){
        $category_query = $this->conn->query("INSERT INTO {$this->tbl_name}(category_id, category_name) VALUES ('{$cid}', '{$name}')");
        if($category_query){
            $_SESSION['success'] = "Successfully Saved";
        }else{
            $_SESSION['error'] = "Failed to save";
        }
    }

    public function deleteCategory($cid){
       $this->conn->query("DELETE FROM {$this->tbl_name} WHERE category_id = '{$cid}' LIMIT 1");
    }
}

$category = new Category($conn);
?>