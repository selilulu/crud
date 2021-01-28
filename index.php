
<?php

//inside of setup we put everything that will be used in other pages so that gives more clear view!

require 'setup.php';

// Update the naming if you'd like to work with another collection

$cards = $cardRepository->get();
$cardRepository->create();



// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';



