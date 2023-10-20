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
  <div class="w-8/12 bg-gray-100 mt-20 mx-auto">
    <p class="mx-auto text-center text-xs font-bold">HIRELATERAL MAIL FORM</p>
    <hr class="mt-4 border border-gray-300">
    <p class="mx-auto mt-4 text-xs font-bold">ENTER TODAY TOP JOBS</p>
    <div class="flex w-2/12 mx-auto">
       <button class="bg-blue-500 mr-4 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 add-mark-button">
        ADDMORE
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4">
        REMOVE
      </button>
    </div>
    <div>
       <form action="insert.php" method="post">
        <div class="flex mt-4">
          <div class="mb-4 w-6/12">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="example-text">
                 Job Title
             </label>
             <input name="title[]" class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:shadow-outline" id="example-text" type="text">
         </div>
         <div class="mb-4 w-6/12  ml-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="example-text">
                 Job Url
             </label>
             <input name="url[]" class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:shadow-outline" id="example-text" type="text">
         </div>
         

         
          
        </div>
        <div class="mt-4 right-side">
           


        </div>
        <div class="w-1/12 mx-auto">
          <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4" type="submit">
             submit
          </button>

        </div>
       </form>
    </div>

  </div>

</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const addMarkButtons = document.querySelectorAll(".add-mark-button");
            const rightSide = document.querySelector(".right-side");
            let markCounter = 1;
            addMarkButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    rightSide.innerHTML += `
                    <div class="flex">
                    <div class="mb-4 w-6/12">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="example-text">
                         Job Title
                        </label>
                        <input name="title[]" class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:shadow-outline" id="example-text" type="text">
                   </div>
                   <div class="mb-4 w-6/12  ml-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="example-text">
                            Job Url
                      </label>
                       <input name="url[]" class="shadow appearance-none border rounded w-full leading-tight focus:outline-none focus:shadow-outline" id="example-text" type="text">
                  </div>
                  </div>                   
                    `;
                    markCounter++;
                });

            });


        });

        
        
    </script>
    
</body>
</html>