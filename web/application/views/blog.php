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
		<img src="logo-4040.png" alt="">
		<h2>SL Athlete Care</h2>
	</div>
	
		
			<div class="profile">
				<i class="fas fa-bell"></i>
				<button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/?>';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
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
							<div class="swiper-slide">
								<div class="testi-item">
									<div class="testimonials-text">
										<div class="notice">
											<img src="img/notice.jpg" alt="">
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<a href="#" class="text-link"></a>
										<div class="testimonials-avatar">
																					<h4>Owner</h4>
										</div>
									</div>
								</div>
							</div>
		
							<!--second--->
							<div class="swiper-slide">
								<div class="testi-item">
									<div class="testimonials-text">
										<div class="notice">
											<img src="img/notice1.jfif" alt="">
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<a href="#" class="text-link"></a>
										<div class="testimonials-avatar">
																					<h4>Owner</h4>
										</div>
									</div>
								</div>
							</div>
							<!--third-->
		
							<div class="swiper-slide">
								<div class="testi-item">
									<div class="testimonials-text">
										<div class="notice">
											<img src="img/notice2.jfif" alt="">
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<a href="#" class="text-link"></a>
										<div class="testimonials-avatar">
																					<h4>Owner</h4>
										</div>
									</div>
								</div>
							</div>
		
							<!--fourth-->
							<div class="swiper-slide">
								<div class="testi-item">
									<div class="testimonials-text">
										<div class="notice">
											<img src="img/notice3.jpg" alt="">
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<a href="#" class="text-link"></a>
										<div class="testimonials-avatar">
																					<h4>Owner</h4>
										</div>
									</div>
								</div>
							</div>
							<!--testi end-->
		
						</div>
					</div>
				</div>
		
				<div class="tc-pagination"></div>
			</div>
		

		   </section>


		
 	  </div>

	   <div class="wrapper">
			<div class="tabs_wrap">
				<ul class="indicator">
					<li data-filter="all" class="active"><a href="#">All</a></li>
					<li data-filter="Cricket"><a href="#">Cricket</a></li>
					<li data-filter="Football"><a href="#">Football</a></li>
					<li data-filter="Athletics"><a href="#">Athletics</a></li>
<!-- 					<li data-filter="Others"><a href="#">Others</a></li>
 -->				</ul>
			</div>
		</div>

		
		<div class="container">
			<div class="card-content" style="display: none">
			
				<ul class="items">
					<li data-category="Cricket">
						<div class="pag-card">
 								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/john.jpg"  alt="">
											<div class="user-name">
												<h4>John Cronin
												</h4>
											</div>
									</div> 
										<h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
										<h5>August 2014</h5>
									<div class="decision-wrapper">
										<a href="<?php echo BASEURL;?>/forumController/questionitem"><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
					<li data-category="Football">
						<div class="pag-card">
							<div class="card-info">
							   <div class="user-wrapper2">
								   <img src="img/john.jpg"  alt="">
									   <div class="user-name">
										   <h4>John Cronin
										   </h4>
									   </div>
							   </div> 
							   <h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
							   <h5>August 2014</h5>
							   <div class="decision-wrapper">
								   <a href=""><button class="button3">View</button></a>
							   </div>          
						   </div>
				   </div>
			   </li>
 					<li data-category="Athletics">
						<div class="pag-card">
							<div class="card-info">
							   <div class="user-wrapper2">
								   <img src="img/john.jpg"  alt="">
									   <div class="user-name">
										   <h4>John Cronin
										   </h4>
									   </div>
							   </div> 
							   <h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
							   <h5>August 2014</h5>
							   <div class="decision-wrapper">
								   <a href=""><button class="button3">View</button></a>
							   </div>          
						   </div>
				   </div>
			   </li>
<!-- 					<li data-category="Others">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>Is Your Rotator Cuff A Sore Subject?</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
 -->					<li data-category="Cricket">
							<div class="pag-card">
								<div class="card-info">
								<div class="user-wrapper2">
									<img src="img/p1.jpg"  alt="">
										<div class="user-name">
											<h4>John Cronin
											</h4>
										</div>
								</div> 
								<h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
								<h5>August 2014</h5>
								<div class="decision-wrapper">
									<a href=""><button class="button3">View</button></a>
								</div>          
							</div>
						</div>
						</li>
					<li data-category="Football">
						<div class="pag-card">
							<div class="card-info">
							   <div class="user-wrapper2">
								   <img src="img/p1.jpg"  alt="">
									   <div class="user-name">
										   <h4>John Cronin
										   </h4>
									   </div>
							   </div> 
							   <h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
							   <h5>August 2014</h5>
							   <div class="decision-wrapper">
								   <a href=""><button class="button3">View</button></a>
							   </div>          
						   </div>
				   </div>
			   </li>
					<li data-category="Athletics">
						<div class="pag-card">
							<div class="card-info">
							   <div class="user-wrapper2">
								   <img src="img/p1.jpg"  alt="">
									   <div class="user-name">
										   <h4>John Cronin
										   </h4>
									   </div>
							   </div> 
							   <h4>Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers. Biomechanics, Injury Surveillance and Predictors of Injury for Cricket Fast Bowlers</h4>
							   <h5>August 2014</h5>
							   
							   <div class="decision-wrapper">
								   <a href=""><button class="button3">View</button></a>
							   </div>          
						   </div>
				   </div>
			   </li>
