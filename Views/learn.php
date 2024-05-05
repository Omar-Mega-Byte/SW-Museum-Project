<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilizations Museum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: auto;
            margin-top: 60px;
            margin-bottom: 60px;
        }

table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

th {
    background: linear-gradient(to bottom, #4CAF50, #45a049);
    color: white;
    border: 1px solid #dddddd;
    padding: 12px;
    text-align: left;
}

td {
    border: 1px solid #dddddd;
    padding: 12px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e2e2e2;
    transition: background-color 0.3s ease;
}

    </style>
</head>

<body>
    <header>
        <h1>Welcome to the Learn page</h1>
    </header>
    <section id="resources" class="container">
        <div class="resource">
        <?php
        require '../Models/Learn.php';
        $newResource = new Learn();
        $newResource->displayResources();
        ?>
        </div>
    </section>
</body>

</html>