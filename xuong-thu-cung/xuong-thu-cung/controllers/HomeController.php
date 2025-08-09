<?php 

class HomeController
{
    public $modelSanPham;

    public function __construct(){
      $this->modelSanPham = new SanPham();
    }
    public function home(){
        echo "home";
    }
    public function trangchu(){
        echo "trangchus";
    }
    public function danhSachSanPham(){
        $listProduct = $this->modelSanPham->getAllProduct();
        // var_dump($listProduct); die;
        require_once './views/listProduct.php';
    }

}