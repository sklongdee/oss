<div class="container">
    <h1>รายละเอียดข่าว</h1>
    <?php
    include_once "admin/conn.php";
    $news_id = $_GET["news_id"] ?? "";
    $sql = "SELECT * FROM news WHERE news_id=$news_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $news_img = $row["news_img"];
        $news_detail = $row["news_detail"];
        $news_date = $row["news_date"];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
    <div class="card mb-3">
        <div class="d-flex justify-content-center align-items-center py-3" >
            <img src="img/<?=$news_img?>" class="card-img-top w-50" alt="...">
        </div>
        <div class="card-body">
            <p class="card-text"><?=$news_detail?></p>
            <p class="card-text"><small class="text-body-secondary"><?=$news_date?></small></p>
        </div>
    </div>
</div>