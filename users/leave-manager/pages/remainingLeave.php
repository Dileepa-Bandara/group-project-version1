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
      input[type=submit] {
    background-color: #071d56;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
      }

      
      /* tr:nth-child(even) {
        background-color: #d6f1a5;
      } */

      /* @media screen and (max-width: 600px) {
        thead{
          display: none;
        }
        td{
          display: block;
        }
        td:first-child{
          background-color: blue;
          color: black;
          text-align: center;
        }
        td:nth-child(1)::before{
          content: "Leave Type : ";
        }
        td:nth-child(2)::before{
          content: "Remaining Leaves : ";
        }
        td:nth-child(3)::before{
          content: "Taken Leaves : ";
        }
        td:nth-child(4)::before{
          content: "Total Leaves : ";
        }
        
        
      } */
      </style>
     

    
</head>

<body>
    <div class="dashboard">

        <!-- <h2 style="color: red ">Apply Leaves</h2> -->
        <?php 
      
      ?>
      <section>
      <div class="home">        
      <div class="sales-boxes">
        <div class="recent-sales">
           <div class="heading">Remaining Leaves For Year 20YY</div>
        <br>
        <input type="submit" value="Apply Leave" onclick="myFunction()"/>
    
        <br>
        <br>
        <br>

      <table>
      <thead>
            <tr>
              <th>Leave Type</th>
              <th>Remaining Leaves</th>
              <th>Taken Leaves</th>
              <th>Total Leaves</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>Annual</td>
             <td>10</td>
             <td>20</td>
             <td>30</td>
            </tr>
            <tr>
              <td>Casual</td>
              <td>10</td>
              <td>20</td>
              <td>30</td>
            </tr>
            <tr>
              <td>Maternity</td>
              <td>10</td>
              <td>20</td>
              <td>30</td>
            </tr>
            <tr>
              <td>Sick</td>
              <td>10</td>
              <td>20</td>
              <td>30</td>
            </tr>
            <tr>
              <td>Vacation</td>
              <td>10</td>
              <td>20</td>
              <td>30</td>
            </tr>
           
            </tbody>
    </table>
   
   



   </div>
       
</div>
</div>

     

</section>

        


    </div>

    <script>
        function myFunction() {
          location.replace("index.php?Page=applyLeave.php")
        }

    
        </script>


</body>

</html>