<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>Document</title>

    <style>
        /* Float four columns side by side */
.ushi {
  float: left;
  width: 50%;
  height: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.dini {margin: 0 -5px;}

/* Clear floats after the columns */
.dini:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 800px) {
  .ushi{
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #Fbffff;
  margin-bottom: 35px;
  margin-left: 10px;
}

input[type=button] {
    background-color: #6880d3; 
    /* border-radius: 5%; */
    color: white;
    padding: 10px 20px;
    text-align: center;
    border: none;
    border-radius: 4px;
    /* display: inline-block; */
    font-size: 16px;
    cursor: pointer;
    /* margin: 4px 10px; */
  
   
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
  background: #071d56;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}




      </style>
</head>

<body>
    <div class="dashboard">

        
        <?php
    
    ?>

    <div class="home">        
    <div class="sales-boxes">
        <div class="recent-sales">
          <div class="heading">Document Templates</div>
          <br/>
          
          <input type="submit" value="Add New Document" onclick="myFunction()"/>
          <br/>
          <br/>
          <br>
          <form action="users.php" method="GET">
         
            <div class="search">
                <input id="search" name="search" type="text" placeholder="Type here to search"  class="searchBox">
                <input id="submit" type="submit" value="Search" class="searchBut">
          </div>
          </form>
         
          <br>
          <br>
          
          
          <div class="dini">
          <div class="ushi">
          <div class="card">
              <h1>Employee Handbook</h1><br>
                <p>An employee handbook is a document that communicates your company's mission, policies and expectations</p><br>
              <input type="button" class="down" value="Download">
          </div>
        </div>
        <div class="ushi">
          <div class="card">
              <h1>Job Interview Letter</h1><br>
              <p>An interview call letter is a written invitation sent to a candidate, applicant, or a job aspirant inviting him/her for a “face-to-face” interview at the ...</p><br>
              <input type="button" value="Download">       
          </div>
        </div>
        <div class="ushi">
          <div class="card">
              <h1>Job Confirmation Letter</h1><br>
              <p>Job confirmation letter is a professional documented form which states the employment confirmation.</p><br>
              <input type="button" value="Download">       
          </div>
        </div> 
        <div class="ushi">
          <div class="card">
              <h1>Job Descriptions</h1><br>
              <p>A job description or JD is a written narrative that describes the general tasks, or other related duties, and responsibilities of a position.</p><br>
              <input type="button" value="Download">       
          </div>
        </div> 
        <div class="ushi">
          <div class="card">
              <h1>Job Promotion Letter</h1><br>
              <p>A letter of promotion is a form of communication that lets an employee know that they have been promoted to a new position within the same company.</p><br>
              <input type="button" value="Download">       
          </div>
        </div> 
       
</div> 
    </div>
         

         

         
          
        
       
      </div>
      </div>
</div>

     



    </div>
    <script>
         function myFunction() {
          location.replace("index.php?Page=addTemp.php")
        }

        </script>
       
</body>

</html>