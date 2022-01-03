<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <?php linkCSS("assets/css/filter.css") ?>
    <?php linkCSS("assets/css/search.css") ?>

    
</head>
<body>

<div class="main-content">
    <header>
        <div class="logo">
            <img src="../../web/public/assets/img/logo-4040.png" alt="">
            <h3>SL Athlete Care</h3>
        </div>
        
            
                <div class="profile">
                    <i class="fas fa-bell"></i>
                    <button class="btn1" onclick="window.location.href='<?php echo BASEURL;?>/accountController/';"><i class="fa fa-user-circle" aria-hidden="true"></i></button>
                </div>
        
    </header> 
       
    
    <main>
        <div class="filter-search-box">
                <div class="wrapper">
                    <div class="tabs_wrap">
                        <ul class="indicator">
                            <li data-filter="all" class="active"><a href="#">All</a></li>
                            <li data-filter="Cricket - A"><a href="#">Cricket</a></li>
                            <li data-filter="Football - A"><a href="#">Football</a></li>
                            <li data-filter="Rugby - A"><a href="#">Rugby</a></li>
                            <li data-filter="Athletics - A"><a href="#">Athletics</a></li>
                            <li data-filter="Other - A"><a href="#">Others</a></li>
                        </ul>
                    </div>
                </div>
<!--             <div class="search-box">
                    <div class="container1">
                        <div class="search_wrap search_wrap_3">
                            <div class="search_box">
                                <input type="text" class="input" placeholder="search...">
                                <div class="btn btn_common">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>

    

        <div class="container">
            <ul class="items">
            <?php foreach($data as $item1): ?>
                <li data-category="<?php echo($item1->type)?>">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/<?php echo($item1->url)?>" alt="">
                        </div>
                         <h5><?php echo $item1->heading?></h4>
                         <h5 class="date"><?php echo $item1->datetime?></h5>
                         <div class="decision-wrapper">
                            <a href="<?php echo BASEURL;?>/forumController/articleitem/<?php echo $item1->id;?>"><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
            <?php endforeach;?>

            </ul>
        </div>
    </main>
</div>

<div class="footer">

    <h1 class="credit"> copyright@ Sri Lanka Sports medicine Association </h1>
</div> 

</body>
</html>

<script type="text/javascript">
    let indicator = document.querySelector('.indicator').children;
    let main = document.querySelector('.items').children;

    for(let i=0; i<indicator.length; i++)
    {
        indicator[i].onclick = function(){
            for(let x=0; x<indicator.length; x++)
            {
                indicator[x].classList.remove('active');
            }
            this.classList.add('active');
            const displayItems = this.getAttribute('data-filter');
            for(let z=0; z<main.length; z++)
            {
                main[z].style.transform = 'scale(0)';
                setTimeout(()=>{
                    main[z].style.display = 'none';
                }, 500);

                if ((main[z].getAttribute('data-category') == displayItems) || 
                displayItems == 'all')
                {
                    main[z].style.transform = 'scale(1)';
                    setTimeout(()=>{
                    main[z].style.display = 'block';
                    }, 500);
                } 
            }

        }
    }
</script>

