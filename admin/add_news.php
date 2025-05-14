<h1>เพิ่มข่าวสาร</h1>
<form action="add_news_verify.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="news_title" class="form-label">หัวข้อข่าว</label>
    <input type="text" class="form-control" id="news_title" name="news_title" aria-describedby="หัวข้อข่าว">
  </div>
  <div class="mb-3">
    <label for="news_detail" class="form-label">รายละเอียดข่าว</label>
    <textarea class="form-control" id="news_detail" name="news_detail" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="news_img" class="form-label">รูปภาพข่าว</label>
    <input class="form-control" type="file" id="news_img" name="news_img">
  </div>
  <button type="submit" class="btn btn-primary">เพิ่มข่าว</button>
</form>