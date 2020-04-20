<?php
/*
 * dbregister.php
 * Last updated: 10/19/2017
 * Registration form for user that inserts record into the database table
 */

if(isset($_POST['submit'])){
    
    //establishes db connection
    include_once 'C:\xampp\htdocs\CompUnite\dbConn\dbConn.php';
    
    //Filters post input
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $zip = filter_input(INPUT_POST, 'zip');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');    
  
    //If post input is null, user is redirector to register page
    if(empty($firstName) || empty($lastName) || empty($email) || empty($username) || empty($password)) {
        header("Location: ../register.php?register=empty");
        exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../index.php?invalidEmail=true");
            exit();
        } else {
            $sql = "SELECT COUNT(username) AS number FROM users WHERE username=:username";
            $statement = $conn->prepare($sql);
              
            $statement->bindValue(':username', $username);
              
            $statement->execute();
            
            //Returns an associative array for any results from the query
            $row = $statement ->fetch(PDO::FETCH_ASSOC);
                
            //If there are any results, the user exists already, and user is redirected to index.php with an error
            if ($row['number'] > 0){
                header("Location: ../index.php?userExist=true");
                exit();
                //Otherwise, user's information is inserted into the database
            } else {
                $sql ="INSERT INTO users (firstName, lastName, email, zipCode, username, password) VALUES (:firstName, :lastName, :email, :zipCode, :username, :password)";
                $statement = $conn->prepare($sql);
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                    
                $statement->bindValue(':firstName', $firstName);
                $statement->bindValue(':lastName', $lastName);
                $statement->bindValue(':email', $email);
                $statement->bindValue(':zipCode', $zip);
                $statement->bindValue(':username', $username);
                $statement->bindValue(':password', $hashedPassword);
                    
                $result = $statement->execute();
                    
                if ($result){
                    header("Location: ../index.php?register=true");
                    exit();
                } else {
                    header("Location: ../index.php?dbFail=true");
                    exit();
                } 
            }
        }
    } 
    
} else {
    header("Location: ../register.php");
    exit();
}


