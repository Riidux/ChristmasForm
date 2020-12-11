<?php
    //variable names, sending data with post method
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $age = $_POST['age'];
    $wish = $_POST['wish'];

    //Connection to database
    $conn = new mysqli('localhost','root', '','general');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        //Prepared statements
        $stmt = $conn->prepare("insert into wishes (firstName, lastName, gender, country, age, wish) values(?, ?, ?, ?, ?, ?)");
        //Binds the variables to parameter markers
        $stmt->bind_param("ssssis", $firstName, $lastName, $gender, $country, $age, $wish);
        $stmt->execute();
        
        //Display page (html)
        echo '
                <html>
        <head>
        <meta name="viewport" content="width=device-width,user-scalable=no">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Submission Successful</title>
        <link href="styles.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&family=Nerko+One&family=Andika+New+Basic&display=swap" rel="stylesheet">
        </head>
        <body>
        <div id="bg2">
        <div class="form">
        <h1>CHRISTMAS WISH FORM</h1>
        <p>Submission successful!</p>
            <a href="index.php" class="buttons">SUBMIT ANOTHER</a>
            <a href="view.php" class="buttons">VIEW ALL WISHES</a>
        </div>
            <div id="webFrameTop" class="webFrame"></div>
            <div id="webFrameRight" class="webFrame"></div>
            <div id="webFrameBottom" class="webFrame"></div>
            <div id="webFrameLeft" class="webFrame"></div>
        </div>
        </body>
        </html>
            ';
        
        $stmt->close(); //Close statement
        $conn->close(); //Close connection
    }
?>