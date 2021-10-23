<?php 
include "../../assets/config.php";
include "pages/addnewuser-action.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
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
      </style>
   </head>
<body>
   

    <body>
        <div class="dashboard">
    
            
    
          <section>
          <div class="home">        
          <div class="sales-boxes">
            <div class="recent-sales">
       <div class="heading">System User Roles</div>
            <br>
            <input type="submit" value="Add New User" onclick="myFunction()"/>
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
            
          
            <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
                <thead>
                  
                  <tr>
                    <th>EmpID</th>
                    <th>Name</th>
                    <th>User Role</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Address</th>
                    <th>Edit Details</th>
                    <th>Delete User Role</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr></tr>
                  <tr>
                    <td>AC1234</td>
                    <td>Nimal Perera</td>
                    <td>Admin</td>
                    <td>HR</td>
                    <td>nimali@gmail.com</td>
                    <td>0778765432</td>
                    <td>No 23/A, Temple Rd, Colombo</td>
                    <td> <center><button class="button-1" onclick="myUpdate()">Update</button></center></td>  
                    <td><center><button class="button-2">Delete</button></center></td>  
  
                  </tr>
                  <tr>
                    <td>AC1234</td>
                    <td>Nimal Perera</td>
                    <td>Admin</td>
                    <td>HR</td>
                    <td>nimali@gmail.com</td>
                    <td>0778765432</td>
                    <td>No 23/A, Temple Rd, Colombo</td>
                    <td><center><button class="button-1" onclick="myUpdate()">Update</button></center></td>
                    <td><center><button class="button-2">Delete</button></center></td>  
                  </tr>
                  <tr>
                    <td>AC1234</td>
                    <td>Nimal Perera</td>
                    <td>Admin</td>
                    <td>HR</td>
                    <td>nimali@gmail.com</td>
                    <td>0778765432</td>
                    <td>No 23/A, Temple Rd, Colombo</td>
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
          location.replace("index.php?Page=addUsers.php")
        }

        function myUpdate() {
          location.replace("index.php?Page=updateUser.php")
        }

    
        </script>
        
    
</body>
</html>