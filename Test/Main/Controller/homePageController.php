<?php
require_once("C:/xampp/htdocs/Test/Main/Service/LopService.php");
require_once("C:/xampp/htdocs/Test/Main/Service/SinhVienService.php");
class homePageController{
    public function outputView(){
        $sinhvienservice = new SinhVienService();
        $sinhvienout = $sinhvienservice->GetAllSinhVien();
    include "C:/xampp/htdocs/Test/Main/View/home/index.php";
}
}