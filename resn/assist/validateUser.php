<?php
    function validateRegisterUser($user) {
        $errors = array();  // Array to store the errors

        if(empty($user['username'])) {    // If the username field is empty
            array_push($errors, "Username Required");    // Push the error message into the array
        }

        if(empty($user['email'])) {    // If the email field is empty
            array_push($errors, "Email Required");    // Push the error message into the array
        }

        if(empty($user['password'])) {    // If the password field is empty
            array_push($errors, "Password Required");    // Push the error message into the array
        }

        if($user['password2'] !== $user['password']) {    // If the confirm password field is not equal to the password field
            array_push($errors, "Passwords do not match");    // Push the error message into the array
        }

        $existingUser = selectOne('users', ['email' => $user['email']]);    // Check if the email is already in use
        if(isset($existingUser)) {    // If the username is already in use
            array_push($errors, "Username already in use");    // Push the error message into the array
        }
        
        return $errors;   // Return the array of errors
    }

    /* Make sure the fields arn't empty */
    function validateUser($user) {
        $errors = array();  // Array to store the errors

        if(empty($user['username'])) {    // If the username field is empty
            array_push($errors, "Username Required");    // Push the error message into the array
        }

        if(empty($user['password'])) {    // If the password field is empty
            array_push($errors, "Password Required");    // Push the error message into the array
        }

        return $errors;   // Return the array of errors
    }
?>