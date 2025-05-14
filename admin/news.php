<?php
include_once "conn.php";
$sql = "SELECT * FROM news";
$result = $conn->query($sql);


?>
<h1>จัดการข่าวสาร</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">รูปภาพ</th>
      <th scope="col">หัวข้อข่าว</th>
      <th scope="col">จัดการ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
        $count=1;
        while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row"><?=$count++?></th>
      <td><img src="../img/<?=$row["news_img"]?>" width="60" height="auto" alt=""></td>
      <td>
        <a href="?id=news_detail&news_id=<?=$row["news_id"]?>" style="text-decoration: none; color:#504B38;">
        <?=$row["news_detail"]?>
        </a>
      </td>
      <td>
        <a href="?id=update_news&news_id=<?=$row["news_id"]?>" style="text-decoration: none;">
          <i class="bi bi-pencil-square text-warning"></i>
        </a>&nbsp;&nbsp;
        <a href="delete_news.php?id=<?=$row["news_id"]?>&news_img=<?=$row["news_img"]?>" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?')">
          <i class="bi bi-trash3-fill text-danger"></i>
        </a> 
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