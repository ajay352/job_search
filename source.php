<?php
$url=$_POST['url'];
$mod_url="http://localhost".$url;
$ch = curl_init($mod_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$sourceCode = curl_exec($ch);
curl_close($ch);

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="w-8/12 mx-auto bg-yellow-100">
            <div class="w-12/12 bg-yellow-300 shadow shadow-lg text-center">
                <h1>Source Code</h1>
            </div>
            <div>
                <?php
                  
                  echo '<pre>' . htmlentities($sourceCode) . '</pre>';
                ?>
            </div>
            
        </div>
    </div>
    
</body>
</html>