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
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        
      }
      
      th{

    
        color: black;
        text-align: center;
        font-weight: 600;
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

    
  .button-3{
        background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
    
  }
  .top-headings{
      color: #071d56;
      text-align: center;
      font-weight: 800;
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


<div class="home">        
          <div class="sales-boxes">
            <div class="recent-sales">
      <div class="top-headings">
          <p style="color:red; font-size: 30px;">NexGen Holdings(pvt) Ltd<p><br>
              <p>Employee Leave Report</p>
                  <p>2021/01/01 - 2021/10/10</p>
</div>
                  <br>


            <table>
           
	<tbody>
		<tr>
			<th>EmpID</th>
			<td colspan="2">SE1900</td>
		</tr>
		<tr>
			<th>Name</th>
			<td colspan="2">Sunil Perera</td>
		</tr>
		<tr>
			<th>Email</th>
			<td colspan="2">sunil1234@gmail.com</td>
		</tr>
		<tr>
			<th>Contact No.</th>
			<td colspan="2">071234567</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<th>Taken Leaves</th>
			<th>Remaining Leaves</th>
		</tr>
		<tr>
			<td>Annual</td>
			<td>5</td>
			<td>15</td>
		</tr>
		<tr>
			<td>Casual</td>
			<td>2</td>
			<td>8</td>
		</tr>
		<tr>
			<td>Sick</td>
			<td>6</td>
			<td>20</td>
		</tr>
		<tr>
			<td>Maternity</td>
			<td>6</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Vacation</td>
			<td>4</td>
			<td>10</td>
		</tr>
		<tr>
			<td>No-pay</td>
			<td>1</td>
			<td>No-limit</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<th>Total Accepted</th>
			<td colspan="2">15</td>
		</tr>
		<tr>
			<th>Total Rejected</th>
			<td colspan="2">6</td>
		</tr>
		<tr>
			<th>Total Leave Balance</th>
			<td colspan="2">23</td>
		</tr>
	</tbody>
</table>
    
    
    
    
       </div>
           
    </div>
    </div>

    <br>
            
            
            <button class="button-3" onclick="myFunction();">Back</button>
         
       
            <input type="submit" onclick="window.print();" value="Print">

            <br>
            <br>

          

    <script>
        function myFunction() {
          location.replace("index.php?Page=employeeLeaveDetails.php")
        }

    
        </script>


</body>

</html>
    