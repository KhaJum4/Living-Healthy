<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home webpage</title>
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
        <p class="text">Hi, my name is Khalid Jumah. 
        <br>
        <br>
        Keep in mind that this website is not completed. I am simply using this to test things, try them out, see what they lead to. 
        <br>
        <br>
        But yes, living healthy is so important. I know this because I have experienced it for a long time, and honestly, my consistency can be problematic. I use this as a reminder for myself that, yes, 
        <br>
        living healthy is really important, but so do taking baby steps. I would argue that mental wellbeing has to go in line with physical and spiritual wellbeings. Makes no sense to neglect one of them 
        <br>
        whatsoever.
        <br>
        <br>
        Thank you for listening to my TED talk. Haha!
        </p>

        <br><br>

    </body>

</html>
