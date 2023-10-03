<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên sinh viên</th>
      <th scope="col">email</th>
      <th scope="col">ngày sinh</th>
      <th scope="col">id lớp</th>
      <th scope="col">Thêm</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
   <?php
   foreach($sinhvienout as $sv){
    ?> <tr>
    <td><?=$sv->GetId()?></td>
    <td><?=$sv-> GetTenSinhVien() ?></td>
    <td><?=$sv->GetEmail()?></td>
    <td><?=$sv->GetNgaySinh()?></td>
    <td><?=$sv->GetIdLop()?></td>
    <td><a href="http://localhost/Test/Main/Service/Add.php"><i class="bi bi-plus-circle-fill"></i></a></td>
    <td><a href="http://localhost/Test/Main/Service/Edit.php"><i class="bi bi-pencil-fill"></i></a></td>
    <td><a href="http://localhost/Test/Main/Service/Delete.php"><i class="bi bi-archive-fill"></i></a></td>

  </tr>
   <?php
   }
   ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>