<?php
require_once "./config.php";





class Auth extends Database
{
    //register new employee

    // public function registerAuthEmployee($username, $password, $position)
    // {
    //     $sql = "INSERT INTO employee(username,password,position,isDelete) VALUES (:username,:pass,:position,:isDelete)";
    //     $statement = $this->conn->prepare($sql);
    //     $statement->execute(['username' => $username, 'pass' => $password, 'position' => $position, 'isDelete' => 1]);
    //     return true;
    // }

    //check user already registered employee
    // public function userExistEmployee($username)
    // {
    //     $sql = "SELECT username FROM employee WHERE username = :username";
    //     $statement = $this->conn->prepare($sql);
    //     $statement->execute(['username' => $username]);
    //     $result =      $statement->fetch(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    //login user
    public function loginEmployee($username)
    {
        $sql = "SELECT * FROM employee WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    //Manager Registration quaries
    public function registerAuthManager($name, $gender, $userRole, $department, $mobile, $address, $email, $hpass)
    {
        $sql = "INSERT INTO managerreg(name, gender, userRole, department, mobile, address, email, password,isDelete) VALUES (:name, :gender, :userRole, :department, :mobile, :address, :email, :password,:isDelete)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['name' => $name, 'gender' => $gender, 'userRole' => $userRole, 'department' => $department, 'mobile' => $mobile, 'address' => $address, 'email' => $email, 'password' => $hpass, 'isDelete' => 1]);
        return true;
    }

    //check user already registered employee
    public function userExistManager($email)
    {
        $sql = "SELECT email FROM managerreg WHERE email = :email";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['email' => $email]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //login user
    public function loginManager($username)
    {
        $sql = "SELECT * FROM managers WHERE username = :username";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['username' => $username]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
