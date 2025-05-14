<div class="container mb-3">
  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/13_1741922424.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/13_1728354357.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/13_1655865458.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class="container mb-3">
  <div class="row row-cols-1 row-cols-md-4 g-4">

  <?php
  include_once "admin/conn.php";
  $sql = "SELECT * FROM news";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  ?>
    <div class="col">
      <div class="card h-100">
        <img src="img/<?=$row["news_img"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">
            <a href="?id=news_detail&news_id=<?=$row["news_id"]?>" style="text-decoration: none; color:#504B38;">
              <?=$row["news_title"]?>
            </a>
          </p>
        </div>
      </div>
    </div>
  <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  ?>




  </div>
</div>