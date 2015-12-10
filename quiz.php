<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link
        href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecture 5: Responsive Design</title>
</head>
<body>
<div class="wrapper">
    <section class="container">
        <?php include "includes/header.php"; ?>
        <main>
            <section class="home">
                <h2>Quiz #5</h2>

                <p>Name: <input id='name' type='textarea' name='name'></p>

                <p>Student Number: <input id='studnum' type='textarea' name='studnum'></p>

                <p>This quiz is to be done individually and is closed book</p>

                <p>1. Name at least two things that you should do to a web page to display it for printing (2 marks)</p>

                <p><input id='q1' type='textarea' name='q1'></p>

                <p>2. Media queries can be applied either in the link tag or in an external CSS file (1 mark)</p>

                <p><input type='radio' name='q2true'> True</p>

                <p><input type='radio' name='q2false'> False</p>

                <p>3. Complete the CSS rule below the ensure images will scale to teh size of the parent (2 marks)</p>

                <p>img{<input id='q3' type='textarea' name='q3'>}</p>

                <p>4. Choose the media query breakpoint that will match when the browser viewport is thinnest (1
                    mark)</p>

                <p><input type='radio' name='q4a'> @media only screen an (min-wit:1024px)</p>

                <p><input type='radio' name='q4b'> @media only screen and (min-width:300px) and (max-width:800px)</p>

                <p><input type='radio' name='q4c'> @media only screen and (min-width:800px) and (max-width:1024px)</p>

                <p>5. Write the media query breakpoint for when a browser viewport is less than 400px tall (2 marks)</p>

                <p><input id='q5' type='textarea' name='q5'></p>

                <p>6. Name at least two design best practices when styling for small devices (2 marks)</p>

                <p><input id='q6' type='textarea' name='q6'></p>

                <p>
                    <button type='submit'>Submit</button>
                </p>
                <p></p>
            </section>
        </main>
    </section>
    <aside class="sidebar">
        <?php include "includes/asides/lecture.php";?>
        <?php include "includes/asides/agenda.php";?>
        <?php include "includes/asides/references.php";?>
        <?php include "includes/asides/exercises.php";?>
        <?php include "includes/asides/homework.php";?>
    </aside>
</div>

<?php include "includes/footer.php";?>
</body>
</html>
