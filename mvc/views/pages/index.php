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
  <div class="body container">
    <div class="row mtt-16">
      <?php
        while($club = mysqli_fetch_array($data["clubs"])) {
          echo $club["ClubID"];
          while($player = mysqli_fetch_array($data["players"])) {
            echo $player["ClubID"];
            if ($club["ClubID"] == $player["ClubID"]) {
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
          }
        }
      ?>
    </div>
  </div>

</body>

</html>