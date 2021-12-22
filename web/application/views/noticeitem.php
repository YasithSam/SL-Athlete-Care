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
				<img src="../../../web/public/assets/img/<?php echo($data['active']->url)?>"  alt="">
				<h2><?php echo $data['active']->heading; ?></h2>
				<h2><?php echo $data['active']->description; ?></h2>
				
<!-- 								<h5>Dec 7, 2017</h5>
 -->				<br>
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
 <?php if(!empty($data['data'])): ?>
 <?php foreach($data['data'] as $item): ?>
   	<div class="column">
		<div class="grid-card">
		<img src="../../../web/public/assets/img/<?php echo($item->url)?>"  alt="">
				<h2><?php echo $item->heading; ?></h2>
				
			<div class="decision-wrapper">
				<a href="<?php echo BASEURL;?>/forumController/noticeitem/<?php echo $item->id;?>"><button class="button3">View</button></a>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	<?php else: ?>
		<h1>No data </h1>
	<?php endif; ?> 
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