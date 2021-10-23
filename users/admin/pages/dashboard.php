<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/dashboard.css">
    <title>Document</title>

    <style>
       

    </style>
</head>

<body>
    <div class="dashboard-container">

        <div class="mark-attendance">
            <div class="date">DD/MM/YYYY</div>
            <div class="mark-button"><button>View Attendance</button></div>
        </div>
        <div class="dashboard">
            <div class="column-one">
                <div class="dashboard-title">Employee Count </div>
                <div class="dashboard-content"><span>200</span></div>
            </div>
            <div class="column-two">
                <div class="dashboard-title">Departments</div>
                <div class="dashboard-content"><span>5</span></div>
            </div>
            <div class="column-three">
                <div class="dashboard-title">User Count</div>
                <div class="dashboard-content"><span>5</span></div>
            </div>
        </div>
        <div class="news-container">
            <div class="news-title">News</div>
            <div class="headlines">Headline 1</div>
            <div class="headlines">Headline 1</div>
            <div class="headlines">Headline 1</div>
            <button>More</button>
        </div>

    </div>

    

    <!-- <script>
        months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

        days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']

        date_data = new Date()

        //To get date
        current_day = date_data.getDay();
        document.getElementById('day').textContent = days[current_day]

        //To get month date year
        current_month = date_data.getMonth();
        current_date = date_data.getDate();
        current_year = date_data.getFullYear();
        documnet.getElementById('month_date_year').textContent = '${months[current_month]} ${current_date}, ${current_year}'

        //get time
        current_hour = date_data.getHours();
        current_minute = date_data.getMinutes();
        am_pm = ''

        document.getElementById('time').textContent = '${current_hour} : ${current_minute} ${am_pm}'
        

    </script> -->
  

</body>

</html>