<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<!--เปิดเมนูด้านบน -->
  <nav class="navbar navbar-expand-lg" style="background-color:#E7FBE6;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?id=about">เกี่ยวสาขา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?id=short_course">หลักสูตรระยะสั้น</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ข้อมูลนักศึกษา
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?id=student&level=all">ทั้งหมด</a></li>
              <li><a class="dropdown-item" href="?id=student&level=1">ปี 1</a></li>
              <li><a class="dropdown-item" href="?id=student&level=2">ปี 2</a></li>
              <li><a class="dropdown-item" href="?id=student&level=3">ปี 3</a></li>
              <li><a class="dropdown-item" href="?id=student&level=4">ปี 4</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ข้อมูลนักศึกษา(เทียบโอน)
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?id=student&level=3T">ปี 3</a></li>
              <li><a class="dropdown-item" href="?id=student&level=4T">ปี 4</a></li>
              <li><a class="dropdown-item" href="?id=student&level=3N">ปี 3 (นอกเวลาราชการ)</a></li>
              <li><a class="dropdown-item" href="?id=student&level=4N">ปี 4 (นอกเวลาราชการ)</a></li>
            </ul>
          </li>
        </ul>
          <a href="admin" class="btn btn-outline-success">Login</a>
      </div>
    </div>
  </nav>
<!--ปิดเมนูด้านบน -->
<!-- ส่วนแสดงผลหน้าหลัก-->
  <?php
    $id = $_GET["id"] ?? "";
    if($id=="about"){
      include "about.php";
    }elseif($id=="short_course"){
      include "short_course.php";
    }elseif($id=="news_detail"){
      include "news_detail.php";
    }elseif($id=="student"){
      include "student.php";
    }else{
      include "main.php";
    }
  ?>
<!-- ปิดส่วนแสดงผลหน้าหลัก-->
<div class="container-fluid" style="background-color:#E7FBE6;">
  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-body-secondary">&copy; 2017–2024</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>