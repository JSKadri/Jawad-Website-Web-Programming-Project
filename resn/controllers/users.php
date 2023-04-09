<?php
    include(ROOT_PATH . "/database/db.php");
    include(ROOT_PATH . "/assist/validateUser.php");

    $errors = array(); // Array to store the errors
    $username = '';
    $email = '';
    $password = '';
    $password2 = '';
    $table = 'users';

    /* Permissions
        1 -> Anonymous
        2 -> Customer
        3 -> Admin
    */

    function loginUser($user) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['permission'] = $user['permission'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['message'] = "You are now logged in " . ucfirst($user['username']) . "!";
        $_SESSION['type'] = "success";
        $_SESSION['logged_in'] = true;

        if($user['permission'] == 3) {    // If the user is a Admin
            //header('location: ' . BASE_URL . '/admin/dashboard.php');    // Redirect to the admin dashboard (fake page)
            // For now the user will be redirected to the home page
            header('location: ' . BASE_URL . '/index.php'); // Redirect to the home page
        } else {
            header('location: ' . BASE_URL . '/index.php'); // Redirect to the home page
        }
        exit(); // Exit the script
    }

    if (isset($_POST['register-btn'])) {    // If the register button is clicked

        /* This is a sanity check. The front end does cover error however if it fails to catch
            We can stop it here */
        $errors = validateRegisterUser($_POST);   // Validate the user

        if(count($errors) === 0) {    // If there are no errors; create the account
            // Remove(unset) the register button and confirm password from the $_POST array
            unset($_POST['register-btn'], $_POST['password2']);

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password (Secure-it)
            $_POST['permission'] = 2; // By default user a customer

            /* Lower case the username */
            $_POST['username'] = strtolower($_POST['username']);
            
            $user_id = create($table, $_POST); // Insert the user data into the database
            $user = selectOne($table, ['id' => $user_id]); // Select the user from the database

           /* Log user in */
            loginUser($user);
        } else {    // If there are errors make sure to not change what the user has typed in
            $username = $_POST['username'];
            $email = $_POST['email'];;
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
        }
    }

    if(isset($_POST['login-btn'])) {
        
        $_POST['username'] = strtolower($_POST['username']);    // lowercase the username
        //$errors = validateUser($_POST);   // Validate the user 
                                           //(Note needed since we will always log the user as anon if it fails)

        $user = selectOne($table, ['username' => $_POST['username']]);          // Attempt to find the user in the database
        if($user && password_verify($_POST['password'], $user['password'])) {   // If the user exists and the password is correct
            loginUser($user);   // Log the user in
        } else {        // If the user doesn't exist or the password is wrong
            $user = selectOne($table, ['username' => 'anonymous']); // login as an anonymous user
            loginUser($user);   // Log the anonymous user in
        }

        /*if(count($errors) === 0) {
            $user = selectOne($table, ['username' => $_POST['username']]);
            if($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);
            } else {
                $user = selectOne($table, ['username' => 'anonymous']); // If the user is not found, login as an anonymous user
            }
        }*/
    }
?>