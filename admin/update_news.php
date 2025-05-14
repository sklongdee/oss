<?php
include_once "conn.php";
$news_id = $_GET["news_id"];
$sql = "SELECT * FROM news WHERE news_id=$news_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $news_id = $row["news_id"];
    $news_title = $row["news_title"];
    $news_detail = $row["news_detail"];
    $news_img = $row["news_img"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<h1>แก้ไขข้อมูลข่าว</h1>
<?php
if(isset($_SESSION["alert_update"])):
?>
<div class="alert alert-success" role="alert">
  แก้ไขข้อมูลข่าวเรียบร้อยแล้ว!
</div>
<?php
endif;
unset($_SESSION["alert_update"]);
?>
<form action="update_news_verify.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="news_title" class="form-label">หัวข้อข่าว</label>
    <input type="text" class="form-control" value="<?=$news_title?>" id="news_title" name="news_title" aria-describedby="หัวข้อข่าว">
  </div>
  <div class="mb-3">
    <label for="news_detail" class="form-label">รายละเอียดข่าว</label>
    <textarea class="form-control" id="news_detail" name="news_detail" rows="3"><?=$news_detail?></textarea>
  </div>
  <div class="mb-3">
    <p>รูปภาพข่าว</p>
    <img src="../img/<?=$news_img?>" width="400" height="auto" alt="">
  </div>
  <div class="mb-3">
    <label for="news_img" class="form-label">รูปภาพข่าวใหม่</label>
    <input class="form-control" type="file" id="news_img" name="news_img">
  </div>
  <input hidden type="text" name="news_id" value="<?=$news_id?>">
  <button type="submit" class="btn btn-primary">แก้ไขข่าว</button>
</form>