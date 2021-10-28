<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/main.css") ?>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
</head>
<body>
    <!--header starts-->
    <div class="header_section">
        <div class="header">
            <a href="#">SL ATHLETE CARE</a>
        </div>
        <div class="profile">
            <i class="fas fa-bell"></i>
            <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</button>
        </div>
    </div>
    <!--header ends-->
    
    <!--details-->
    <div class="details_part">
        <div class="name">CASE STUDY</div>
        <div class="description">
            <h3>Muscle Sprains and Strains</h3>
            <h4>Injuries and disorders that affects bones, muscles, ligaments, nerves, or tendons</h4>
        </div>
    </div>

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
      
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/index/<?php echo($data[1])?>';">
          Updates 
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre/<?php echo($data[1])?>';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='';">
            Post
        </button>
    </div>
      
    <script>

      // Add active class to the current button (highlight it)
      var header = document.getElementById("btn-group");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }

    </script> 
    <!--end of buttons-->
      
      <!--cards-->
      <div class="container-2">

          <!--Date-->
          <?php if(!empty($data[0])): ?>
        
             <?php foreach($data[0] as $item): ?>
       
                    <div class="card-2">
                        <div id="textbox">
                            <h3 class="alignleft"><b>Name : <?php print_r($item->username); ?></b></h3>
                            <?php $d=explode(" ",$item->datetime)?>
                            <h3 class="alignright">Time: <?php echo($d[1]); ?> </h3>
                            <h3 class="alignright">Date: <?php echo($d[0]); ?> </h3>
                           
                        </div>
                        <div style="clear: both;">
                            <h3 class="alignleft"><b><?php echo($item->name); ?> Update : </b><?php echo($item->heading); ?> </h3>
                            <button class="btn_more" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/medicine';">View Update</button>
                        </div>
                    </div>


           <?php endforeach;?>
           <?php else: ?>
              <h1>No data </h1>
            <?php endif; ?> 
    
        
       

</div>

    <!--end-->
    <script>

// Add active class to the current button (highlight it)
var header = document.getElementById("btn-group");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

</script> 
    
</body>
</html>