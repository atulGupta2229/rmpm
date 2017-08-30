<!DOCTYPE html>
<html>
<head>
	<title>
		Rajkiya Mahila Polytechnic, Moradabad
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript">
		$(window).scroll(function(){
			if($(this).scrollTop()>80){
				$(".nav").css({top:"0px",position:"fixed",height:"50px",background: "rgba(124, 179, 66, 1)",zIndex: "999"});
				$(".menu-tab").css({padding:"1%"});
				$(".contact-body").css({marginTop:"50px"});
			}
			else{
				$(".nav").css({top:"0px",position:"relative",height:"60px",background: "rgba(124, 179, 66, 1)",zIndex: "0"});	
				$(".menu-tab").css({padding:"1.65%"});
				$(".contact-body").css({marginTop:"0px"});
			}
		});
	</script>
</head>
<body>
<div class="container-fluid">
	
	<div class="row">
		<div class="col-sm-12 header">
			<div class="col-sm-12" style="">
				<img src="assets/images/dummy-logo.png" width="60px" style="padding-bottom: 0.8%"> <span style="font-size: 1.3em;"> Govt. Girls Polytechnic, Moradabad</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 nav">
			<ul>
				<li class="menu-tab">
					Home
				</li>
				
				<li class="menu-tab">
					Gallery
				</li>
				<li class="menu-tab"> 
					Contact Us
				</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 contact-body">
			<div class="col-sm-6 text-center">
				<div class="contact-form">
					<input type="text" name="name" class="inp" placeholder="Enter Name"><br>
					<input type="text" name="email" class="inp" placeholder="Enter email"><br>
					<textarea class="inp" rows="5">
						
					</textarea><br>
					<button class="btn bt">Send</button> <button class="btn bt">Reset</button>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="contact-form">
					<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAcpfxjqVr2xkI92qJ_Ypmd5gZpvOWP3Qw&q=government+girls+polytechnic+moradaba" height="250px" width="100%"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 ftr">
		
		</div>
	</div>
</div>
</body>
</html>