

<?php
// session_start();
// require_once "./auth.php";
//create object of a auth
// $user = new Auth();



// if (isset($_POST['login'])) {


//     if (isset($_POST["l-username"]) && isset($_POST["l-password"])) {

//         $username = $user->checkInput($_POST["l-username"]);
//         $password = $user->checkInput($_POST["l-password"]);

//         $registeredEmployee = $user->loginEmployee($username);
//         $registeredManager = $user->loginManager($username);

// print_r($username);
// print_r($password);

// print_r($registeredUser);
// if ($registeredEmployee != null || $registeredManager != null) {
//     if (password_verify($password, $registeredEmployee["password"])) {
//         echo "login";
//         echo $registeredEmployee["position"];


// if ($registeredEmployee["position"] == "employee") {
//     $_SESSION['username'] = $registeredEmployee['username'];
//     header("Location:../users/employee/");
// }
//             } else {
//                 echo $user->showMessages("Warning", "Error in login");
//             }
//             if (password_verify($password, $registeredManager["password"])) {
//                 echo "login";
//                 echo $registeredManager["position"];

//                 if ($registeredManager["position"] == "hr-manager") {
//                     $_SESSION['username'] = $registeredManager['username'];
//                     header("Location:../users/hr-manager/");
//                 }

//                 if ($registeredManager["position"] == "leave-manager") {
//                     $_SESSION['username'] = $registeredManager['username'];
//                     header("Location:../users/leave-manager/");
//                 }
//                 if ($registeredManager["position"] == "payroll-manager") {
//                     $_SESSION['username'] = $registeredManager['username'];
//                     header("Location:../users/payroll-manager/");
//                 }
//                 if ($registeredManager["position"] == "admin") {
//                     $_SESSION['username'] = $registeredManager['username'];
//                     header("Location:../users/admin/");
//                 }
//                 if ($registeredManager["position"] == "recruitment-manager") {
//                     $_SESSION['username'] = $registeredManager['username'];
//                     header("Location:../users/leave-manager/");
//                 }
//             } else {
//                 echo $user->showMessages("Warning", "Error in login");
//             }
//         } else {
//             echo $user->showMessages("Warning", "User not registered");
//         }
//     }
// }
session_start();
