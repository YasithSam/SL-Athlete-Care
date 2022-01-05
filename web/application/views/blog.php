<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<?php linkCSS("assets/css/blog.css") ?>

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>


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
				<button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
			</div>
	
</header> 

<main>
 <div class="row">
 	<div class="left-column">
		 <h1 style="font-size:30px">Notices</h1>
 	  <div class="card1">
		   <section>
			<div class="testimonials-carousel-wrap">
				<div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" size="10px" style="color: #fff"></i></div>
				<div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
				<div class="testimonials-carousel">
					<div class="swiper-container">
						<div class="swiper-wrapper">

							<!--first-->
							<?php if(!empty($data[0])): ?>
							<?php foreach($data[0] as $item): ?>
							<div class="swiper-slide">
								<div class="testi-item">
									<div class="testimonials-text">
										<div class="notice">
											<img src="../../web/public/assets/img/<?php echo($item->url)?>" alt="">
										</div>
										
										<p><?php echo $item->heading?></p>

										<div class="text-link">
											<div class="decision-wrapper">
												<a href="<?php echo BASEURL;?>/forumController/noticeitem/<?php echo $item->id;?>"><button class="notice-btn">View</button></a>
											</div>          

										</div>
										<div class="testimonials-avatar">
																					<h4>Owner</h4>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach;?>
							<?php else: ?>
								<h1>No data </h1>
							<?php endif; ?> 
		
							
		
						</div>
					</div>
				</div>
		
				<div class="tc-pagination"></div>
			</div>
		

		   </section>


		
 	  </div>

	   <div class="filter-search-box">
                <div class="wrapper">
                    <div class="tabs_wrap">
                        <ul class="indicator">
							<li data-filter="all" class="active"><a href="#">All</a></li>
                            <li data-filter="Cricket - Q"><a href="#">Cricket</a></li>
                            <li data-filter="Football - Q"><a href="#">Football</a></li>
                            <li data-filter="Rugby - Q"><a href="#">Rugby</a></li>
                            <li data-filter="Athletics - Q"><a href="#">Athletics</a></li>
                            <li data-filter="Other - Q"><a href="#">Others</a></li>
                        </ul>
                    </div>
                </div>
        </div>

    

        <div class="q-container">
            <ul class="items">
				<?php foreach($data[2] as $item2): ?>
					<li data-category="<?php echo($item2->type)?>">
						<div class="q-card">
							<div class="q-user-wrapper2">
								<img src="avatar.png"  alt="">
								<div class="user-name">
									<h4>Kusal Mendis</h4>
								</div>
							</div> 	
							<h3><?php echo $item2->heading?></h3>
							<h5 class="date"><?php echo $item2->datetime?></h5>
							<div class="decision-wrapper">
								<a href="<?php echo BASEURL;?>/forumController/questionitem/<?php echo $item1->id;?>"><button class="button3">View</button></a>
							</div>
						</div>
					</li>
				<?php endforeach;?>
            </ul>
        </div>
					  

	
		
 	</div>





 	<div class="right-column">
		 <h1 style="font-size:30px">Article Section</h1>

		<?php if(!empty($data[1])): ?>
		<?php foreach($data[1] as $item1): ?>

 		<div class="card2">
			<div class="user-wrapper2">
				<img src="../../web/public/assets/img/avatar.png"  alt="">
				<div class="user-name">
					<h4>Kusal Mendis</h4>
				</div>
			</div> 	
			 <img src="../../web/public/assets/img/<?php echo($item1->url)?>"  alt="">
			 <h2><?php echo $item1->heading?></h2>
			 <h4><?php echo $item1->datetime?></h4>

			 <div class="decision-wrapper">
				<a href="<?php echo BASEURL;?>/forumController/articleitem/<?php echo $item1->id;?>"><button class="button3">View</button></a>
			</div>
	
				  
 		</div>

		<?php endforeach;?>
		<?php else: ?>
			<h1>No data </h1>
		<?php endif; ?> 

	 
		 <div class="view">
			<a href="<?php echo BASEURL;?>/forumController/grid"><button class="viewall">View All</button></a>
		</div>


 	</div>
 </div>

</main>

</div>

    <!--footer starts-->
    <div class="footer">

        <h1 class="credit"> &copy; copyright @ Sri Lanka Sports medicine Association </h1>
    </div> 
    <!--footer ends-->    

    <?php linkJS("assets/js/filter.js") ?>
	<?php linkJS("assets/js/pagination.js") ?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<?php linkJS("assets/js/scripts.js") ?>
  
</body>
</head>