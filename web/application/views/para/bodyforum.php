<div class="forum-injury box">

         
          <div class="title">Case Study Requests</div>
          <!--Injury card-->
          <?php if(!empty($data[1])): ?>

             <?php foreach($data[1] as $item): ?>
                  <div class="injury">
                    <i class="fas fa-user user"></i>
                    <div class="des1"><p>Name: </p><p>Injury: </p></div>
                    <div class="des2"><p><?php echo ucwords($item->full_name); ?></p><p><?php echo ucwords($item->injury); ?></p></div>
                    <div class="des3"></div>
                    <div class="des1-des11"><p>Condition: </p><p>Visibility:</p></div>
                    <?php $x=($item->doctor_id==0) ? "public" :"private"; ?>
                    <div class="des2"><p><?php echo ucwords($item->con); ?></p> <p><?php echo $x?></p></div>
                    <div class="button">
                      <ul style="list-style: none;">
                      <li class="l1" style="padding-bottom: 5px;">Date: 01/02/2022</li>
                      <li class="l2"><a href="<?php echo BASEURL;?>/forumController/item/<?php echo $item->id; ?>">View</a></li>
                      </ul>
                    </div>
                
                </div>
            <?php endforeach;?>
        <?php else: ?>
          <h1>No data </h1>
        <?php endif; ?> 
    

          
</div>