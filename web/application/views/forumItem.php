<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

<script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php linkCSS("assets/css/forumItem.css") ?>
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
			<a href="http://localhost/SL-Athlete-Care/api/v1/email.php?id=<?php echo $data[0]->id;?>" onclick='return confirm("Are you sure want to confirm?");'><button class="button1"> Accpet</button></a>
			<a href="<?php echo BASEURL;?>/forumController/reject/<?php echo $data[0]->id;?>"><button class="button2">Reject</button></a>
		</div>

		
 	  </div>

	   <div class="comment-form-container" style="margin-top: 10px;">
        <form id="frm-comment">
            <h1>Comments</h1>
			<hr>
			<br>
			<input name="id" type="hidden" value=<?php echo $data[0]->id;?>></input>
			
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" /><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>
    </div>
	<div id="output"></div>

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
<script>
			

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "http://localhost/SL-Athlete-Care/api/v1/addCommentD.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
						console.log(response);
                        var result = eval('(' + response + ')');
						
                        if (response)
                        {
							
                        	$("#comment-message").css('display', 'inline-block');
                            $("#comment").val("");
                            $("#id").val("");
                     	    listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
			$(document).ready(function () {
            	   listComment();
            });

            function listComment() {
				var t="http://localhost/SL-Athlete-Care/api/v1/getCommentsPostD.php?id="+<?php echo $data[0]->id;?>;
		
                $.post(t,
                        function (data) {
                               var data = JSON.parse(data);
							
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                               
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['username'] + " </span> <span class='posted-at'>" + data[i]['date'] + "</span> <span class='commet-row-label'> Hours Ago</span></div>" + 
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