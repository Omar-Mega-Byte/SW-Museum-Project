<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum's Collection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

th, td {
    border: 1px solid #dddddd;
    padding: 12px;
    text-align: left;
}

th {
    background: linear-gradient(to bottom, #4CAF50, #45a049);
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e2e2e2;
    transition: background-color 0.3s ease;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: auto;
    border-radius: 8px;
    width: 200px;
}



    </style>
</head>

<body>
    <header>
        <h1>Welcome to the Collection page</h1>
    </header>
    <section id="resources" class="container">
        <div class="resource">
        <?php
        require '../Models/Collection.php';
        $newCollection = new Collection();
        $newCollection->displayCollection();
        ?>
        </div>
    </section>
</body>

</html>