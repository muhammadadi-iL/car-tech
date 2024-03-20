<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'office@carandtech.ca'); 
define('PAYPAL_SANDBOX', false); //TRUE or FALSE 
define('CLIENT_ID', 'AcKwbyi3-LtcW9orYwnWecAHjTaU6SDpJ6JiVW6FIP3lO-9yY-DjWoPNoo6vTbfEW2Xitkmkiiz5O1le');
define('SECRET_KEY', 'EJDE3UgCkon13N7w2VTZAJmlGhK3y5NTc_7mzxMwOCq11RsIiBLm44YW08ZHPHrkI4yHqLCfFhXUZbT0');

define('PAYPAL_RETURN_URL', 'https://carandtech.ca/index'); 
define('PAYPAL_CANCEL_URL', 'https://carandtech.ca/cancel.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'caratec_paypal_con');

//define('DB_HOST', 'localhost');
//define('DB_USERNAME', 'caratec_carandtech');
//define('DB_PASSWORD', 'pakistan@0310');
//define('DB_NAME', 'caratec_paypal_con');
 
 
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");