in this code we will use two methods
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 10 second!";
    ?>
    </body>
</html>
     or

<?php 
  
// Demonstrate the use of header() function 
// to refresh the current page 
   
echo "Welcome to index page</br>"; 
echo "Page will refresh in every 3 seconds</br></br>"; 
    
// The function will refresh the page  
// in every 3 second 
header("refresh: 3"); 
    
echo date('H:i:s Y-m-d'); 
  
exit; 
?>
