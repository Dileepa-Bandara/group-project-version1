<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/news.css">

    <title>Document</title>
</head>

<body>
    <div class="news">
        <h3>NEWS</h3>
        <hr>
        <div class="news-container">
            <div class="news-date">February,01,2021</div>
            <div class="news-headline">News Headline 1--------------------------------</div>
            <div class="news-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis maiores repudiandae, nostrum eius dignissimos, sapiente nihil est natus aut deserunt itaque, similique consequatur dolores non animi. Itaque at obcaecati adipisci velit sit maxime officiis illum a, dicta ipsum, consequatur tenetur.</div>

        </div>
    </div>


    <form action="" id="forget-form" method="post">
        <label for="">Email</label>
        <input type="text" name="femail" id="femail" placeholder="Email">
        <input type="submit" value="SEND EMAIL" id="forget-button">



    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">

    </script>
    <script>
        $(document).ready(function() {
            //Ajax request
            //register form validation
            $("#forget-button").click(function(e) {
                if ($("#forget-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#forget-button").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "../../assets/forget.php",
                        method: "post",
                        //grab data from form
                        data: $("#forget-form").serialize() + "&action=forgetPass",
                        success: function(response) {
                            console.log(response);

                        }

                    })
                }


            })
        });
    </script>

</body>

</html>