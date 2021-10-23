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
        //remove unnecessary files
        unset($pages_folder[7], $pages_folder[9], $pages_folder[10]);
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