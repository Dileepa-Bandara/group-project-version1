<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./interfaces/payroll/index.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">

        <div class="top-container" id="top-container">

            <div class="menu__icon" id="menu__icon"><button }><img src="./assets/menu.png" alt=""> </button></div>
            <div class="title">HRM System</div>
            <div class="position">Payroll Manager</div>
            <div class="notification"><a href="#"><img src="./assets/notification.png" alt="Notification"></a></div>
            <div class="logout"><button>Logout</button></div>
        </div>


        <div class="side-container" id="side-container">

            <div class="avatar"><img src="./assets/avatar.png" alt="Avatar"></div>
            <div class="name">Name AAA</div>
            <div class="buttons">
                <button class="dropButton"><a href="index.php?Page=dashboard.php">Dashboard</a></button>
                <button class="dropButton"><a href="index.php?Page=profile.php">Profile</a></button>

                <button class="dropButton"> Leaves</button>
                <div class="drop-content">
                    <a href="index.php?Page=pendingLeave.php">My Leaves</a>
                    <a href="index.php?Page=applyLeave.php">Apply Leaves</a>

                </div>
                <button class="dropButton"><a href="#">Salary</a></button>
                <div class="drop-content">
                    <a href="index.php?Page=calculateSalary.php">Calculate Salary</a>
                    <a href="index.php?Page=salaryTypes.php">Salary Types</a>
                    <a href="index.php?Page=viewSalary.php">Salary Details</a>
                    <a href="index.php?Page=salaryDetails.php">My Salary</a>






                </div>
                <button class="dropButton"><a href="index.php?Page=news.php">News</a></button>
                <button class="dropButton"><a href="index.php?Page=templates.php">Templates</a></button>


                <button class="dropButton"><a href="#">Settings</a></button>

                <button class="dropButton"><a href="index.php?Page=salary.php">Logout</a></button>



            </div>
        </div>

        <div class="content" id="content">

            <?php

            if (!isset($_GET["Page"])) {
                include("pages" . "/" . "dashboard.php");
            }

            if (!empty($_GET["Page"])) {
                $pageName = $_GET["Page"];
                // echo "<h2>page name is $pageName</h2>";
                $pages_directory = "pages";
                // echo "<h2>Directory name is $pages_directory</h2>";


                //get page directory
                $pages_folder = scandir($pages_directory, 1);
                // echo "<pre>";
                // print_r($pages_folder);
                // echo "</pre>";
                // remove unnecessary files
                unset($pages_folder[9], $pages_folder[13], $pages_folder[14]);
                // echo "<pre>";
                // print_r($pages_folder);
                // echo "</pre>";




                if (in_array($pageName, $pages_folder)) {

                    include($pages_directory . "/" . $pageName);
                } else if (!isset($_GET["Page"]) || !empty($_GET["Page"]) == "dashboard") {
                    include($pages_directory . "/" . "dashboard.php");
                } else {
                    echo "</h2>OOPS....NOT FOUND </h2>";
                }
            }







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