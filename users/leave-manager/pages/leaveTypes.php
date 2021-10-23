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

  .button-2{
    background-color: red;
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

 
      </style>
     

    
</head>

<body>
    <div class="dashboard">

        <!-- <h2 style="color: red ">Apply Leaves</h2> -->

      <section>
      <div class="home">        
      <div class="sales-boxes">
        <div class="recent-sales">
   <div class="heading">Leave Types</div>
        <br>
        <input type="submit" value="Add New" onclick="myFunction()"/>
        <br>
        <br>
        <br>
      <table>
      <thead>
            <tr>
              <th>Leave Type</th>
              <th>Amount</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Annual</td>
                <td>30</td>
                <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                <td><center><button class="button-2">Delete</button></center></td> 
            </tr>
            <tr>
                <td>Casual</td>
                <td>20</td>
                <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                <td><center><button class="button-2">Delete</button></center></td>  
            </tr>
            <tr>
                <td>Sick</td>
                <td>15</td>
                <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                <td><center><button class="button-2">Delete</button></center></td>  
            </tr>
            <tr>
                <td>Maternity</td>
                <td>15</td>
                <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                <td><center><button class="button-2">Delete</button></center></td>  
            </tr>
            <tr>
                <td>Vacation</td>
                <td>20</td>
                <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                <td><center><button class="button-2">Delete</button></center></td>   
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
          location.replace("index.php?Page=addleavetype.php")
        }

        function myUpdate() {
            location.replace("index.php?Page=updateleavetype.php")
        }
        </script>

</body>

</html>