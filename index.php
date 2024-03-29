
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>โรงเรียนเซนต์โยเซฟแม่ระมาด</title>
  <link rel="stylesheet" href="report.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="shortcut icon" href="finish_sjm_logo.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header class="header">
      <div class="logo">
        <a href="#"><img src="finish_sjm_logo.png" alt="" width="70" height="70"></a>
        <div class="sjm-logo">
          <div class="logo-bold">
            SJM
          </div>
          <div class="logo-smaller">www.sjm.ac.th</div>
        </div>
      </div>
    </header>

  <div class="banner">
    <div class="banner-info">
      <img src="finish_sjm_logo.png" alt="" height="60" width="60">
      <h4>ระบบแจ้งปัญหา โรงเรียนเซนต์โยเซฟแม่ระมาด</h4>
    </div>

    <div class="banner-howto">
      <i class="fa-solid fa-book-open-reader">&emsp;วิธีการแจ้งปัญหา</i>
      <p>1.ให้นักเรียนพิมพ์ปัญหาลงในช่อง "แสดงความคิดเห็น"</p><br>
      <p class="item-2">2.เมื่อพิมพ์ปัญหาเสร็จแล้วจึงจะกดปุ่มส่ง</p>
    </div>

    <form action="submit_msg.php" method="post" class="form-body-msg" id="msg_form">
      <div class="form-title">
        <i class="fa-solid fa-message">&emsp;แจ้งปัญหา</i>
      </div>
      <div class="form-body">
        <div class="form-msg">
          <input type="text" class="form-control" placeholder="ชื่อ" name="fname" required></input>
        </div>
        <div class="form-msg">
          <input type="text" class="form-control" placeholder="สกุล" name="lname" required></input>
        </div>
        <div class="form-msg">
          <input type="text" class="form-control" placeholder="ชั้น" name="grade" required></input>
        </div>
        <div class="form-msg">
          <input type="text" class="form-control" placeholder="หัวข้อ" name="subject" required></input>
        </div>
        <div class="form-msg">
          <textarea type="text" class="form-control" placeholder="แสดงความคิดเห็น" name="msg" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn-form-submit" name="sub-msg">ส่ง</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

  <?php if (isset($_SESSION['success'])) { ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Yes',
        text: '<?php echo $_SESSION['success'] ?>',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
    <?php

    unset($_SESSION['success']);

  }
  ?>

  <?php if (isset($_SESSION['error'])) { ?>
    <script>
      Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: '<?php echo $_SESSION['error'] ?>',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
    <?php

    unset($_SESSION['error']);

  }

  ?>

</body>

</html>