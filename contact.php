<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecture 5: Responsive Design</title>
</head>
<body>
    <div class="wrapper">
        <section class="container">
            <?php include "includes/header.php";?>
            <main>
                <section class="home">
                    <h2>Contact</h2>
                    <h4>Email</h4>
                    <p><a href='mailto:jeffrey_parker@bcit.ca'>jeffrey_parker@bcit.ca</a></p>
                    <h4>Send me a message</h4>
                    <p>First Name: <input type='text' name='fname'></p>
                    <p>Last Name: &nbsp;<input type='text' name='lname'></p>
                    <p>Message</p>
                    <p><textarea name='message'></textarea></p>
                    <p><button type='submit'>Send</button></p>
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
