 <?php
// require_once("C:/xampp/htdocs/Test/Main/Service/SinhVienService.php");
// $sinhvienservice = new SinhVienService();
// $outsinhvien =$sinhvienservice ->GetAllSinhVien();
// echo "<pre>";
// print_r($outsinhvien);
// echo "</pre>";
require_once("C:/xampp/htdocs/Test/Main/Controller/homePageController.php");
$homepagecontroll = new homePageController();
$homepage = $homepagecontroll->outputView();
?>
