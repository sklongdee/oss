<?php
include_once "conn.php";
function levelname($l){
  if($l=="all"){echo "ทั้งหมด";}
  elseif($l=="1"){echo "ปี 1";}
  elseif($l=="2"){echo "ปี 2";}
  elseif($l=="3"){echo "ปี 3";}
  elseif($l=="4"){echo "ปี 4";}
  elseif($l=="3T"){echo "ปี 3 เทียบโอน";}
  elseif($l=="4T"){echo "ปี 4 เทียบโอน";}
  elseif($l=="3N"){echo "ปี 3 เทียบโอนนอกเวลาราชการ";}
  elseif($l=="4N"){echo "ปี 4 เทียบโอนนอกเวลาราชการ";}
}
$level=$_GET["level"] ?? "";
if($level=="all"){$wre="";}
elseif($level=="1"){$wre="WHERE std_level='$level'";}
elseif($level=="2"){$wre="WHERE std_level='$level'";}
elseif($level=="3"){$wre="WHERE std_level='$level'";}
elseif($level=="4"){$wre="WHERE std_level='$level'";}
elseif($level=="3T"){$wre="WHERE std_level='$level'";}
elseif($level=="4T"){$wre="WHERE std_level='$level'";}
elseif($level=="3N"){$wre="WHERE std_level='$level'";}
elseif($level=="4N"){$wre="WHERE std_level='$level'";}
else{;$wre="";}

$sql = "SELECT * FROM student $wre";
$result = $conn->query($sql);

?>
<h1>ข้อมูลนักศึกษา <?=levelName($level)?></h1>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">รหัสนักศีกษา</th>
      <th scope="col">ชื่อ-นามสกุล</th>
      <th scope="col">ชั้นปี</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">จัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row"><?=$row["id"]?></th>
      <td><?=$row["id_student"]?></td>
      <td><?=$row["std_name"]?></td>
      <td><?=levelName($row["std_level"])?></td>
      <td><?=$row["std_phone"]?></td>
      <td><?=$row["std_address"]." ต.".
             $row["std_district"]." อ.".
             $row["std_county"]." จ.".
             $row["std_province"]
          ?>
      </td>
      <td>
        <a href="?id=update_student&s_id=<?=$row["id"]?>" style="text-decoration: none;">
          <i class="bi bi-pencil-square text-warning"></i>
        </a> 
        <a href="delete_student.php?id=<?=$row["id"]?>" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?')">
          <i class="bi bi-trash3-fill text-danger"></i>
        </a>
      </td>
    </tr>
    <?php
    }
} else {
  echo "0 results";
}
    ?>
  </tbody>
</table>
</div>

<?php
$conn->close();
?> 