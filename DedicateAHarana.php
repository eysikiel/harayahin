<html >
<head>
    <title>Harayahin</title>
    <link rel="stylesheet" href="DedicateAHarana.css">

    <!-- FONTS USED -->
    <!-- LOGO FONT (Qwigley) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <!-- HEADER FONT (Qwitcher Grypen) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">

    <!-- COMMON FONT (Sono) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@200..800&display=swap" rel="stylesheet">

</head>
<body>
    <!-- NAVBAR -->
<?php
     include 'navbar.php'
     ?>
    </div>
    <!-- <a href="navbar.html"></a> -->

    <!-- MAIN SECTION -->
    <h1>Dedicate a Harana</h1>
    
    <!-- SONG SECTION -->
    <div class="song-card">

        <div class="song-search">
            <form id="songSearchForm" action="searchsong.php" method="get" onsubmit="event.preventDefault();">
                <input type="text" id="songSearch" name="q" placeholder="🔍 Search for a song" required>
                <button id="searchButton" type="button">Search</button>
            </form>   
            <div class="results" id="searchResults">
                <!-- Search results from searchsong.php will be displayed here -->
            </div>
        </div>

        <div class="upload-option">
            <label>🎙️ Sing your own harana? Upload a file here: </label>
            <input type="file">
        </div>
    </div>
    
    <!-- ADDED SONG SECTION -->
    <div id="song-card-container">
        <!-- Song Card Section where added songs will be displayed -->
    </div>
                
    <!-- DEDICATION FORM -->
    <form class="dedication-form">
        <label for="to">To:</label>
        <input type="text" id="to" name="to" placeholder="Recipient's name">
      
        <label for="from">From:</label>
        <input type="text" id="from" name="from" placeholder="Your name">
      
        <label for="message">Attach a Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Write your message here..."></textarea>

        <!-- FORM BUTTONS -->
        <div class="form-footer">
            <div class="send">
                <button type="submit">Send</button>
            </div>
        </div>
    </form>

    <!-- Include the script for adding songs dynamically -->
    <script>
        // Function to add song to the song card section
        function addSong(trackName, artistName, trackUrl) {
            const songCardContainer = document.getElementById("song-card-container");

            // Check if the song is already added to avoid duplicates
            const existingSongs = songCardContainer.querySelectorAll("p");
            for (let song of existingSongs) {
                if (song.textContent === `${trackName} by ${artistName}`) {
                    return; // Song is already added, no need to add again
                }
            }

            const songCard = document.createElement("div");
            songCard.classList.add("song-card");

            const songTitle = document.createElement("p");
            songTitle.textContent = `${trackName} by ${artistName}`;

            const iframe = document.createElement("iframe");
            iframe.src = trackUrl;
            iframe.allowTransparency = "true";
            iframe.allow = "encrypted-media";

            songCard.appendChild(songTitle);
            songCard.appendChild(iframe);

            // Add the song card to the container
            songCardContainer.appendChild(songCard);

            // Remove the song from the search results
            const results = document.getElementById("searchResults");
            results.innerHTML = ''; // Clear the search results after adding the song
        }

        document.getElementById("searchButton").addEventListener("click", function() {
            const query = document.getElementById("songSearch").value.trim();
            
            if (!query) {
                alert("Please enter a search term.");
                return;
            }

            // Make an AJAX request to searchsong.php
            fetch(`searchsong.php?q=${encodeURIComponent(query)}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById("searchResults").innerHTML = data;
                })
                .catch(error => {
                    console.error("Error fetching search results:", error);
                });
        });
    </script>
</body>
</html>
