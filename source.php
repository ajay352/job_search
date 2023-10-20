
<?php
if (isset($_POST['get_source'])) {
    // Get the URL of the current page
    $currentURL = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $pageSource = file_get_contents($currentURL);
    if ($pageSource !== false) {
        echo "<pre>" . htmlentities($pageSource) . "</pre>";
    } else {
        echo "Failed to retrieve the source code.";
    }
}
?>



          
           
           
          
