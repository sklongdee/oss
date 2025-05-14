<?php
include_once "conn.php";
?>
<h1>ข้อมูลผู้ใช้งาน (Admin)</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ชื่อ-นามสกุล</th>
      <th scope="col">ชื่อผู้ใช้</th>
      <th scope="col">ระดับ</th>
      <th scope="col">จัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count=1;
    while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row"><?=$count++?></th>
      <td><?=$row["_name"]?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["role"]?></td>
      <td>
        <i class="bi bi-pencil-square text-warning"></i>&nbsp;&nbsp;
        <i class="bi bi-trash3-fill text-danger"></i>
      </td>
    </tr>
    <?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
  </tbody>
</table>