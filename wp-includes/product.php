<?php
class Products
{
    private $conn;
    public $tbl_name = "tbl_products";
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addProduct($product_id, $category_id, $product_photo, $name, $description, $prize, $stock)
    {
        $sql = "INSERT INTO {$this->tbl_name} (product_id, category_id, product_photo, name, description, prize, stock) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssii", $product_id, $category_id, $product_photo, $name, $description, $prize, $stock);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $_SESSION['success'] = "Successfully Saved";
        } else {
            $_SESSION['error'] = "Failed to save";
        }
       
    }

    public function editProduct($product_id, $category_id, $product_photo, $name, $description, $prize, $stock)
    {
        $sql = "UPDATE {$this->tbl_name} SET category_id = ?, product_photo = ?, name = ?, description = ?, prize = ?, stock = ? WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("isssiii", $category_id, $product_photo, $name, $description, $prize, $stock, $product_id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM {$this->tbl_name} WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $stmt->close();
    }

    public function totalProducts(){
        $query = "SELECT * FROM {$this->tbl_name}";
        $products =  $this->conn->query($query);
        $total = mysqli_num_rows($products);
        return $total;
    }
}

$products = new Products($conn);
