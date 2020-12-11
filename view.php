<html>
<head>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>View Wishes</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&family=Nerko+One&family=Andika+New+Basic&display=swap" rel="stylesheet">
</head>
<body>
<div id="bg2">
    <div class="form">
        <h1>CHRISTMAS WISHES</h1>

        <table>
            <thead>
            <tr>
                <th>ID#</th>
                <th>Gender</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Country</th>
                <th>Age</th>
                <th>Wish</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
                $conn = new mysqli('localhost','root', '','general');
                if($conn->connect_error){
            die('Connection failed : '.$conn->connect_error);
            } else{
            $sql = "SELECT * FROM wishes;";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) { //array of all elements of entry in the table
            //variable names
            $id = $row['id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $gender = $row['gender'];
            $country = $row['country'];
            $age = $row['age'];
            $wish = $row['wish'];

            switch($gender){
            case "m":
            $gender = "Male";
            break;
            case "f":
            $gender = "Female";
            break;
            case "o":
            $gender = "Other";
            break;
            case "n":
            $gender = "Prefer not to say";
            break;
            }

            echo
            "<tr>
                <td>$id</td>
                <td>$gender</td>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$country</td>
                <td>$age</td>
                <td>$wish</td>
            </tr>";
            }
            }

            ?>
            </tbody>
        </table>

        <a href="index.php" class="buttons">SUBMIT ANOTHER</a>
    </div>
    <div id="webFrameTop" class="webFrame"></div>
    <div id="webFrameRight" class="webFrame"></div>
    <div id="webFrameBottom" class="webFrame"></div>
    <div id="webFrameLeft" class="webFrame"></div>
</div>
</body>
</html>