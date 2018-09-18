<html>
<head>
    <link rel='stylesheet' id='arnab-bootstrap-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
	<p class="h2">Arnab Bhar</p>

</head>

<body>



<?php

// Array Structure:  "Quote","Author"

$allqts = array
("The Black Knight Always Triumphs!",
    "Monty Python",
    "I swear by my life and love of it that I will never live for the sake of<br>another man, nor ask another man to live for mine" ,
    "Atlas Shrugged",
    "It is clear that the individual who persecutes a man, his brother,<br> because he is not of the same opinion, is a monster",
    "Voltaire",
    "I agree that there is a natural aristocracy among men<br>The grounds of this are virtue and talents.",
    "Thomas Jefferson",
    "Liberty, when it begins to take root, is a plant of rapid growth.",
    "George Washington",
    "Never argue with an idiot. <br>They drag you down to their level <br>then beat you with experience",
    "Dilbert",
    "The Answer is 42. What is the question?",
    "Hitchikers Guide to the Galaxy",
    "Anyone who has never made a mistake has never tried anything new",
    "Albert Einstein",
    "A little learning is a dangerous thing; Drink deep, or taste not the Pierian spring.  There shallow draughts intoxicate the brain, <br>and drinking largely sobers us again",
    "Alexander Pope",
    "The early bird gets the worm, but the second mouse gets the cheese",
    "Anonymous",
    "Subjugating the enemy's army without fighting is the true pinnacle of excellence",
    "Sun-tzu, The Art of War",
    "Work as though you were to live 100 years; pray as if you were to die tomorrow",
    "Benjamin Franklin",
    "The world is a stage, but the play is badly cast",
    "Oscar Wilde",
    "Truth is generally the best vindication against slander.",
    "Abraham Lincoln",
    "...mercy to the guilty is cruelty to the innocent...",
    "Adam Smith",
    "...I wish that I may never think the smiles of the great and powerful<br> a sufficient inducement to turn aside from the straight path<br> of honesty and the convictions of my own mind",
    "David Ricardo",
    "Democracy is the worst form of government except for all the others",
    "Winston Churchill",
    "You can only know the highest peaks if you have experianced the lowest valley's",
    "Richard Nixon",
    "They dress the wound of my people as though it were not serious. <br>'Peace, peace,' they say, when there is no peace.",
    "Jeremiah 6:14",
    "It is better to remain silent and be thought a fool<br> than to open your mouth and remove all doubt.",
    "Jonathan Swift",
    "The market system delivers the goods people want,<br>but those who make it work cannot readily explain why it is so.<br>The socialst or communist system does not deliver the goods, <br>but those who operate it can readily explain away its failure.",
    "F.A. Hayek, Law, Legislation and Liberty, Vol. II",
    "Never Stop Exploring",
    "The North Face"
);


$key = array_rand($allqts);

while ($key%2!=0) {
    $key = array_rand($allqts);
}

$quote = $allqts[$key];
$author = $allqts[$key+1];

?>

<div class="row">
  <div class="col-3 col-md-4"></div>
	<div class="col-6 col-md-4" align="center"><img src="images/photo.jpg" width="198" height="351" alt=""/></div>
<div class="col-3 col-md-4"></div>
	
		
  <div class="col-3 col-md-4"></div>
  <div class="col-6 col-md-4" align="center"><?php echo $quote; ?><br/><?php echo $author; ?></div>
  <div class="col-3 col-md-4"></div>
	
  <div class="col-3 col-md-8"></div>
  <div class="col-4 col-md-4"></div>
</div>
</body>
</html>

