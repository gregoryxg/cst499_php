<?php
/*
 * dblogin.php
 * Last updated: 10/19/2017
 * Establishes user login session, provided the correct credentials are used
 */
session_start(); 

if (isset($_POST['signin'])){
    
    //Establishes DB connection
    include 'C:\xampp\htdocs\CompUnite\dbConn\dbConn.php';
    
    //Filters input from user login fields
    $user = filter_input(INPUT_POST, 'user');
    $password = filter_input(INPUT_POST, 'password');
    
    //If no login information is passed from the form, the user is returned to the index page
    //Otherwise, user is logged in if info is correct, and session variables are set
    if (empty($user) || empty($password)){
        header("Location: ../index.php?login=empty");
        exit();
    } else { 
        $sql = "SELECT * FROM users WHERE username=:user OR email=:user";
        $statement = $conn->prepare($sql);
                
        $statement->bindValue(':user', $user);   
        $statement->execute();
         
        $row = $statement ->fetch(PDO::FETCH_ASSOC);
        
        //If login information is incorrect, user is redirected to index.php with an error message
        if ($row === false){
            header("Location: ../index.php?login=error");
            exit();
        } else {
            $checkPassword = password_verify($password, $row['password']);
            if (!$checkPassword){
                header("Location: ../index.php?login=error");
                exit();
            } else {
                $_SESSION['id'] = $row['id'];
                $_SESSION['zip'] = $row['zipCode'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username']; 
                header("Location: ../index.php?login=success");
                exit();
            }
        }
                
    }
//If post is not set, user is redirected to index.php with an errro    
} else {
    header("Location: ../index.php?login=error");
    exit();
}
