<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
    //check to see if the score is set_error_handler

    
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if ($_POST) {
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;
        
        //get total questions
        $query = "SELECT * FROM questions";
        
        //get score result
        $results = $mysqli->query($query) or die($mysqli->error._LINE_);
        $total = $results->num_rows;
        
        //get correct choice

        $query = "SELECT * FROM choices
            WHERE question_number = $number AND is_correct = 1";
        
        //get result
        $result = $mysqli->query($query) or die($mysqli->$error._LINE_);
        
        //get row
        $row = $result->fetch_assoc();
        
        //set correct choice
        $correct_choice = $row['id'];
        
        //compare
        if ($correct_choice == $selected_choice) {
            //answer is correct - add to the score
            $_SESSION['score']++;
        }
        //if its the last question redirect to final.php
        if ($number == $total) {
            header("Location: final.php");
            exit();
        } else {
            header("Location: question.php?n=" .$next);
        }
    
    }