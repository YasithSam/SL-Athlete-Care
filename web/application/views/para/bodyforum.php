<div class="forum-injury box">
  <div class="title">Case Study Requests</div>
    <!--Injury card-->
    <?php if(!empty($data[1])): ?>
    <?php foreach($data[1] as $item): ?>

    <div class="injury">
      <img src="../public/assets/img/user.jpg" alt="user" class="user">
      <div class="description">
        <div class="description1">
          <div><p><span> Patient: </span><?php echo($item->athlete);?></p> </div>
          <div><p><span> Doctor: </span> <?php echo($item->doctor);?></p> </div>
        </div>
        <div class="description2">
          <div><p><span> Injury: </span><?php echo($item->title);?></p> </div>
          <div><p><span> Email: </span><?php echo($item->email);?></p> </div>
        </div>
      </div>
      <div class="btn-grp">
        <div class="button2"><a href=""><i class="fas fa-check"></i></a></div>
        <div class="button1"><a href="http://localhost/SL-Athlete-Care/api/v1/emailRejectCasestudy.php?id=<?php echo $item->case_study_id;?>" onclick='return confirm("Reject this Case Study?");'><i class="fas fa-times"></i></a></div>
      </div>
    </div>
    <?php endforeach;?>
    <?php else: ?>
        <h1>No data </h1>
    <?php endif; ?> 
    <!--End of Injury card-->  
</div>