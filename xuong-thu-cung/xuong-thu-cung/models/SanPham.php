<?php
class SanPham{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    //viet ham lay danh sach san pham
    public function getAllProduct(){
        try{
            $sql = 'SELECT * FROM san_phams';

            $stmt = $this -> conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        }catch( Exception $e){
            echo "loi" .$e->getMessage();
        }
        
    }
}

?>