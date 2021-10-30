<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>

<?php linkCSS("assets/css/forumItem.css") ?>
<body>

<!--  <header>
 	<h1>Nav Bar</h1>
 </header> -->


<?php include "headerArticle.php"?>
<main>
 <div class="row">
 	<div class="left-column">
		 <h1>Injury Forum Post</h1>
 	  <div class="card">

		<div class="user-wrapper1">
			<img src="../../public/assets/img/avatar.png"  alt="">
			<div class="user-name">
				<h4><?php echo ($data[0]->full_name)?></h4>
			</div>
			<div class="img/condition">
				<h5>| <?php echo ($data[0]->con)?></h5>
			</div>
		</div> 	

 		<h1><?php echo ($data[0]->injury)?> </h1>
 		<h5><?php echo ($data[0]->Date)?></h5>
		 <br>
		
		 
		
 		<!-- <img src="img/blog1.jpg" alt="blog "/> -->
 		
 		<p><?php echo ($data[0]->description)?></p>
		 <br>
		 <div class="decision-wrapper">
			<a href="<?php echo BASEURL;?>/forumController/confirm/<?php echo $data[0]->id;?>"><button class="button1">Accpet</button></a>
			<a href="<?php echo BASEURL;?>/forumController/reject/<?php echo $data[0]->id;?>"><button class="button2">Reject</button></a>
		</div>

		
 	  </div>

	   <div class="card">
		<div class="comments-wrapper">
			<div class="user-name">
				<h1>Comments</h1>
			</div>
			<!-- <div class="condition">
				<div class="Comments-box">
					<a href=""><button class="comments">Add Comment</button></a>
				</div>
			</div> -->
		</div> 
		
		<hr style="height:1px;border-width:0;color:gray;background-color:gray">

		<br>

		<div class="container">
			<form action=" ">
		  
				<div class="row">
				
				<div class="col-75">
					<input type="text" id="title" name="title" placeholder="Write a comment...">
				</div>
				</div> 
			</form>
		</div>


			  
	 </div>

 	</div>

 	<div class="right-column">
		 <h1>Similar Post</h1>
         <?php if(!empty($data[1])): ?>

           <?php foreach($data[1] as $item): ?>
                <div class="card">
                    <div class="user-wrapper2">
                        <img src="../../public/assets/img/avatar.png"  alt="">
                        <div class="user-name">
                            <h4> <?php echo($item->full_name) ?></h4>
                        </div>
                       
                    </div> 	        
                    <h3><?php echo($item->injury) ?></h3>              
                       
                    <h3><?php echo($item->con) ?></h3>
                     
                    <h5><?php echo($item->date) ?></h5>

                    <div class="decision-wrapper">
                        <a href="<?php echo BASEURL;?>/forumController/item/<?php echo $item->id; ?>"><button class="button3">View</button></a>
                    </div>
            
                        
                </div>
                <?php endforeach;?>
        <?php else: ?>
          <h1>No Similar Records</h1>
        <?php endif; ?> 
    
 	


 		<!-- <div class="card">
 			 <h3>Popular Post</h3>
 			 <img src="img/popular-blog1.jpg" alt="popular"/>
 			 <img src="img/popular-blog2.jpg" alt="popular"/>
 			 <img src="img/popular-blog3.jpg" alt="popular"/>
 		</div>
 		<div class="card">
 			<h3>Follow Me</h3>
 			<p>Some Text...</p>
 		</div> -->
 	</div>
 </div>

</main>

</div>



</body>
</head>