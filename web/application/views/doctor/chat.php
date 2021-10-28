<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'>  
        <?php linkCSS("assets/css/chat.css") ?>
       
    </head>

    <body>
        <input type="checkbox" id="sidebar-toggle">
        <?php include "sidebar.php"?>  

        <div class="main-content">
        <?php include "header.php"?>

            <main>
            <div class="chat">
                <div id="chat-container">
                    <div id="search-container">
                        <input type="text" placeholder="Search" />
                    </div>
                    <div id="conversation-list">
            
                        <div class="conversation active">
                            <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                            <div class="title-text">
                                Kusal Mendis
                            </div>
                            <div class="created-date">
                                Apr 16
                            </div>
                            <div class="conversation-message">
                                This is a message
                            </div>
                        </div>
                                    
                        <div class="conversation">
                            <img src="../../web/public/assets/img/avatar.png" alt="Kusal Mendis" />
                            <div class="title-text">
                                Kusal Mendis
                            </div>
                            <div class="created-date">
                                Apr 16
                            </div>
                            <div class="conversation-message">
                                This is a message
                            </div>
                        </div>
                        
            
            
            
                    </div>
                    
                    <div id="new-message-container">
                        <a href="#">+</a>
                    </div>
                    <div id="chat-title">
                        <span>Kusal Mendis</span>
                        <img src="../../web/public/assets/img/trash.svg" alt="Delete Conversation" />
                    </div>
                    <div id="chat-message-list">
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                                <div class="message-text">What is Lorem Ipsum?</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                                <div class="message-text">What is Lorem Ipsum?</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                                <div class="message-text">What is Lorem Ipsum?</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                                <div class="message-text">What is Lorem Ipsum?</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row you-message">
                            <div class="message-content">
                                <div class="message-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
                        <div class="message-row other-message">
                            <div class="message-content">
                                <img src="../../web/public/assets/img/kusal-mendis.jpg" alt="Kusal Mendis" />
                                <div class="message-text">What is Lorem Ipsum?</div>
                                <div class="message-time">Apr 16</div>
                            </div>
                        </div>
            
            
            
                    </div>
                    <div id="chat-form">
                        <img src="../../web/public/assets/img/attachment.png" alt="Add Attachment" />
                        <input type="text" placeholder="type a message...." />
                    </div>
                </div>

            </div>
            

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