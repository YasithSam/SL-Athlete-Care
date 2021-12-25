
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wilih=device-wilih, initial-scale=1.0">
    <?php linkCSS("assets/css/cs/report.css") ?>
</head>
<body>
    <!--Details Part-->
    <div class="details_part">  
            <h2>Case Study Title : <?php print_r($data[0]->title)?></h2>
            <h3><?php print_r($data[0]->description)?> </h3>
            <h3>Injury : <?php print_r($data[0]->injury)?></h3>
            <h3>Athlete : <?php print_r($data[0]->aname)?> </h3> 
            <h3>Doctor : <?php print_r($data[0]->dname)?></h3>
            <h3>Physiotherapist : <?php print_r($data[13]->full_name)?></h3>
            <h3>Nutritionist : <?php print_r($data[14]->full_name)?></h3>
            <h3>Date : <?php print_r($data[0]->datetime)?></h3>
    </div>
    <hr class="top">
    <!--End Details Part-->

    <!--Pre Section-->
    <section class="pre">
        <h3><u>Pre Case Study</u></h3>
        <ol style="list-style-type:none;">
            <li style="font-size:18px;"><b><u>Medicine</u></b></li>

            <?php if(!empty($data[1])): ?>
                <?php foreach($data[1] as $item): ?>
                <ul>
                    <div class="row"> 
                        <li style="list-style-type:square; margin-right:150px;"><b>Title : </b><?php echo ucwords($item->heading)?></li>
                        <span><li style="list-style-type:none;"><b>Date : </b><?php echo ucwords($item->datetime)?></li></span>
                    </div>
                        <li style="list-style-type:none; margin-left:50px;"><b>Description : </b><?php echo ucwords($item->description)?></li> 
                </ul>

                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 
                <br> 


            <li style="font-size:18px;"><b><u>Attachments</u></b></li>
                <ul > 
                <div class="card-deck">
                    <?php if(!empty($data[2])): ?>
                    <?php foreach($data[2] as $item): ?>

                        <div class="card">
                        <img class="card-img-top" src="../../../web/public/assets/dbimages/<?php echo($item->link)?>" alt="icon"> 
        
                        <div class="card-body">
                    <li><b>Title : </b><?php echo ucwords($item->heading)?></li> 
                    <li style="list-style-type:none;"><b>Description :</b><?php echo ucwords($item->description)?></li> 
                    </div>
                    </div>

                    
                    <?php endforeach;?>
                <?php else: ?>
                  <h1>No data </h1>
                <?php endif; ?>  
                </div>
                </ul>
                <br>
            
            <li style="font-size:18px;"><b><u>Workout</u></b></li>
            <ul>
                <?php if(!empty($data[3])): ?>
                <?php foreach($data[3] as $item): ?>

                    <li style="list-style-type:square;"><b>Workout Title : </b><?php echo ucwords($item->title)?></li> 
                    <li style="list-style-type:none; margin-left: 25px;"><b>Workout Description : </b><?php echo ucwords($item->description)?></li>
                        
                    <ol style="margin-left: 30px;">
                            
                            <?php if(!empty($item->events)): ?>
                                <?php foreach($item->events as $item2): ?>
                                    
                            <li><b>Event Title : </b><?php echo ucwords($item2->title)?></li>
                                <ul>
                                    <li style="list-style-type:none;"><b>Event Description : </b><?php echo ucwords($item2->description)?></li>
                                </ul>

                                <?php endforeach;?>
                                    <?php else: ?>
                                    <h1>No data </h1>
                                <?php endif; ?>    
                    </ol>
                    <br>
                    <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 

                </ul>
                <br>

                
            <li style="font-size:18px;"><b><u>Diet</u></b></li>
            <ul>
                <?php if(!empty($data[4])): ?>
                <?php foreach($data[4] as $item): ?>

                    <li style="list-style-type:square;"><b>Diet Title : </b><?php echo ucwords($item->title)?></li> 
                    <li style="list-style-type:none; margin-left: 25px;"><b>Diet Description : </b><?php echo ucwords($item->description)?></li>
                        
                    <ol style="margin-left: 30px;">
                            
                            <?php if(!empty($item->events)): ?>
                                <?php foreach($item->events as $item2): ?>
                                    
                            <li><b>Event Title : </b><?php echo ucwords($item2->title)?></li>
                                <ul>
                                    <li style="list-style-type:none;"><b>Event Description : </b><?php echo ucwords($item2->descritption)?></li>
                                </ul>

                                <?php endforeach;?>
                                    <?php else: ?>
                                    <h1>No data </h1>
                                <?php endif; ?>    
                    </ol>
                    <br>
                    <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 

                </ul>
                <br>

        </ol>
      
    </section>
    <!--End Pre Section-->

    <!--Post Section-->
    <section class="post">
        <h3><u>Post Case Study</u></h3>
        <ol style="list-style-type:none;">
            <li style="font-size:18px;"><b><u>Advices</u></b></li>
            <?php if(!empty($data[5])): ?>
                <?php foreach($data[5] as $item): ?>
                <ul>
                    <div class="row"> 
                        <li style="list-style-type:square; margin-right: 150px;"><b>Title : </b><?php echo ucwords($item->heading)?></li>
                        <span><li style="list-style-type:none;"><b>Date : </b><?php echo ucwords($item->datetime)?></li></span>
                    </div>
                        <li style="list-style-type:none; margin-left:50px;"><b>Description : </b><?php echo ucwords($item->description)?></li> 
                </ul>

                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 
                <br>
            
            <li style="font-size:18px;"><b><u>Post Attachments</u></b></li>
            <div class="card-deck">
                    <?php if(!empty($data[6])): ?>
                    <?php foreach($data[6] as $item): ?>

                        <div class="card">
                        <img class="card-img-top" src="../../../web/public/assets/dbimages/<?php echo($item->link)?>" alt="icon"> 
        
                        <div class="card-body">
                    <li><b>Title : </b><?php echo ucwords($item->heading)?></li> 
                    <li style="list-style-type:none;"><b>Description :</b><?php echo ucwords($item->description)?></li> 
                    </div>
                    </div>

                    
                    <?php endforeach;?>
                <?php else: ?>
                  <h1>No data </h1>
                <?php endif; ?>  
                </div>
                </ul>
                <br>


            <li style="font-size:18px;"><b><u>Post Workout</u></b></li>
            <ul>
                <?php if(!empty($data[7])): ?>
                <?php foreach($data[7] as $item): ?>

                    <li style="list-style-type:square;"><b>Workout Title : </b><?php echo ucwords($item->title)?></li> 
                    <li style="list-style-type:none; margin-left: 25px;"><b>Workout Description : </b><?php echo ucwords($item->description)?></li>
                        
                    <ol style="margin-left: 30px;">
                            
                            <?php if(!empty($item->events)): ?>
                                <?php foreach($item->events as $item2): ?>
                                    
                            <li><b>Event Title : </b><?php echo ucwords($item2->title)?></li>
                                <ul>
                                    <li style="list-style-type:none;"><b>Event Description : </b><?php echo ucwords($item2->description)?></li>
                                </ul>

                                <?php endforeach;?>
                                    <?php else: ?>
                                    <h1>No data </h1>
                                <?php endif; ?>    
                    </ol>
                    <br>
                    <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 

                </ul>
                <br>


            <li style="font-size:18px;"><b><u>Post Diet</u></b></li>
             <ul>
                <?php if(!empty($data[8])): ?>
                <?php foreach($data[8] as $item): ?>

                    <li style="list-style-type:square;"><b>Diet Title : </b><?php echo ucwords($item->title)?></li> 
                    <li style="list-style-type:none; margin-left: 25px;"><b>Diet Description : </b><?php echo ucwords($item->description)?></li>
                        
                    <ol style="margin-left: 30px;">
                            
                            <?php if(!empty($item->events)): ?>
                                <?php foreach($item->events as $item2): ?>
                                    
                            <li><b>Event Title : </b><?php echo ucwords($item2->title)?></li>
                                <ul>
                                    <li style="list-style-type:none;"><b>Event Description : </b><?php echo ucwords($item2->descritption)?></li>
                                </ul>

                                <?php endforeach;?>
                                    <?php else: ?>
                                    <h1>No data </h1>
                                <?php endif; ?>    
                    </ol>
                    <br>
                    <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 

                </ul>
                <br>

        </ol>
    </section>
    <!--End Post Section-->

    <!--Progress-->
    <section class="progress">
        <h3><u>Progress</u></h3>
        <ol style="list-style-type:none;">
            <li style="font-size:18px;"><b><u>Doctor Feedback</u></b></li>
            <?php if(!empty($data[9])): ?>
                <?php foreach($data[9] as $item): ?>
                <ul>
                    <li style="list-style-type:square;">Feedback : <?php echo ucwords($item->feedback)?></li>  
                    <li style="list-style-type:none; margin-left:20px">Date : <?php echo ucwords($item->datetime)?></li>
                </ul>

                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 
                <br>


                <li style="font-size:18px;"><b><u>Physiotherapist Feedback</u></b></li>
                <?php if(!empty($data[10])): ?>
                    <?php foreach($data[10] as $item): ?>
                <ul>
                    <li style="list-style-type:square;">Feedback : <?php echo ucwords($item->feedback)?></li>  
                    <li style="list-style-type:none; margin-left:20px">Date : <?php echo ucwords($item->datetime)?></li>
                </ul>

                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?> 
                <br>

            
            <li style="font-size:18px;"><b><u>Nutritionist Feedback</u></b></li>
            <?php if(!empty($data[11])): ?>
                    <?php foreach($data[11] as $item): ?>
                <ul>
                    <li style="list-style-type:square;">Feedback : <?php echo ucwords($item->feedback)?></li>  
                    <li style="list-style-type:none; margin-left:20px">Date : <?php echo ucwords($item->datetime)?></li>
                </ul>
                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?>
                <br>

                <li style="font-size:18px;"><b><u>Athlete Feedback</u></b></li>
                <?php if(!empty($data[12])): ?>
                    <?php foreach($data[12] as $item): ?>
                <ul>
                    <li style="list-style-type:square;">Feedback : <?php echo ucwords($item->feedback)?></li>  
                    <li style="list-style-type:none; margin-left:20px">Date : <?php echo ucwords($item->datetime)?></li>
                </ul>
                <?php endforeach;?>
                    <?php else: ?>
                    <h1>No data </h1>
                <?php endif; ?>
                <br>

        </ol>
        
    </section>
    <!--End Progress-->

</body>
</html>

