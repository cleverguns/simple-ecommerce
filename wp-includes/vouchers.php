<?php
class Vouchers {
    private $conn;
    public $tbl_name = "tbl_vouchers";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function totalVouchers(){
        $vouchers_query = $this->conn->query("SELECT * FROM {$this->tbl_name}");
        $total = mysqli_num_rows($vouchers_query);
        return $total;
    }
}

$voucher = new Vouchers($conn);
?>