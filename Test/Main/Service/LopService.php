
<?php
require_once 'C:/xampp/htdocs/Test/Main/Model/Lop.php';
class LopService{
    public function GetAllLop(){
try {
    $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="SELECT * FROM lop";
    $stmt = $conn->query($sql);
    $lops = [];
    while($row=$stmt -> fetch()){
        $lop = new Lop($row['id'],$row['tenLop']);
        $lops[]=$lop;
    }
    return $lops;

    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
}
