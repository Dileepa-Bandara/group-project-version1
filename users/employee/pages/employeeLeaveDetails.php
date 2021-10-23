<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>Document</title>

    <style>
          
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      
      th{
        background-color: #6880d3;
        color: white;
        text-align: center;
      }
      
      td, th {
        border: 1px solid #6880d3;
        
        padding: 8px;
        font-size: 20px;
      }
     
      
      .recent-sales{
        overflow-x: auto;
      }

      .button-1 {
    background-color: #6880d3; 
    border: none;
    border-radius: 4px;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    /* display: inline-block; */
    font-size: 16px;
    margin: 4px 10px;
    cursor: pointer;
    display: block;

  }
      .search {
  width: 100%;
  position: relative;
  display: flex;
  
}

.searchBox{
  width: 30%;
  border: 3px solid #6880d3;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  font-size: 16px;
}


.searchBut {
  width: 100px;
  height: 40px;
  border: none;
  background: #071d56;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

      @media print {
          body * {
              visibility: hidden;
          }

          .print-container ,.print-container * {
              visibility: visible;
          }
      }
      </style>
     

    
</head>

<body>
    <div class="print-container">
    <div class="dashboard">

        <!-- <h2 style="color: red ">Apply Leaves</h2> -->
        <?php 
      
      ?>
      <section>
      <div class="home">        
      <div class="sales-boxes">
        <div class="recent-sales">
           <div class="heading">Employee Leave Details</div>
           <br>
            <br>
            <form action="users.php" method="GET">
         
            <div class="search">
                <input id="search" name="search" type="text" placeholder="Type here to search"  class="searchBox">
                <input id="submit" type="submit" value="Search" class="searchBut">
          </div>
          </form>
            <br>
            <br>
            <br>
      <table>
      <thead>
            <tr>
              <th rowspan="2">EmpID</th>
              <th rowspan="2">Name</th>
              <th rowspan="2">Position</th>
              <th rowspan="2">Department</th>
              <th colspan="5">Remaining Leaves</th>
              <th rowspan="2">Total Leaves Taken</th>
              <th rowspan="2">View Report</th>
            </tr>
            <tr>
                <td>Annual</td>
                <td>Casual</td>
                <td>Sick</td>
                <td>Maternity</td>
                <td>Vacation</td>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>SE0098</td>
                <td>Saumya Perera</td>
                <td>Software Engineer</td>
                <td>IT</td>
                <td>10</td>
                <td>8</td>
                <td>10</td>
                <td>16</td>
                <td>10</td>
                <td>17</td>
                <td><center><button class="button-1" onclick="myReport()">View</button></center></td>
            </tr>
            <tr>
                <td>SE0098</td>
                <td>Saumya Perera</td>
                <td>Software Engineer</td>
                <td>IT</td>
                <td>10</td>
                <td>8</td>
                <td>10</td>
                <td>16</td>
                <td>10</td>
                <td>17</td>
                <td><center><button class="button-1" onclick="myReport()">View</button></center></td>
            </tr>
            <tr>
                <td>SE0098</td>
                <td>Saumya Perera</td>
                <td>Software Engineer</td>
                <td>IT</td>
                <td>10</td>
                <td>8</td>
                <td>10</td>
                <td>16</td>
                <td>10</td>
                <td>17</td>
                <td><center><button class="button-1" onclick="myReport()">View</button></center></td>
            </tr>
            <tr>
                <td>SE0098</td>
                <td>Saumya Perera</td>
                <td>Software Engineer</td>
                <td>IT</td>
                <td>10</td>
                <td>8</td>
                <td>10</td>
                <td>16</td>
                <td>10</td>
                <td>17</td>
                <td><center><button class="button-1" onclick="myReport()">View</button></center></td>
            </tr>
            </tbody>
    </table>
   <br>

  
       
</div>
</div>

     

</section>

        


    </div>
    </div>
    <br>
    <br>
    <button onclick="window.print();">Print Report</button>

    <script>
        function myReport() {
          location.replace("index.php?Page=leaveReport.php")
        }

    
        </script>


</body>

</html>