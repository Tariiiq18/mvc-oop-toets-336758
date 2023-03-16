<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulkaan Toets</title>
</head>
<body>
    <style>
    
    body {
    font-family:Georgia, 'Times New Roman', Times, serif;
    margin: 0;
    background-color:azure;
    padding: 0;
    }

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;  
    border-radius: 5px;
    background-color:aqua;
}

.title {
    text-align: center;
    color: green;
    margin-top: 2rem;
}

.link {
    display: inline-block;
    margin-bottom: 2rem;
    text-decoration: none;
    color: blue;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
}

.table th,
.table td {
    padding: 1rem;
    text-align: left;
    border: 1px solid #333;
    
}

.table thead {
    background-color:cornflowerblue;
}
</style>
    <div class="container">
        <h3 class="title"><?= $data['title']; ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam Vulkaan</th>
                    <th>Hoogte (in meters)</th>
                    <th>Land</th>
                    <th>Laatste Uitbarsting</th>
                    <th>Hoeveelheid Slachtoffers</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
