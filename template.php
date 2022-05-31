<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Template webpage</title>
        <link rel="stylesheet" href="main.css">
        <!-- this is for the link-->
        <style> 
            a:link{
                text-decoration: none;
                color: white;
            }
            a:visited{
                text-decoration: none;
                color: white;
            }
            a:hover{
                text-decoration: underline;
            }
            a-active {
                text-decoration: underline;
            }
        </style>
    </head>

    <body> 
        <img src="Banner.png" alt="A banner" class="center">
        <br>
        <!-- this is a first horizontal line-->
        <div class="line-1"> </div>
        <br>
        <br>
        <div class="vertical-line-left"></div>
            <div class="form">
            <?php  echo '<a href="form.php"> Form </a>' ?></div>
        
        <div class="vertical-line-middle"></div>
        
        <div class="vertical-line-right"></div>
            <div class="index">
            <?php  echo '<a href="index.php"> Home </a>' ?></div>
        <br>
        <br>
        <!-- this is a second horizontal line-->
        <div class="line-2"> </div>
        <br>
        <br>
        <p class="text">This is a template form</p>
    </body>

</html>