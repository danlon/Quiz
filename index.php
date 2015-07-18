<?php include 'database.php'; ?>
<?php

//Get the total number of questions
$query ="SELECT * FROM questions";

//Get results
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Quizzer the quiz</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>


<body>
    <header>
        <div class="container">
            <h1>Quizzer the quiz</h1>         
        </div>
    </header>
    
    
    <main>
        <div class="container">
            <h2>Test your PHP Knowledge</h2> 
            <p>This is a multiple choice quiz to test your knowledge of PHP</p>
            <ul>
                <li><strong>Number of questions: </strong><?php echo $total; ?></li>
                <li><strong>Type of quiz: </strong>Multiple choice</li>
                <li><strong>Estimated time: </strong><?php echo $total * .5; ?> Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
    
    
    <footer>
        <div class="container">
           Copyright &copy; 2015, Quizzer the quiz
        </div>
        
        
        
    </footer>

    
    
</body>

</html>
