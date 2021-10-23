<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>Document</title>

    <style>
         input[type=text], select, textarea {
        width: 100%;
        padding: 6px;
        border: 1px solid #6880d3;
        border-radius: 4px;
        resize: vertical;
        
    }
    label{
        padding: 12px 12px 12px 0;
        display: inline-block;
        

    }

    .col-25 {
       float: left;
       width: 25%;
       margin-top: 6px;

    }

    .col-75 {
       float: left;
       width: 75%;
       margin-top: 6px;
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
      .button-3{
        background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    
  }

/* Clear floats after the columns */
    .row:after {
       content: "";
       display: table;
       clear: both;
    }
    @media screen and (max-width: 1000px) {
       .col-25, .col-75, input[type=submit], .button-3 {
           width: 100%;
           margin-top: 0;
        }
    }

      </style>
</head>

<body>
    <div class="dashboard">

        
        <?php
    
    ?>
   
    <section>  
    <div class="home">        
    <div class="sales-boxes">
        <div class="recent-sales">
          <div class="heading">Update User Role</div>
          <br/>
          <form action="/action_page.php">
          <div class="row">
              <div class="col-25">
                <label for="empid" class="required">EmpID</label>
              </div>
              <div class="col-75">
                <input type="text" id="empid" name="empId" required>
                
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="name" class="required">Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="name" name="name" required>
                  
                </div>
              </div>
              <div class="row">
              <div class="col-25">
                  <label for="" class="required">Gender</label>
                </div>
                <div class="col-75">
                <input type="radio" id="" name="gender" value="m">
                <label for="full">Male</label>
                <input type="radio" id="" name="gender" value="f">
                <label for="half">Female</label>
                <input type="radio" id="" name="gender" value="o">
                <label for="half">Other</label>
              </div>
              </div>
              <div class="row">
              <div class="col-25">
              <label for="" class="required">UserRole</label>
              
              </div>  
              <div class="col-75">
              <select name="userRole" id="userRole">
                 <option value="hr-manager">HR Manager</option>
                 <option value="employee">Employee</option>
                 <option value="leave-manager">Leave Manager</option>
                 <option value="recruitment-manager">Recruitment Manager</option>
                 <option value="payroll-manager">Payroll-Manager</option>
                <option value="admin">Admin</option>
             </select>
             </div>
              </div>
              <!-- <div class="row">
                <div class="col-25">
                  <label for="" class="required">User Role</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="userRole" required>
                  
                </div>
              </div>   -->
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Department</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="department" required>
                  
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Email Address</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="email" required>
                  
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Mobile No.</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="mobile" required>
                  
                </div>
              </div> 
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Address</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="address" required>
                  
                </div>
              </div>
              <br>
              <h1>Credential Details</h1>
              <br>
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Username</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="username" required>
                  
                </div>
              </div>  
              <div class="row">
                <div class="col-25">
                  <label for="" class="required">Password</label>
                </div>
                <div class="col-75">
                  <input type="text" id="" name="password" required>
                  
                </div>
              </div>  
              <br> 
            
            
                <button class="button-3" onclick="myFunction()">Back</button>
             
           
              <input type="submit" value="Update">
           
            </form>



         

         
          
        </div>
       
      </div>
      </div>

     

      </section>


    </div>
    <script>
        function myFunction() {
          location.replace("index.php?Page=userRole.php")
        }
        </script>
</body>

</html>