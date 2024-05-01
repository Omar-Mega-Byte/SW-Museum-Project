<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Data/Untitled (1).png">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Data/OIG.jpg">
    <title>User Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(Data/2339301.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .user-profile {
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border: 1px solid #000000;
            border-radius: 5px;
        }

        .user-profile h1 {
            font-size: 50px;
            margin-top: 0;
            font-weight: bolder;
        }

        .user-profile p {
            margin: 10px 0;
            font-size: 16px;
            font-family: 'Fjalla One', sans-serif;
            font-family: 'Sedgwick Ave Display', cursive;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-size: 60px;
        }

        .user-profile strong {
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="user-profile">
            <h1>User Profile</h2>
            <?php
                session_start();
                require '../Models/User.php';
                $user = new User();
                $useremail = $_SESSION['email'];
                $userInfo = $user->getUserInfoByEmail($useremail);
            ?>
            <p><strong>ID:</strong> <?php echo $userInfo['id']; ?></p>
            <p><strong>Email:</strong> <?php echo $userInfo['email']; ?></p>
            <p><strong>Username:</strong> <?php echo $userInfo['username']; ?></p>
            <p><strong>Password:</strong> <?php echo $userInfo['password']; ?></p>
        </div>
    </div>
</body>

</html>
