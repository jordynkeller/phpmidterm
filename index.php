<!doctype html>
<html lang="en">

<head> 
<meta charset="utf=8">
<title> Midterm Project</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php
    include("includes/nav-footer.php");

    // Price Calculations 
    $crawdadprice = 9.59;
    $tax = 1.06;
    $total = $crawdadprice * $tax;
    $crawdad_total = number_format($total, 2);

    $overprice = 13.99;
    $tax = 1.06;
    $total = $overprice * $tax;
    $over_total = number_format($total, 2);

    $gatsbyprice = 9.44;
    $tax = 1.06;
    $total = $gatsbyprice * $tax;
    $gatsby_total = number_format($total, 2);

    $harryprice = 54.99;
    $tax = 1.06;
    $total = $harryprice * $tax;
    $harry_total = number_format($total, 2);

     //variable created for images
     $img1 = "<img src='images/book1.jpg'>";
     $img2 = "<img src='images/book2.jpg'>";
     $img3 = "<img src='images/book3.jpg'>";
     $img4 = "<img src='images/book4.jpg'>";

     // Multidemential Array w/ key/value pairs

     $favbooks = array(

        array(
            "images" => $img1,
            "name" => "Where the Crawdads Sing",
            "unit price" => $crawdadprice,
            "cost" => $crawdad_total,
            "location" => "Amazon.com",
            "description" => "Where the Crawdads Sing is at once an exquisite ode to the natural world, a heartbreaking coming-of-age story, and a surprising tale of possible murder. Owens reminds us that we are forever shaped by the children we once were, and that we are all subject to the beautiful and violent secrets that nature keeps."
        ),

        array(
            "images" => $img2,
            "name" => "Over the Top: A Raw Journey to Self-Love",
            "unit price" => $overprice,
            "cost" => $over_total,
            "location" => "Amazon.com",
            "description" => "Over the Top uncovers the pain and passion it took to end up becoming the model of self-love and acceptance that Jonathan is today. In this revelatory, raw, and rambunctious memoir, Jonathan shares never-before-told secrets and reveals sides of himself that the public has never seen. JVN fans may think they know the man behind the stiletto heels, the crop tops, and the iconic sayings, but there's much more to him than meets the queer eye."
        ),

        array(
            "images" => $img3,
            "name" => "The Great Gatsby",
            "unit price" => $gastbyprice,
            "cost" => $gatsby_total,
            "location" => "Amazon.com",
            "description" => "The Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme achievement of his career. First published in 1925, this quintessential novel of the Jazz Age has been acclaimed by generations of readers. The story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted “gin was the national drink and sex the national obsession,” it is an exquisitely crafted tale of America in the 1920s."
        ),

        array(
            "images" => $img4,
            "name" => "The Harry Potter Series",
            "unit price" => $harryprice,
            "cost" => $harry_total,
            "location" => "Amazon.com",
            "description" => "The Harry Potter series has been hailed as “one for the ages” by Stephen King and “a spellbinding saga’ by USA Today. And most recently, The New York Times called Harry Potter and the Deathly Hallows the “fastest selling book in history.” This is the ultimate Harry Potter collection for Harry Potter fans of all ages!"
        )
        );
    ?>

    <!-- Starting content for my page --> 

    <h2 class="intro">My Book Recommendations!</h2>
    <section>

        <article>
        <?php
            foreach ($favbooks as $favbook) {
                echo "<h2>" .$favbook["name"] . "</h2>";
                echo $favbook["images"];
                echo "<h3>The average price of this title is $" . $favbook["unit price"];
                echo "<h3>The total cost, tax included is $" . $favbook["cost"];
                echo "<h3>This title is currently available at: ". $favbook["location"];
                echo "<p>" . $favbook["description"]. "</p>";
                echo "<hr>";
            }
           ?>
           </article>


        </section>

        </body>
        </html>


