<html>
    <body>
        <?php
        if (isset( $_POST["submit"])){
            $name= $_POST["name"];
            $email= $_POST["email"];
            $website= $_POST["website"];
            $comment= $_POST["comment"];
            // $gender= $_POST["gender"];
        }else{
            die ("Sorry, you cannot access this page!");
        }
        if (!empty($name)){
            echo "Thanks, <b>".$name."</b><br>";
        }else{
            echo("Name is required <br>");
        }
        if (!empty($email)){
            echo "Your email is: ".$email."<br>";
        }else{
            echo("email is required <br>");
        }
        if (!empty($website)){
            echo "Your website is: ".$website."<br>";
        }else{
            echo "Your website is :, none <br>";
        }
        if (!empty($comment)){
            echo "Your comment is: ".$comment."<br>";
        }else{
            echo "Your comment is :, none <br>";
        }
        if (isset($_POST["gender"])){
            $gender = $_POST["gender"];
        }
        if (!empty($gender)){
            echo "You are: ".$gender."<br>";
        }else{
            echo ("Gender is required");
        }
        ?>
    </body>
</html>       