<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test Your PHP Knowledge</h2>
            <p>This is a multiple choice quiz to test your knowlegde of PHP</p>
            <ul>
                <li><strong>Number of questions: </strong>5</li>
                <li><strong>Type: </strong>Multiple Choice</li>
                <li><strong>Estimated Time: </strong>4 Minutes</li>
            </ul>
            <a href="questions.php?n=1" class="start">Start Quiz</a>            
        </div>
    </main>
    <footer>   
        <div class="container">
            Copyright(c) 2017 Nick Le Page
        </div>
    </footer>
</body>
</html>