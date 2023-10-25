<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
      include('conn.php');
      $query = "SELECT * FROM jobdetails";
      $result = mysqli_query($conn, $query);
      $currentURL = $_SERVER['REQUEST_URI'];
      echo "Current URL: $currentURL";
      
    
    ?>
<div class="container">
    <div class="w-8/12 mx-auto">
        <!-- <div class="w-2/12 mx-auto">
            <button class="bg-green-500 hover:bg-green-700 text-white text-xs font-bold py-2 px-2">
               Green Button
            </button>
        </div> -->
        <div class="bg-yellow-300 p-4 mt-4">
            <p class="text-center">MAIL PREVIEW</p>

        </div>

    </div>  
    <div class="w-8/12 bg-yellow-100 mx-auto">
        <div class="w-3/12 mx-auto flex">
            <form action="source.php" method="post">
              <input type="hidden" value="<?php echo  $currentURL; ?>" name="url">
          <button name="get_source" type="submit" class=" mt-4 mb-4 bg-green-500 hover:bg-green-700 text-white text-xs font-bold  px-2 mr-2">
               SOURCE CODE
          </button>
          </form>
          <button class=" mt-4 mb-4 bg-green-500 hover:bg-green-700 text-white text-xs font-bold  px-2">
               PREVIEW
          </button>
        </div>
          <div class="w-6/12 mx-auto bg-white">
          <div class="w-11/12 mx-auto mb-4">
            <p class="text-xs text-gray-500 font-bold mt-2">Dear Job Seekers</p>
            <p class="text-xs text-gray-500 font-bold mt-2">Latest Government jobs On hirelateral.com</p>
           </div>
            <div class="w-11/12 mx-auto border border-black">
            <p class="text-xs text-gray-500 font-bold">POST</p>
            <hr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            
            ?>
            <div class="mb-4">
                <p class="font-bold text-sm"><?php echo $row['title']?></p>
                <p class="font-bold text-sm"><?php echo $row['joburl']?></p>
                <button class="bg-blue-300  text-white text-xs font-bold py-2 rounded">
                   APPLY HERE
                </button>
                <hr class="mt-4 mb-4">
            <div>
            <?php
             }
            ?>

            </div>
           
          </div>
        </div>
</div>

</body>
</html>