<!--					<li data-category="Others">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>Swimming with a SICK Scapula (Shoulder Blade)</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
					<li data-category="Cricket">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>Wrestling and Skin Conditions - What Is THAT?</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
					<li data-category="Football">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>Are You Prepared for Your Sport?</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
					<li data-category="Athletics">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>Mouth Guards in Sports: A Necessary Piece of Equipment</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
					<li data-category="Others">
						<div class="pag-card">
							<div class="card-image"><img src="article.jpg" alt=""></div>
								<div class="card-info">
									<div class="user-wrapper2">
										<img src="img/avatar.png"  alt="">
											<div class="user-name">
												<h4>Kusal Mendis</h4>
											</div>
									</div> 
									<br>	
										<h4>
											Preventative Measures for Asthmatic Athletes</h4>
										<h5>Dec 7, 2017</h5>
									<br>
									<div class="decision-wrapper">
										<a href=""><button class="button3">View</button></a>
									</div>          
								</div>
						</div>
					</li>
 -->					
<!-- 					  <div class="pag-card">
						<div class="card-image"><img src="article.jpg" alt=""></div>
						<div class="card-info">
						  <h3>Card 30</h3>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					  </div>
 -->			  
		 
	  
			  <div class="page-pagination">
				<!--<li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
				<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
				<li class="page-item dots"><a class="page-link" href="#">...</a></li>
				<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
				<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
				<li class="page-item dots"><a class="page-link" href="#">...</a></li>
				<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
				<li class="page-item next-page"><a class="page-link" href="#">Next</a></li>-->
			  </div>
			</ul>
			</div>
		  </div>
					  

	
		
 	</div>

	 



 	<div class="right-column">
		 <h1 style="font-size:30px">Article Section</h1>
 		<div class="card2">
			<div class="user-wrapper2">
				<img src="img/avatar.png"  alt="">
				<div class="user-name">
					<h4>Kusal Mendis</h4>
				</div>
			</div> 	
			 <img src="img/notice.jpg"  alt="">
			 <h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			 <h5>Dec 7, 2017</h5>

			 <div class="decision-wrapper">
				<a href="<?php echo BASEURL;?>/forumController/articleitem"><button class="button3">View</button></a>
			</div>
	
				  
 		</div>

		 <div class="card2">
			<div class="user-wrapper2">
				<img src="img/avatar.png"  alt="">
				<div class="user-name">
					<h4>Kusal Mendis</h4>
				</div>
			</div> 	
			<img src="img/notice.jpg"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			 <h5>Dec 7, 2017</h5>

			 <div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>
	
				  
 		</div>

		
 		<div class="card2">
			<div class="user-wrapper2">
				<img src="img/avatar.png"  alt="">
				<div class="user-name">
					<h4>Kusal Mendis</h4>
				</div>
			</div> 	
			<img src="img/notice.jpg"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			 <h5>Dec 7, 2017</h5>

			 <div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>
	
				  
 		</div>

		 <div class="card2">
			<div class="user-wrapper2">
				<img src="img/avatar.png"  alt="">
				<div class="user-name">
					<h4>Kusal Mendis</h4>
				</div>
			</div> 	
			<img src="img/notice.jpg"  alt="">
			<h4>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
			 <h5>Dec 7, 2017</h5>

			 <div class="decision-wrapper">
				<a href=""><button class="button3">View</button></a>
			</div>

			
	
				  
 		</div>
		 

		 
		 
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

<!--          function getPageList(totalPages, page, maxLength){
          function range(start, end){
            return Array.from(Array(end - start + 1), (_, i) => i + start);
          }
        
          var sideWidth = maxLength < 9 ? 1 : 2;
          var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
          var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        
          if(totalPages <= maxLength){
            return range(1, totalPages);
          }
        
          if(page <= maxLength - sideWidth - 1 - rightWidth){
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
          }
        
          if(page >= totalPages - sideWidth - 1 - rightWidth){
            return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
          }
        
          return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
        }
        
        $(function(){
          var numberOfItems = $(".card-content .pag-card").length;
          var limitPerPage = 3; //How many card items visible per a page
          var totalPages = Math.ceil(numberOfItems / limitPerPage);
          var paginationSize = 7; //How many page elements visible in the pagination
          var currentPage;
        
          function showPage(whichPage){
            if(whichPage < 1 || whichPage > totalPages) return false;
        
            currentPage = whichPage;
        
            $(".card-content .pag-card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();
        
            $(".page-pagination li").slice(1, -1).remove();
        
            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
              $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
              .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
              .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
            });
        
            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
          }
        
          $(".page-pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
          );
        
          $(".card-content").show();
          showPage(1);
        
          $(document).on("click", ".page-pagination li.current-page:not(.active)", function(){
            return showPage(+$(this).text());
          });
        
          $(".next-page").on("click", function(){
            return showPage(currentPage + 1);
          });
        
          $(".previous-page").on("click", function(){
            return showPage(currentPage - 1);
          });
        });
        
 -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<?php linkJS("assets/js/scripts.js") ?>
  
</body>
</head>