<?php
include 'env_variable_setup.php';

//load env file
load_env();

//try out
echo $_ENV['DB_NAME']; //TO TRY THIS PAGE I'VE TO DEACTIVATE THE .HTACCESS FILE

?>