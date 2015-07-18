<?php session_start(); ?>

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
            <h2>You are Done!</h2>
            <p> Congrats! You have completed the test!</p>
            <p>Final score: <?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="start"><?php session_destroy(); ?>Take quiz again</a>
        </div>
    </main>
    
    
    <footer>
        <div class="container">
           Copyright &copy; 2015, Quizzer the quiz
        </div>
        
        
        
    </footer>

    
    
</body>

</html>
