<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>test</title>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
	</head>

	<body style="background-image: url(assets/img/websettingimg/background.jpg);font-family: 'Kanit', sans-serif;height: 100%;;margin: 0;">

<div style="padding-top:3%;"></div>
<center><img src="assets/img/benner.png" style="height: 150px;animation: infinite;"></center>
<div style="padding-top:1%;"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-8">

		<div class="card">
		  <div class="card-header bg-primary text-white" style="font-size: 1.2rem;">
			<i class="fas fa-images"></i> ข่าวประชาสัมพันธ์
		  </div>
		  <div class="card-img">
			<div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>

			  <!-- The slideshow -->
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="assets/img/500x375.png" width="500" height="500">
				</div>
				<div class="carousel-item">
				  <img src="assets/img/500x375.png" width="500" height="500">
				</div>
				<div class="carousel-item">
				  <img src="assets/img/500x375.png" width="500" height="500">
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
			</div>
		  </div>
		</div>

<div style="padding-top:4%;"></div>
		
		<div class="card">
		  <div class="card-header bg-danger text-white" style="font-size: 1.2rem;">
			<i class="fab fa-youtube"></i> วิดีโอ
		  </div>
		  <div class="card-img">
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row_config['video_link'] ?>" allowfullscreen></iframe>
			</div>
		</div>		
	</div><div style="padding-bottom:5%;"></div>
	</div>
    <div class="col-lg-4">
		
	<div style="padding-bottom:3%;"></div>
		<div class="card">
		  <div class="card-header bg-success text-white"><i class="fab fa-buffer">  ระบบสมาชิก</i> </div>
		  <div class="card-body">
                <td>
                  <table width="150" border="0" align="center" cellpadding="0" cellspacing="8">
                    <tbody><tr>
                    <form action="signin_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
        </form>
        <hr>
        <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ <a href="regis.php">สมัครสมาชิก</a></p>
    </div>
	
                  </tbody></table>
                </form></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
            </tbody></table></td>
			</div>
		</div>
	<div style="padding-bottom:3%;"></div>
		<div class="card" style="max-width: 500px;">
		  <div class="card-header bg-primary text-white"><i class="fab fa-facebook-square"></i> Facebook</div>
			<div class="card-body p-0 m-0" style="height:130px;">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpttscfanpage&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
		  </div>
		</div>
	<div style="padding-bottom:3%;"></div>
	</div>
  </div>
	<script src="js/main.js"></script>
	<script src="js/sweetalert.min.js"></script>   
</body>
</html>