<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum's Collection</title>
    <link rel="icon" href="../Data/Untitled (1).png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
    font-family: 'Fjalla One', sans-serif;
    font-size: 18px;
    text-align: center;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 12px; 
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: #333; 
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f9f9f9; 
}

img {
    max-width: 100%;
    height: auto;
    margin: auto;
    border-radius: 8px;
    width: 200px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease; 
}

img:hover {
    transform: scale(1.05); /* Enlarge image on hover for a dynamic effect */
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
            $newCollection->Display();
            ?>
        </div>
    </section>
</body>

</html>