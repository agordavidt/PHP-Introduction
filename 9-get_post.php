<?php 
/** ---- $_GET & $_POST Superglobals ---- */

/**
 * We can pass data through urls and forms using the $_GET and $_POST superglobals.
 */

 // echo $_GET['name'];

 echo 'Hello ' . PHP_EOL . ' David';

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>? name=John">Click</a>