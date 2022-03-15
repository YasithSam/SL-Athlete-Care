<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>casestudy</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>
        <?php linkCSS("assets/css/casestudyNew.css") ?>
        <?php linkCSS("assets/css/search2.css") ?>
        <?php linkCSS("assets/css/styleCS.css") ?>
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>

<div class="main-content">

    <?php include "header.php"?>

   <!--Body section-->
<main>

    <div class="title">Case Study Overview</div>

    <div class="menu">
        <button class="showall">All</button>
        <button class="single" target="1">Current</button>
        <button class="single" target="2">Old</button>
    </div>
   <!-- <div class="search-container">
          <input type="text" placeholder="Search case studies..." name="search">
          <div class="srch"><a href=""> <i class="fa fa-search"></i></a></div>
    </div> -->
    <div class="filter-search-box">
        <div class="wrapper">
            <div class="tabs_wrap">
            <form action="<?php echo BASEURL;?>/doctor/filter" method="POST">
                <ul class="indicator">
                    <li data-filter="injury" class="active">                    
                        <select name="doctors" id="d">
                            <option value="W.D. Aruna Jayasundara">W.D. Aruna Jayasundara</option>
                            <option value="Kithsiri Perera">Kithsiri Perera</option>
                            <option value="Wasana Jayakodi">Wasana Jayakodi</option>
                            <option value="Radhika Kulathunga">Radhika Kulathunga</option>
                            <option value="Tharaka Yahathugoda">Tharaka Yahathugoda</option>
                            <option value="Uditha Illangasinha">Uditha Illangasinha</option>
                            <option value="Irosha Premathilaka">Irosha Premathilaka</option>
                            <option value="Oshadha Amarasinha">Oshadha Amarasingha</option>
                        </select>
                    </li>                  
                    <li data-filter="sport">
                        <select name="sport" id="s">
                            <option value="1">Cricket</option>
                            <option value="2">Athletics</option>
                            <option value="3">Rugby</option>
                            <option value="4">Football</option>
                            <option value="5">Other</option>
                           
                        </select></li>
                    <li data-filter="injury">  
                        <select name="injury" id="i">
                            <option value="1">Fractured collarbone</option>
                            <option value="2">Tennis elbow</option>
                            <option value="3">Stress fracture</option>
                            <option value="4">Achilles</option>
                            <option value="5">Pulled hamstring</option>
                            <option value="6">Hip pointer stress fractures</option>
                            <option value="7">Shin splints</option>
                            <option value="8">Ankle sprain</option>
                            <option value="9">Piriformis syndrome</option>
                            <option value="10">Low back strain</option>
                            <option value="11">Side stitch</option>
                            <option value="12">Torn ACL</option>
                        </select></li>
                        <input type="submit" value="Submit" />
                </ul>
                
            </form>    
            </div>
        </div>
       
    </div>
    <section class="target_box">
        <!--Old case studies-->
        <div id="div1" class="target">
            <!--Update card-->
            <?php if(!empty($data[0])): ?>
              <?php foreach($data[0] as $item): ?>
                <div class="injury">
                  
                    <div class="description">
                        <div class="col"> Name: <?php echo ucwords($item->username); ?></div>
                        <div class="col"><span> Injury:  <?php echo ucwords($item->injury); ?></span> </div>
                        
                    </div>
               
                    <div class="col"> Name:  <?php echo ucwords($item->full_name); ?></div>
                    <div class="date"><?php echo ucwords($item->datetime); ?></div>
                
                    <div class="btn-grp">
                        
                        <div class="button2">
                           
                            <a href="<?php echo BASEURL;?>/caseStudyController/index/<?php echo ucwords($item->case_id); ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
            <!--Update card-->
               
        </div>
                          
        <!--Current case studies-->
        <div id="div2" class="target">
             <!--Update card-->
           
            <!--Update card-->
            <?php if(!empty($data[1])): ?>
              <?php foreach($data[1] as $item): ?>
                <div class="injury">
                  
                    <div class="description">
                        <div class="col"> Name: <?php echo ucwords($item->username); ?></div>
                        <div class="col"><span> Injury:  <?php echo ucwords($item->injury); ?></span> </div>
                        
                    </div>
               
                    <div class="col"> Name:  <?php echo ucwords($item->full_name); ?></div>
                    <div class="date"><?php echo ucwords($item->datetime); ?></div>
                
                    <div class="btn-grp">
                        
                        <div class="button2">
                           
                            <a href="<?php echo BASEURL;?>/caseStudyController/index/<?php echo ucwords($item->case_id); ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php else: ?>
         
        <?php endif; ?> 
                              
        </div>
    </section>

    <script type="text/javascript">
    jQuery(function(){
        jQuery('.showall').click(function(){
        jQuery('.target').show();
    })});
    jQuery('.single').click(function(){
    jQuery('.target').hide();
    jQuery('#div'+$(this).attr('target')).show();
    });
    var buttons = $('button');
    buttons.click(function() {
    buttons.css('background-color', 'snow');
    $(this).css('background-color', 'rgb(8, 190, 255)');
    });
    </script>

</main>
    
</div>

<!--Forum dropdown menu script-->
            <script>
              /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
              var dropdown = document.getElementsByClassName("dropdown-btn");
              var i;
              
              for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
                });
              }
              </script>
    </body>
</html>