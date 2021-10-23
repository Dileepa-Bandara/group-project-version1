 <div class="top-container" id="top-container">

     <div class="menu__icon" id="menu__icon"><button }><img src="./assets/menu.png" alt=""> </button></div>
     <div class="title">NexGen HRM</div>
     <div class="position">Employee</div>
     <div class="notification"><a href="#"><img src="./assets/notification.png" alt="Notification"></a></div>
     <div class="logout"><a href="../../assets/logout.php">logout</a></div>
 </div>


 <div class="side-container" id="side-container">

     <div class="avatar"><img src="./assets/avatar.png" alt="Avatar"></div>
     <div class="name">HI! <?php echo $_SESSION['username']; ?></div>
     <div class="buttons">
         <button class="dropButton"><a href="index.php?Page=dashboard.php">Dashboard</a></button>
         <button class="dropButton"><a href="index.php?Page=profile.php">Profile</a></button>

         <button class="dropButton"> Leaves</button>
         <div class="drop-content">
             <a href="index.php?Page=employeeLeaveDetails.php">My Leaves</a>
             <a href="index.php?Page=applyLeave.php">Apply Leaves</a>

         </div>
         <button class="dropButton"><a href="index.php?Page=salaryDetails.php">Salary</a></button>
         <button class="dropButton"><a href="index.php?Page=training.php">Training Schedule</a></button>
         <button class="dropButton"><a href="index.php?Page=news.php">News</a></button>
         <button class="dropButton"><a href="index.php?Page=templates.php">Templates</a></button>

         <button class="dropButton"><a href="#">Settings</a></button>

         <button class="dropButton"><a href="index.php?Page=salary.php">Logout</a></button>



     </div>
 </div>