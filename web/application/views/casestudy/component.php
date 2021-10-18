    <!--header starts-->
    <div class="header_section">
        <div class="header">
            <a href="#">SL ATHLETE CARE</a>
        </div>
        <div class="profile">
            <i class="fas fa-bell"></i>
            <button class="btn1"><i class="fa fa-user-circle" aria-hidden="true"></i> <a href="#">My Profile </a>  </button>
        </div>
    </div>
    <!--header ends-->
    
    <!--details-->
    <div class="details_part">
        <div class="name"> Case Study</div>
        <div class="description">
            <h3>Musculoskeletal Injuries</h3>
            <h4>Injuries and disorders that affects bones, muscles, ligaments, nerves, or tendons</h4>
        </div>
    </div>

    <!--end of details-->

    <!--buttons-->
    <div id="btn-group">
        <button class="btn active" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/';">
            Updates
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/pre';">
            Pre
        </button>
        <button class="btn" onclick="window.location.href='<?php echo BASEURL;?>/caseStudyController/post';">
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