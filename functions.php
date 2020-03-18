<!doctype html>
<html lang="en">

<head> 
<meta charset="utf=8">
<title> Midterm Project </title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php
//Statement for header, nav & footer with use of @required or @includes 
    include("includes/nav-footer.php");

    ?>

    <section class="functions">
    <h2 class="intro">Function Examples:</h2>
    <article>

    <!--Example of Built-in function-->
    <h3>This function returns the difference between two DateTime objects.</h3>

    <?php
        $date1=date_create("2017-12-17");
        $date2=date_create("2020-03-17");
        $diff=date_diff($date1,$date2);
        ?>
    
    <p>Reference: <a href="https://www.w3schools.com/php/func_date_date_diff.asp">W3Schools</a></p>
    </article>

    <article>

    <!--Example of a Function that I create -->
    <h3>This function returns your first and last name</h3>
    <?php
        function myName($first, $last) {
            echo "Hello, my name is $first $last";
        }

        myName ("Jordyn", "Keller");
        ?>
            
         
            </article>

            </section>
            </body>
            </html>



