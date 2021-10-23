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
      tr:hover td {
        background: #dddce2;
      }
     
      
      .recent-sales{
        overflow-x: auto;
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
        <?php 
      
      ?>
      <section>
      <div class="home">        
      <div class="sales-boxes">
        <div class="recent-sales">
   <div class="heading">My Requested Leaves</div>
        <br>
        <br>
      <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
      <thead>
            <tr>
              <th>Emp ID</th>
              <th>Applied Date</th>
              <th>Leave Type</th>
              <th>Duration</th>
              <th>Status</th>
              <!-- <th>Nominees</th> -->
              <th>Cancel Request</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>SE1900</td>
             <td>2020 Jan 15</td>
             <td>Sick</td>
             <td>2 days</td>
             <td style="color:#42FF33; font-weight:700">Pending</td>
             <!-- <td>Kamal Perera</td> -->
             <td><center><button class="button-2">Cancel</button></center></td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>2020 Jan 06</td>
             <td>Sick</td>
             <td>1 day</td>
             <td style="color:#1432F3; font-weight:700">Approved</td>
             <!-- <td>Nimal Perera</td> -->
             <td><center><button class="button-2">Cannot Cancel</button></center></td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>2019 Dec 26</td>
             <td>Annual</td>
             <td>1 day</td>
             <td style="color:#1432F3; font-weight:700">Approved</td>
             <!-- <td>None</td> -->
             <td><center><button class="button-2">Cannot Cancel</button></center></td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>2019 Dec 26</td>
             <td>Annual</td>
             <td>1 day</td>
             <td style="color:red; font-weight:700">Rejected</td>
             <!-- <td>None</td> -->
             <td><center><button class="button-2">Cannot Cancel</button></center></td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>2019 Dec 26</td>
             <td>Annual</td>
             <td>1 day</td>
             <td style="color:#1432F3; font-weight:700">Approved</td>
             <!-- <td>None</td> -->
             <td><center><button class="button-2">Cannot Cancel</button></center></td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>2019 Dec 26</td>
             <td>Annual</td>
             <td>1 day</td>
             <td style="color:red; font-weight:700">Rejected</td>
             <!-- <td>None</td> -->
             <td><center><button class="button-2">Cannot Cancel</button></center></td> 
            </tr>
            </tbody>
    </table>




   </div>
       
</div>
</div>

     

</section>

        


    </div>

</body>

</html>