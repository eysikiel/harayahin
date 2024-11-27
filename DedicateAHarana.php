<html>
<head>
    <title>Harayahin</title>
    <link rel="stylesheet" href="DedicateAHarana.css">

    <!--FONTS USED-->
    <!--LOGO FONT (Qwigley)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <!--HEADER FONT (Qwitcher Grypen)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">

    <!--COMMON FONT (Sono)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@200..800&display=swap" rel="stylesheet">
</head>

<body>
    <div>
    <?php
     include 'navbar.php'
     
     ?>
    </div>
    <!-- <a href="navbar.html"></a> -->

    <!--MAIN SECTION-->
    <h1>Dedicate a Harana</h1>
    
   <!--SONG SECTION-->
   <div class="song-card">
    <div class="song-search">
        <input type="text" id="songQuery" placeholder="🔍 Search for a song">
        <button type="button" onclick="searchSong()">Search</button>
    </div>
    <div id="songResults"></div>
</div>

<div class="added-songs">
    <h3>Added Songs:</h3>
    <div id="selectedSongs"></div> <!-- This will be updated dynamically -->
</div>


            <div class="upload-option">
                <label>🎙️ Sing your own harana? Upload a file here: </label>
                <input type="file">
            </div>
        </div>
        
    <!--DEDICATION FORM-->
        <form class="dedication-form">
            <label for="to">To:</label>
            <input type="text" id="to" name="to" placeholder="Recipient's name">
          
            <label for="from">From:</label>
            <input type="text" id="from" name="from" placeholder="Your name">
          
            <label for="message">Attach a Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Write your message here..."></textarea>

    <!--FORM BUTTONS-->
            <div class="form-footer">
                <div class="send">
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
</body>
</html> 