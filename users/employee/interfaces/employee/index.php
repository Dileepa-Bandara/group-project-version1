<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./interfaces/employee/index.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">

        <?php

        require_once "./interfaces/employee/menu.php";
        ?>

        <div class="content" id="content">

            <?php
            require_once "./interfaces/employee/pageNav.php";

            ?>
        </div>
    </div>

    <script>
        //we should stop page refreshing after button click
        var menuButton = document.getElementById("menu__icon");
        var width = document.getElementById("side-container");
        var contentMargin = document.getElementById("content");
        var dropButton = document.getElementsByClassName("dropButton")
        var topContainer = document.getElementById("top-container");
        menuButton.addEventListener("click", function() {


            if (width.style.width === "25%") {
                width.style.width = 0;
                width.style.padding = 0;
                contentMargin.style.marginLeft = 0;
                contentMargin.style.width = "100%";
                width.style.opacity = 0;

            } else {
                width.style.width = "25%";
                contentMargin.style.marginLeft = "25%";
                width.style.opacity = 10;
                width.style.padding = "1em"
                contentMargin.style.width = "75%";



            }
        });


        var i = 0;
        for (i = 0; i < dropButton.length; i++) {
            dropButton[i].addEventListener("click", function(e) {

                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    prevent.default();
                } else {

                    dropdownContent.style.display = "block";

                }
            });
        }
    </script>
</body>

</html>