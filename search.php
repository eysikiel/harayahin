<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for Your Song</title>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="search.css">
</head>
<body>

    <div>
        <?php
         include 'navbar.php'
         
         ?>
        </div>
        <!-- <a href="navbar.html"></a> -->
    
        <h1>Find your Harana</h1>

    <div class="main-container">
        <div class="search-bar">
            <form action="search_results.html" method="GET">
                <input type="text" name="name" placeholder="Enter recipient's name..." class="search-input" required>
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </div>
</body>
</html>
