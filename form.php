<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form webpage</title>
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
            <div class="form-link-fpage">
            <?php  echo '<a href="form.php"> Form </a>' ?></div>
        
        <div class="vertical-line-middle"></div>
        
        <div class="vertical-line-right"></div>
            <div class="index-link-fpage">
            <?php  echo '<a href="index.php"> Home </a>' ?></div>
        <br>
        <br>
        <!-- this is a second horizontal line-->
        <div class="line-2"> </div>
        <br>
        <br>
        <p class="text">Everything is about being fast - as opposed to being patient and investing the time in making healthy food. 
            <br>
            <br>
            For example - you want fast food, it only takes a few clicks away from getting what you want, rather than putting the time in cooking a healthy food that could make a <br>difference in your body in terms of the nutrients your body takes for it to be productive. 
            <br>
            <br>
            For this reason, I want to create a form that allows you to fill in the form, this helps me to understand what kind of person you are, and it will be interesting to see where you would <br>buy healthy products from a website. What I mean by healthy products are essentially organic food, nutrients in the form of a capsule, etc. Anything that is considered as food and it’s <br>a product. Plus filling out the form will also help me to create a survey, so it would be highly appreciated if you could help me out by filling out the form!
            <br>
            <br>
            Here's a form below here:</p>
            <br>
            <br>
            <!--this is the form section-->
        <div class="wrapper">
            <div class="box">      
            <div class="form-text">
                <br>
                
                <form action="thankyouform.php" method="POST">
                
                <?php $name = $gender = $email = ""; ?>

                    <span style="color: red">*</span>Name: <input type="text" name="name" required placeholder="Type your name here" value="<?php echo $name;?>">
                    <br><span class="error" style="color: red"> </span>
                    <br><br>
                    <span style="color: red">*</span>Please select your gender: <br>
                        <input type="radio" name="gender" required
                        <?php if (isset($gender) && $gender=="male") echo "checked";?>
                        value="male">Male<br>
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="female") echo "checked";?>
                        value="female">Female
                    <br><span class="error" style="color: red"> </span>    
                    <br><br>
                    <span style="color: red">*</span>E-mail: <input type="text" name="email" required placeholder="Type your e-mail here" value="<?php echo $email;?>">
                    <br><span class="error" style="color: red"> </span>
                    <br><br>
                    Your go-to Website for healthy products: <textarea name="website" rows="2" cols="55" placeholder="Insert the URL link on here"></textarea><br><br>
                    Comment: <br><textarea name="comment" rows="8" cols="55" placeholder="Inspire us on how you keep yourself healthy by commenting here!"></textarea><br><br>
                        <input type="submit">

                        <br><br>
                        <span style="color: red">* Must fill required field</span>
                </form>
                        <br>
                </div>
            </div>
        </div>
            <br>
            <br>

    </body>

</html>