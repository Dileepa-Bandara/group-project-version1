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
  .button-3{
        background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    
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
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

    

     
      /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
   <div class="heading">Employee Leave Requests</div>
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
        
      <table>
      <thead>
            <tr>
              <th>Emp ID</th>
              <th>Emp Name</th>
              <th>Department</th>
              <th>Leave Type</th>
              <th>From Date</th>
              <th>Full/Half Day</th>
              <!-- <th>Nominees</th>
              <th>Medical Report</th> -->
              <th>More Details</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>IT</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>  
             <td style="color:#42FF33; font-weight:700">Pending</td>
            </tr>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>Finance</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>
             <td style="color:#42FF33; font-weight:700">Pending</td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>Finance</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>
             <td style="color:#1432F3; font-weight:700">Approved</td> 
            </tr>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>Finance</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>
             <td style="color:#1432F3; font-weight:700">Approved</td>
            </tr>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>Finance</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>
             <td style="color:red; font-weight:700">Rejected</td>
            </tr>
            <tr>
             <td>SE1900</td>
             <td>Sriya Perera</td>
             <td>Finance</td>
             <td>Sick</td>
             <td>2020 Jan 15</td>
             <td>Full</td>
             <!-- <td>Kamal Perera</td>
             <td></td> -->
             <td><center><button class="button-1" id="view">View</button></center></td>
             <td style="color:red; font-weight:700">Rejected</td>
            </tr>
            </tbody>
    </table>




   </div>
       
</div>
</div>

     

</section>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Requesting a Leave</h2><br>
    <p>EmpID : SE1900</p><br>
    <p>Emp Name : Sriya Perera</p><br>
    <p>Department : IT</p><br>
    <p>Leave Type : Sick</p><br>
    <p>From Date : 2020 Jan 15</p><br>
    <p>Full/Half Day : Full</p><br>
    <p>To Date : 2020 Jan 20</p><br>
    <p>Full/Half Day : Full</p><br>
    <p>Medical Report : mymedical.pdf</p><br>
    <p>Position : Software Engineer</p><br>
    <p>Nominee 1 : Kamal Perera</p><br>
    <p>Task Assigned : Overview the Delta Project</p><br>
    <p>Nominee 2 : Priya Silva</p><br>
    <p>Task Assigned : Overview the Delta Project</p><br>
    <p>Special Comments : I've been feeling sick for 2 days. So I decided to request a leave...</p><br>
   
    <button class="button-3" onclick="myFunction()">Reject</button>
                
    
    <input type="submit" value="Approve">
    
    <!-- <button onclick="myFunction()">Reject</button> -->

 

</div>



        


    </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("view");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }


        function myFunction() {
          location.replace("index.php?Page=rejectComment.php")
        }

       
      </script>

</body>

</html>