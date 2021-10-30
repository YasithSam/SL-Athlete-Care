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
                            <li data-filter="Cricket"><a href="#">Cricket</a></li>
                            <li data-filter="Football"><a href="#">Football</a></li>
                            <li data-filter="Athletics"><a href="#">Athletics</a></li>
                            <li data-filter="Others"><a href="#">Others</a></li>
                        </ul>
                    </div>
                </div>
            <div class="search-box">
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
                </div>
        </div>

    

        <div class="container">
            <ul class="items">
                <li data-category="Others">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/question.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Cricket">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/cricket.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Football">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/football.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Athletics">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/athletics.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Others">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/question.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Cricket">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/cricket.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Football">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/football.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Athletics">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/athletics.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Others">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/question.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Cricket">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/cricket.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Football">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/football.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Athletics">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/athletics.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Others">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/question.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Cricket">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/cricket.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Football">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/football.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>
                <li data-category="Athletics">
                    <div class="card">
                        <div class="user-wrapper2">
                            <img src="../../web/public/assets/img/avatar.png"  alt="">
                            <div class="user-name">
                                <h4>Kusal Mendis</h4>
                            </div>
                        </div> 	
                        <div class="article">
                            <img src="../../web/public/assets/img/athletics.jpg" alt="">
                        </div>
                         <h5>Pathways through acute athlete care during training and major tournaments: a multi-national conceptualised process</h4>
                         <h5 class="date">Dec 7, 2017</h5>
                         <div class="decision-wrapper">
                            <a href=""><button class="button3">View</button></a>
                        </div>
                     </div>
                </li>

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

