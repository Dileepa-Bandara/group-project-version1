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
     .required:after {
    content:" *";
    color: red;
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
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

        <!-- <h2 style="color: red ">Apply Leaves</h2> -->
        <?php
    
    ?>
   
    <section>  
    <div class="home">        
    <div class="sales-boxes">
        <div class="recent-sales">
          <div class="heading">Apply Leave</div>
          <br/>
          <form action="/action_page.php">
          <!-- <div class="row">
              <div class="col-25">
                <label for="leave-type">EmpID</label>
              </div>
              <div class="col-75">
                <input type="text" id="empid" name="" required>
                
              </div>
            </div> -->
            <div class="row">
              <div class="col-25">
                <label for="leave-type" class="required">Leave Type</label>
              </div>
              <div class="col-75">
                <select id="leave-type" name="" required>
                    <option value="annual">Annual</option>
                    <option value="casual">Casual</option>
                    <option value="maternity">Maternity</option>
                    <option value="sick">Sick</option>
                    <option value="vacation">Vacation</option>
                    <option value="study">No Pay</option>
                    <option value="study">Other</option>
                  </select>
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="date-from" class="required">From Date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date-from" name="" required>
                </div>
              </div>
              <div class="row">
              <div class="col-25">
                  <label for="date-from" class="required">Day Type</label>
                </div>
                <div class="col-75">
                <input type="radio" id="full" name="" value="full">
                <label for="full">Full Day</label>
                <input type="radio" id="half" name="" value="half">
                <label for="half">Half Day</label>
              </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="date-to" class="required">To Date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date-to" name="" required>
                </div>
              </div>
              <div class="row">
              <div class="col-25">
                  <label for="date-from" class="required">Day Type</label>
                </div>
                <div class="col-75">
                <input type="radio" id="full" name="" value="full">
                <label for="full">Full Day</label>
                <input type="radio" id="half" name="" value="half">
                <label for="half">Half Day</label>
              </div>
              </div>
              <div class="row">
              <div class="col-25">
                <label for="leave-type" class="required">Total Number of Days</label>
              </div>
              <div class="col-75">
                <input type="text" id="empid" name="" required>
                
              </div>
            </div>
            <!-- <div class="row">
            <div class="col-25">
                <label for="position">Position</label>
              </div>
            <div class="col-75">
                <select id="position" name="" required>
                    <option value="annual">Software Engineer</option>
                    <option value="casual">Accountant</option>
                    <option value="maternity">Web Developer</option>
                    <option value="sick">Game Developer</option>
                    <option value="vacation">UX Engineer</option>
                    <option value="study">Graphic Designer</option>
                    <option value="study">Clerk</option>
                  </select>
              </div>
            </div> -->
              <!-- <div class="row">
                <div class="col-25">
                  <label for="leave-type">Add Nominee</label>
                </div>
                <div class="col-75">
                  <select id="leave-type" name="">
                    <option value="annual">None</option>
                      <option value="annual">K. Saman</option>
                      <option value="casual">Amal Perera</option>
                      <option value="maternity">Kasun Fernando</option>
                      <option value="sick">Nimali Randuli</option>
                      <option value="vacation">Mihiri Aloka</option>
                      <option value="study">SUjan Samarasinghe</option>
                    </select>
                </div>
              </div> -->
              <div class="row">
                <div class="col-25">
                  <label for="file">Upload Medical Report (To get continuous leave for more than 3 days)</label>
                </div>
                <div class="col-75">
                  <input type="file" id="myFile" name="filename">
                </div>
                

               
              </div>
              <br>
              
               <b> <label for="subject">Add Nominees (Optional)</label></b>
              <br>
              <div class="row">
              <div class="col-25">
                <label for="nominee">Nominee 1</label>
              </div>
              <div class="col-75">
                <input type="text" id="nominee1" name="" style="width:40%">  
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nominee">Nominee EmpID</label>
              </div>
              <div class="col-75">
                <input type="text" id="nominee1" name="" style="width:40%">  
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nominee">Assigned Task</label>
              </div>
              <div class="col-75">
                <input type="text" id="task" name="" style="width:40%">  
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-25">
                <label for="nominee">Nominee 2</label>
              </div>
              <div class="col-75">
                <input type="text" id="nominee2" name="" style="width:40%">  
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nominee">Nominee EmpID</label>
              </div>
              <div class="col-75">
                <input type="text" id="nominee1" name="" style="width:40%">  
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="nominee">Assigned Task</label>
              </div>
              <div class="col-75">
                <input type="text" id="task" name="" style="width:40%">  
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-25">
                <label for="subject">Special Comments</label>
              </div>
              <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Write any comments here.." style="height:100px"></textarea>
              </div>
            </div>
           
                <button class="button-3" onclick="myFunction()">Cancel</button>
             
            
  
              <input type="submit" value="Apply">
           
            </form>



         

         
          
        </div>
       
      </div>
      </div>

     

      </section>


    </div>
    <script>
        function myFunction() {
          location.replace("index.php?Page=remainingLeave.php")
        }
        </script>

</body>

</html>