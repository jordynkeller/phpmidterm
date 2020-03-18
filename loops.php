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

    <section class="loops">
    <article>
        <h2 class="intro">Required Loop Examples</h2>
        <p>Loops execute a block of code as long as a set condition is true. </p>
        <h3>PHP Loop Types:</h3>
        <ul>
            <li>While Loop</li>
            <li>Do.. While Loop</li>
            <li>For Loop</li>
            <li>Foreach Loop</li>
        </ul>
        </article>

        <article>
        <h3>The While Loop executes code as long as a specified condition is true.</h3>
        
        <!--While Loop Example-->
        
        <?php 
            $num = 18;

            while($num <= 20) {
                echo "<p>The loop number is: $num </p>";
                $num++;
            }
            ?>
            </article>

            <article>
            <h3>The Do.. While Loop will always execute once and then continue while the specified conditions are true. </h3>
            
            <!--Do.. While Loop Example-->

            <?php 
                $num = 45;
                do {
                    echo "<p>The loop number is " . $num . " .</p>";
                    $num++;
                }
                    while ($num < 40); {
                    }
                echo "<p>Now the loop is done.<p>"; 
            ?>
            </article>

            <article>
            <h3>The For Loop is used to execute a block of code for a specific number of times.</h3>

            <!--For Loop Example-->

            <?php
                for ($num =77; $num <= 88; $num++) {
                    echo "<p>The number is : $num </p>";
                }
                ?>
                </article>

                <article>
                <h3>The Foreach Loop is used with arrays to loop through the set key/value pairs in the array.</h3>

            <!--Foreach Loop Example-->

            <?php
                $PersonalInfo = array("Name" => "Jordyn", "Weight" => "130", "Age" => "26", );

                foreach($PersonalInfo as $key => $value){
                    echo "<p>$key = $value</p>";
                }
                ?>
                </article>

                </section>
                </body>
                </html>












