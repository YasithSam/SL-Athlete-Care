<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="style.css">

<?php linkCSS("assets/css/article.css") ?>
<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 1.2em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
</style>
<body>

<!--  <header>
 	<h1>Nav Bar</h1>
 </header> -->

 <div class="main-content">
 <header>
	 <div class="logo">
		<img src="../../../web/public/assets/img/logo-4040.png" alt="">
		<h2>SL Athlete Care</h2>
	</div>
	
		
			<div class="profile">
				<button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
			</div>
	
</header> 

<main>
	<div class="row">
		<div class="left-column">
			<h1 style="font-size:30px">Blog Post</h1>
		  <div class="card">
   
		   <div class="user-wrapper1">
		   <?php 
					if ($data['active']->role_id==2){
						echo "<img src='../../../web/public/assets/dbimages/".$data['active']->doctorImg."'  alt='doctor'>";
					}	
					else if ($data['active']->role_id==3){
						echo "<img src='../../../web/public/assets/dbimages/".$data['active']->paraImg."'  alt='physio'>";
					}
					else if ($data['active']->role_id==4){
						echo "<img src='../../../web/public/assets/dbimages/".$data['active']->athleteImg."'  alt='athlete'>";
					}
					else if ($data['active']->role_id==5){
						echo "<img src='../../../web/public/assets/dbimages/".$data['active']->paraImg."'  alt='nutritionist'>";
					}
				?>
			   <div class="user-name">
				   <h4><?php echo $data['active']->username; ?></h4>
			   </div>
		   </div> 	
   
			<h2><?php echo $data['active']->heading; ?></h2>
			<?php $a=explode(" ",$data['active']->datetime);?>
				<h5><?php echo $a[0] ?></h5>
				<br>
		   
		   <div class="article">
		   <img src="../../../web/public/assets/dbimages/<?php echo($data['active']->url)?>" alt="">
		   </div>
		   <br>
			<p><?php echo $data['active']->description; ?>
			</p>
			<br>
   
			<div class="like-comment">
			   <div class="comment">
				   <i class="bx bx-comment-dots"></i>
				   <h6><?php echo $data['active']->comments; ?></h6>
				   <h6>Comments</h6>
			   </div>
			</div>
   
			<br>
			
		  </div>
		
		  <br><br>
		  <h2>All Comments</h2>
			
		  <div id="output"></div>
		  
			
   
   
		</div>
   
		<div class="right-column">
			<h1 style="font-size:30px">Similar Articles</h1>
			<?php if(!empty($data['data'])): ?>
			<?php foreach($data['data'] as $item): ?>
			<div class="card">
			   <div class="user-wrapper2">
			   <?php 
					if ($item->role_id==2){
						echo "<img src='../../../web/public/assets/dbimages/$item->doctorImg'  alt='doctor'>";
					}
					else if ($item->role_id==3){
						echo "<img src='../../../web/public/assets/dbimages/$item->paraImg'  alt='physio'>";
					}
					else if ($item->role_id==4){
						echo "<img src='../../../web/public/assets/dbimages/$item->athleteImg'  alt='athlete'>";
					}
					else if ($item->role_id==5){
						echo "<img src='../../../web/public/assets/dbimages/$item->paraImg'  alt='nutritionist'>";
					}
				?>	
				   <div class="user-name">
					   <h4><?php echo $item->username; ?></h4>
				   </div>
			   </div> 	
   
			   <div class="article">
				<img src="../../../web/public/assets/dbimages/<?php echo($item->url)?>" alt="">
			   </div>
		  
	   
				<h3><?php echo $item->heading; ?></h3>
				<?php $b=explode(" ",$data['active']->datetime);?>
				<h5><?php echo $b[0]?></h5>
   
				<div class="decision-wrapper">
				   <a href="<?php echo BASEURL;?>/forumController/articleitem/<?php echo $item->id;?>"><button class="button3">View</button></a>
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


   
	   <!--footer starts-->
	   <div class="footer">
   
	   
		   <h1 class="credit">copyright@ Sri Lanka Sports medicine Association </h1>
	   </div> 
	   <!--footer ends-->    
	   <script>
	   $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
				var t="http://localhost/SL-Athlete-Care/api/v1/getPostCommentsD.php?id="+<?php echo $data['active']->id;?>;
		
                $.post(t,
                        function (data) {
                               var data = JSON.parse(data);
							
                            console.log(data);
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                               
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['username'] + " </span> <span class='posted-at'>" + data[i]['datetime'] + "</span> <span class='commet-row-label'> Hours Ago</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    
                                
                            }
                            $("#output").html(list);
                        });
            }
            
		</script>  
   
   
   </body>
   </head>