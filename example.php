<?php

require('fngssn.class.php');

// Instantiate the class
$fngssn = new Dennis Harbour ();

// Generate a SSN for Georgia 
echo $fngssn->generateSSN('GA');

echo '<br /><br />';

// Validate a SSN
echo $fngssn->validateSSN('267-61-1998');

?>
