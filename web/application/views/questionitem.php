<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<?php linkCSS("assets/css/question.css") ?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>

<body>

<!--  <header>
 	<h1>Nav Bar</h1>
 </header> -->

 <div class="main-content">
 <header>
	 <div class="logo">
		<img src="../../web/public/assets/img/logo-4040.png" alt="">
		<h2>SL Athlete Care</h2>
	</div>
	
		
			<div class="profile">
				<i class="fas fa-bell"></i>
				<button class="btn1" onclick="window.location.href='#';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
			</div>
	
</header> 

<main>
	<div class="row">
		<div class="left-column">
			<h1 style="font-size:30px">Questions</h1>
		  <div class="card">
   
		   <div class="user-wrapper1">
			   <img src="../../web/public/assets/img/avatar.png"  alt="">
			   <div class="user-name">
				   <h4>Kusal Mendis</h4>
			   </div>
		   </div> 	
   
				<h2><?php echo $data['active']->heading; ?></h2>
				<h5><?php echo $data['active']->datetime; ?></h5>
		   
			<p><?php echo $data['active']->description; ?></p>
			<br>
   
			<hr>
   
			<div class="like-comment">
			   <div class="like">
				   <i class="bx bxs-like"></i>
				   <h6><?php echo $data['active']->likes; ?></h6>
				   <h6>Likes</h6>
   
			   </div>
			   <div class="comment">
				   <i class="bx bx-comment-dots"></i>
				   <h6><?php echo $data['active']->comments; ?></h6>
				   <h6>Comments</h6>
			   </div>
			</div>
   
		   
		  </div>
		  <div class="card">
			  <h3>Add Comments</h3>
			  <hr>
			  <form action="">
				   <span><input class="" type="text" placeholder="type here..."></span>
					 <input type="submit" value="Submit" >
			   </form> 
		  </div>
   
   
		</div>
   
		<div class="right-column">
			<h1 style="font-size:30px">Similar Questions</h1>
			<?php if(!empty($data['data'])): ?>
			<?php foreach($data['data'] as $item): ?>

			<div class="card">
			   <div class="user-wrapper2">
				   <img src="../../web/public/assets/img/avatar.png"  alt="">
				   <div class="user-name">
					   <h4>Kusal Mendis</h4>
				   </div>
			   </div> 	
   
			   <h5><?php echo $item->heading; ?></h4>
				<h5><?php echo $data['active']->datetime; ?></h5>
   
				<div class="decision-wrapper">
				   <a href="<?php echo BASEURL;?>/forumController/questionitem"><button class="button3">View</button></a>
			   </div>
	   
					 
			</div>
			<?php endforeach;?>
	<?php else: ?>
		<h1>No data </h1>
	<?php endif; ?> 

		   
   
   
		</div>
	</div>
   
   </main>


   
	   <!--footer starts-->
	   <div class="footer">
   
	   
		   <h1 class="credit">copyright@ Sri Lanka Sports medicine Association </h1>
	   </div> 
	   <!--footer ends-->    
   
   
   </body>
   </head>