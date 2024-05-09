<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Data/Untitled (1).png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <header class="bg-dark text-white py-4">
        <div class="container">
            <h1 class="mb-0">Helwan Events :3</h1>
        </div>
    </header>
    <div>
        <?php
        require '../Models/Event.php';
        $newEvent = new Event();
        $newEvent->displayEvents();
        ?>
    </div>
    <section class="py-4">
        <div class="container">
            <h2 class="text-center">Welcome to Helwan Events</h2>
            <a href="BookEvent.php" class="btn btn-primary btn-lg d-block mx-auto mt-4">Book your Event</a>
        </div>
</body>

</html>