<?php
include_once "conn.php";
$s_id = $_GET["s_id"]??"";
$sql = "SELECT * FROM student WHERE id=$s_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $id_student = $row["id_student"];
    $std_name = $row["std_name"];
    $std_level = $row["std_level"];
    $std_phone = $row["std_phone"];
    $std_address = $row["std_address"];
    $std_district = $row["std_district"];
    $std_county = $row["std_county"];
    $std_province = $row["std_province"];
  }
} else {
  echo "0 results";
}
?>
<h1>แก้ไขข้อมูลนักศึกษา</h1>
<?php
if(isset($_SESSION["alert_update"])):
?>
<div class="alert alert-success" role="alert">
  แก้ไขข้อมูลนักศึกษาเรียบร้อยแล้ว!
</div>
<?php
endif;
unset($_SESSION["alert_update"]);
?>
<form action="update_student_verify.php" method="POST">
  <div class="mb-3">
    <label for="id_student" class="form-label">รหัสนักศึกษา</label>
    <input type="text" class="form-control" value="<?=$id_student?>" id="id_student" name="id_student">
  </div>
  <div class="mb-3">
    <label for="std_name" class="form-label">ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" value="<?=$std_name?>" id="std_name" name="std_name">
  </div>
  <div class="mb-3">
    <label for="std_level" class="form-label">ชั้นปี</label>
    <select class="form-select" name="std_level">
        <option value="1"<?php if($std_level=="1"){echo "selected";}?>>1</option>
        <option value="2"<?php if($std_level=="2"){echo "selected";}?>>2</option>
        <option value="3"<?php if($std_level=="3"){echo "selected";}?>>3</option>
        <option value="4"<?php if($std_level=="4"){echo "selected";}?>>4</option>
        <option value="3T"<?php if($std_level=="3T"){echo "selected";}?>>3 เทียบโอน</option>
        <option value="4T"<?php if($std_level=="4T"){echo "selected";}?>>4 เทียบโอน</option>
        <option value="3N"<?php if($std_level=="3N"){echo "selected";}?>>3 นอกเวลาราชการ</option>
        <option value="4N"<?php if($std_level=="4N"){echo "selected";}?>>4 นอกเวลาราชการ</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="std_phone" class="form-label">เบอร์โทร</label>
    <input type="text" class="form-control" value="<?=$std_phone?>" id="std_phone" name="std_phone">
  </div>
  <div class="mb-3">
    <label for="std_address" class="form-label">ที่อยู่</label>
    <input type="text" class="form-control" value="<?=$std_address?>" id="std_address" name="std_address">
  </div>
  <div class="mb-3">
    <label for="std_district" class="form-label">ตำบล</label>
    <input type="text" class="form-control" value="<?=$std_district?>" id="std_district" name="std_district">
  </div>
  <div class="mb-3">
    <label for="std_county" class="form-label">อำเภอ</label>
    <input type="text" class="form-control" value="<?=$std_county?>" id="std_county" name="std_county">
  </div>
  <div class="mb-3">
    <label for="std_province" class="form-label">จังหวัด</label>
    <input type="text" class="form-control" value="<?=$std_province?>" id="std_province" name="std_province">
  </div>
  <input hidden type="text" name="id" value="<?=$id?>">
  <button type="submit" class="btn btn-primary" onclick="return confirm('คุณต้องการแก้ไขข้อมูลของคุณ <?=$std_name?> หรือไม่?')">แก้ไขข้อมูล</button>

</form>

<?php
$conn->close();
?>