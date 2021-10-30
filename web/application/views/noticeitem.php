<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">


<?php linkCSS("assets/css/notice.css") ?>

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>


<body>


 <div class="main-content">
 <header>
	 <div class="logo">
		<img src="../../web/public/assets/img/logo-4040.png" alt="">
		<h2>SL Athlete Care</h2>
	</div>
	
		
			<div class="profile">
				<i class="fas fa-bell"></i>
				<button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
			</div>
	
</header> 

<main>

<!--Latest notice-->	
 <div class="row">
 	<div class="left-column">
		 <h1 style="font-size:30px">Latest Notice</h1>
 	  <div class="card">
			<div class="in-card">
				<img src="../../web/public/assets/img/notice.jpg"  alt="">
				<h2>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process. Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h2>
				<h5>Dec 7, 2017</h5>
				<br>
		</div>
	  </div>
 	</div>

</div>
<br>
<br>

<!--Other notices-->
<div class="other-notices">
	<h1 style="font-size:30px">Other Notices</h1>
</div>
<br>

<br>
 <div class="row2">
   	<div class="column">
		<div class="grid-card">
			<img src="../../web/public/assets/img/notice1.jfif"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			<h5>Dec 7, 2017</h5>
				
			<div class="decision-wrapper">
				<a href="<?php echo BASEURL;?>/forumController/noticeitem"><button class="button3">View</button></a>
			</div>
		</div>
	</div>
 
	<div class="column">
		<div class="grid-card">
			<img src="../../web/public/assets/img/notice2.jfif"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			<h5>Dec 7, 2017</h5>
	
			<div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>
		</div>
	</div>

	<div class="column">
		<div class="grid-card">
			<img src="../../web/public/assets/img/notice.jpg"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			<h5>Dec 7, 2017</h5>
	
			<div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>
		</div>
	</div>

	<div class="column">
		<div class="grid-card">
			<img src="../../web/public/assets/img/notice3.jpg"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			<h5>Dec 7, 2017</h5>
	
			<div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>
		</div>
	</div>

 
 
 </div>

</main>

</div>

    <!--footer starts-->
    <div class="footer">

    
        <h1 class="credit"> copyright@ Sri Lanka Sports medicine Association </h1>
    </div> 
    <!--footer ends-->    


</body>
</head>