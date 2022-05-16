<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/doan/public/css/color.css">
  <link rel="stylesheet" href="/doan/public/css/custom.css">
  <link rel="stylesheet" href="/doan/public/css/style.css">
  <style>
  <?php require_once "./public/css/style.css"?>
  </style>
</head>

<body>
  <header class="container-fluid bdb">
    <navbar class="row d-f-aic">
      <div class="brand col-2">
        <img style="width:120px" src="https://iweb.tatthanh.com.vn/pic/3/blog/images/image(771).png" alt="">
      </div>
      <div class="col-8">
        <nav class=" d-f d-f-aic d-f-ajcc t-upper f-w-600">
          <li>
            <a href="" class="pdx-16 pdy-8 c-gray-1 link active">Khám phá</a>
          </li>
          <li><a href="" class="pdx-16 pdy-8 link c-gray-1">Cửa hàng</a></li>
          <li><a href="" class="pdx-16 pdy-8 link c-gray-1">Ngành hàng</a></li>
          <li><a href="" class="pdx-16 pdy-8 link c-gray-1">Yêu thích</a></li>
        </nav>
      </div>
      <div class="col-2">
        <a href="" class="btn btn-success d-i-f">
          <span class="material-icons">
            shopping_cart
          </span>
        </a>
      </div>
    </navbar>
  </header>

  <div class="body container">
    <div class="row mtt-16">
      <?php 
        $arrS = array(1,2,3,4,5,6,7,8,9);
        foreach ($arrS as $arr) {
          echo '<div class="col-3 mtb-16">
        <div class="bsd bdr10x hover csp">
          <div class="pos-r cover cover-active" title="Nem nướng chay phát tâm">
            <div class="ofh bdr10x">
              <img
                src="https://dl.airtable.com/.attachments/47191534e9495282ddcbf303d9323e3a/821b8668/z2949295073421-4ec10e5f6d53566c68ea7523f9ea5985-1-thumbnail2x.jpg?ts=1651833034&userId=usrk5orn56sTujaim&cs=efb6618b876e5ee4"
                alt="">
            </div>
            <div class="pdy-16 pdx-16 c-gray-1">
              <p class="mtb-4">ChoppSelects</p>
              <p class="f-w-600 fsl t-no-wrap mtb-4">Nem Nướng Chay Phát Tâm</p>
              <p class="d-f d-f-aic mtb-4"><span class="mtr-8 tag">-20%</span><span
                  class="mtr-8 f-w-600 c-green">64.000đ</span><span><del>80.000đ</del></span></p>
            </div>
            <a class="btn btn-success pos-a top-50p left-50p tftl-i50-i50 z-index-100 at" href="">Thêm vào giỏ</a>
          </div>
        </div>
      </div>';
        }
      ?>
      <?php
        // while($row = mysql_fetch_array($data["data"])) {
        //   echo $row["CoachID"];
        // }
      ?>
    </div>
  </div>

</body>

</html>