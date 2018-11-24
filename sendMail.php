<!doctype html>
<?php include "conn.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Bank Inc.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="see_list.php">List Details</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];
            $response = $conn->query("INSERT INTO `customers`(`name`, `email`, `contact`, `gender`, `message`) 
                                                            VALUES ('$name','$email','$contact','$gender','$message')");
            if ($response == true) {
                $response = ['message'=>'Email Sent Successfully !!', 'class'=>'success'];
                // email send code in html
                $to = "wdyogesh@gmail.com";
                $subject = "Bank Registration Email Notification";

                $message = "
                        <html>
                        <head>
                            <title>Welcome To Our website</title>
                        </head>
                        <body>
                            <p>This Email from New user Registration!</p>
                        <table>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Gender</th>
                        <th>Message</th>
                        </tr>
                        <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$gender</td>
                        <td>$contact</td>
                        <td>$message</td>
                        </tr>
                        </table>
                        </body>
                        </html>
                        ";
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                mail($to,$subject,$message,$headers);
            }
            else {
                print_r(mysqli_error($conn));
                $response = ['message'=>'Email Not Sent Something went wring !!', 'class'=>'danger'];
            }
        }
    ?>
    <div>
        <?php if (!isset($response)) {
            header('Location: index.php');
        }
        ?>
        <div class="alert-<?= $response['class']?> alert"> <?= $response['message']?> </div>
    </div>
</div>

</body>
</html>