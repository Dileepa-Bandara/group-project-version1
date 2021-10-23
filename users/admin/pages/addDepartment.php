<?php
include "../../assets/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./pages/css/style.css">
  <title>Document</title>

  <style>
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 6px;
      border: 1px solid #6880d3;
      border-radius: 4px;
      resize: vertical;


    }

    input[type=submit] {
      background-color: #071d56;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;

    }

    .button-3 {
      background-color: red;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: left;

    }

    .required:after {
      content: " *";
      color: red;
    }


    label {
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

    /*Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    @media screen and (max-width: 1000px) {

      .col-25,
      .col-75,
      input[type=submit],
      .button-3 {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>



  <div class="home">
    <div class="sales-boxes">
      <div class="recent-sales">
        <div class="heading">Add New Department</div>
        <br />
        <form action="pages/connect.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="" class="required">Department ID</label>
            </div>
            <div class="col-75">
              <input type="text" id="departmentId" name="departmentId" required>

            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="" class="required">Department Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="departmentName" name="departmentName" required>

            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="">Description</label>
            </div>
            <div class="col-75">
              <textarea id="description" name="description" style="height:100px"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="" class="required">Location</label>
            </div>
            <div class="col-75">
              <input type="text" id="location" name="location" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="" class="required">Created By</label>
            </div>
            <div class="col-75">
              <input type="text" id="createdBy" name="createdBy" required>

            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="" class="required">Date</label>
            </div>
            <div class="col-75">
              <input type="date" id="date" name="createdDate" required>
            </div>
          </div>


          <br>

          <b> <label for="">Department Manager Details</label></b>
          <br>
          <div class="row">
            <div class="col-25">
              <label for="" class="required">EmpID</label>
            </div>
            <div class="col-75">
              <input type="text" id="depManagerEmpId" name="depManagerEmpId" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="" class="required">Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="depManagerName" name="depManagerName" required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="" class="required">Contact Number</label>
            </div>
            <div class="col-75">
              <input type="text" id="depManagerContact" name="depManagerContact" required>
            </div>
          </div>


          <br>

          <button class="button-3" onclick="myFunction()">Back</button>

          <input type="submit" value="Save" id="addnewdepartment" name="addnewdepartment">

        </form>







      </div>

    </div>
  </div>






  <script>
    function myFunction() {
      location.replace("index.php?Page=departments.php")
    }
  </script>
</body>

</html>