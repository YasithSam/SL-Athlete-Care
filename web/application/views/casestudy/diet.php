<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view-more-schedules.css">
    <script src="https://kit.fontawesome.com/4e3a3a38a1.js" crossorigin="anonymous"></script></head>

<body>
<?php include "component.php"?>
<!--cards-->
<div class="container">
    <div class="title">
    <h3>Diet</h3>
    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="images/diet (2).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="images/healthy-food.png" alt="icon"> 
            <div class="card-body"> 
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>

        <div class="card">
            <img class="card-img-top" src="images/diet (3).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>
    </div>

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="images/diet (2).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="images/healthy-food.png" alt="icon"> 
            <div class="card-body"> 
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>

        <div class="card">
            <img class="card-img-top" src="images/diet (3).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>
    </div>

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="images/diet (2).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="images/healthy-food.png" alt="icon"> 
            <div class="card-body"> 
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>

        <div class="card">
            <img class="card-img-top" src="images/diet (3).png" alt="icon"> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content</p>
            </div>

            <div class="endbtn">
                <button class="editbtn"><i class="fa fa-trash"></i>Delete</button>
                <button class="deletebtn" onclick="window.location.href='./forms/update-schedule.html';"><i class="fa fa-edit"></i>Edit</button>
            </div>

        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <div class="mcontainer">
            <div class="top">
                <h3>Delete Diet</h3>
            </div>
            <div class="texticon">
                <i class="fa fa-exclamation-triangle fa-5x" aria-hidden="true" ></i>
                <h3>Are you sure?</h3>
            </div>
        
            <div class="mbtn">
                <button class="mbuttonno">No</button>
        
                <button class="mbutton">Yes</button>
            </div>
        </div>

    </div>

    <script>
       // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btns = document.getElementsByClassName("editbtn");

        // Get the element that closes the modal
        var span = document.getElementsByClassName("mbuttonno")[0];

        // When the user clicks the button, open the modal 
        for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            modal.style.display = "block";
        }
        }

        // When the user clicks on N0, close the modal
        span.onclick = function() {
         modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
        </script>


</div>

</body>
</html>