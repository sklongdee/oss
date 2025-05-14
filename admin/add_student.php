<h1>เพิ่มข้อมูลนักศึกษา</h1>
<form action="add_student_verify.php" method="POST">
  <div class="mb-3">
    <label for="id_student" class="form-label">รหัสนักศึกษา</label>
    <input type="text" class="form-control" id="id_student" name="id_student">
  </div>
  <div class="mb-3">
    <label for="std_name" class="form-label">ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" id="std_name" name="std_name">
  </div>
  <div class="mb-3">
    <label for="std_level" class="form-label">ชั้นปี</label>
    <select class="form-select" name="std_level">
        <option selected>กรุณาเลือกชั้นปี</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="3N">3 เทียบโอน</option>
        <option value="4N">4 เทียบโอน</option>
        <option value="3T">3 นอกเวลาราชการ</option>
        <option value="4T">4 นอกเวลาราชการ</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="std_phone" class="form-label">เบอร์โทร</label>
    <input type="text" class="form-control" id="std_phone" name="std_phone">
  </div>
  <div class="mb-3">
    <label for="std_address" class="form-label">ที่อยู่</label>
    <input type="text" class="form-control" id="std_address" name="std_address">
  </div>
  <div class="mb-3">
    <label for="std_district" class="form-label">ตำบล</label>
    <input type="text" class="form-control" id="std_district" name="std_district">
  </div>
  <div class="mb-3">
    <label for="std_county" class="form-label">อำเภอ</label>
    <input type="text" class="form-control" id="std_county" name="std_county">
  </div>
  <div class="mb-3">
    <label for="std_province" class="form-label">จังหวัด</label>
    <input type="text" class="form-control" id="std_province" name="std_province">
  </div>
  <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
</form>