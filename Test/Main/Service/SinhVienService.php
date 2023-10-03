
<?php
require_once 'C:/xampp/htdocs/Test/Main/Model/SinhVien.php';
class SinhVienService{
    public function GetAllSinhVien(){
try {
    $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="SELECT * FROM sinhvien";
    $stmt = $conn->query($sql);
    $sinhviens = [];
    while($row=$stmt -> fetch()){
        $sinhvien1 = new SinhVien($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaysinh'],$row['id'],$row["idLop"]);
        $sinhviens[]=$sinhvien1;
    }
    return $sinhviens;

    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
}
