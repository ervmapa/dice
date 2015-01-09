<?php 
/**
 * This is a Dice pagecontroller.
 *
 */
// Include the essential config-file which also creates the $dice variable with its defaults.
include(__DIR__.'/config.php'); 


$dice['main'] = <<<EOD
<div> <p>This is DICE! </p> </div>
EOD;
  
// Finally, leave it all to the rendering phase of Dice.
include(DICE_THEME_PATH);
