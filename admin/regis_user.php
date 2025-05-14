<form action="regis_user_verify.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="role" class="form-label">ระดับผู้ใช้งาน</label>
    <select class="form-select" id="role" name="role">
        <option selected>เลือกระดับผู้ใช้งาน</option>
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="_name" class="form-label">ชื่อ-นามสกุล</label>
    <input type="text" class="form-control" id="_name" name="_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>