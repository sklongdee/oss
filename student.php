<?php
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
include_once "admin/conn.php";
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
<div class="container">
  <h1>ข้อมูลนักศึกษา<?=levelname($_GET["level"])?></h1> 
  <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">รหัสนักศึกษา</th>
        <th scope="col">ชื่อ-นามสกุล</th>
        <th scope="col">ชั้นปี</th>
        </tr>
    </thead>
    <tbody>
    <?php
if ($result->num_rows > 0) {
    // output data of each row
    $count=1;
    while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <th scope="row"><?=$count++?></th>
            <td><?=$row["id_student"]?></td>
            <td><?=$row["std_name"]?></td>
            <td><?=levelName($row["std_level"])?></td>
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