<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
   
   
   if ( isset($name)  )

    $name = $_POST['name'];
    $email = $_POST['email'];
    
 
    
    // Process the data (for demonstration, just echoing the data)
    
    echo "Welcome, this is the admin";
    
   
    
    // Here you can perform additional actions like saving data to a database, sending emails, etc.
} else {
    // If the request method is not POST, redirect back to the form page
    header("Location: index.html");

    exit;
}
?>