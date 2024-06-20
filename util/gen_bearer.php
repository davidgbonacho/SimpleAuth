<?php

/**
 * Code for generate Bearer code 
 */

$bearer = bin2hex(random_bytes(30)); 

echo "Your bearer code is: $bearer\n";