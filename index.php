<!doctype html>
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
    <form action="sendMail.php" method="post">
        <fieldset>
            <legend>Bank Registration Form</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Your Full Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter Your full name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input name="contact" required type="contact" class="form-control" id="exampleInputPassword1" placeholder="Contact">
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Gender</label>
                <select name="gender" required class="form-control" id="exampleSelect1">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Transgender</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Text Your Message</label>
                <textarea name="message" class="form-control" id="exampleTextarea" rows="3" placeholder="Text Your Message"></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
</div>

</body>
</html>