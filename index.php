<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>
</head>

<body>
    <header>
        <main class="group">
            <nav>
                <ul>
                    <a href="login.php"></a>
                    <a href="index.php"><li>Profile</li></a>
                    <a href="gallery.html"><li>Gallery</li></a>
                    <a href="diary_entry.html"><li>Diary</li></a>
                    <a href="diary_listing.html"><li>Diary Listing</li></a>                   
                </ul>
            </nav>
            <main class="nav-bottom">
                <main class="nav-bot-con"></main>
            </main>
        </main>
    </header>

    <section>
        <?php 
            session_start(); 

            if (!isset($_SESSION['username'])) {
                $_SESSION['msg'] = "You must log in first";
                header('location: login.php');
            }
            if (isset($_GET['logout'])) {
                session_destroy();
                unset($_SESSION['username']);
                header("location: login.php");
            }
        ?>

        

        <div class="image">
            <img src="img/kyle.jpg">
        </div>

        <div class="content">
            <h2>Profile</h2>
            <span><!-- line here --></span>
            <a style="font-size: large;">Kyle Clarence Deus<a><br>
            <a style="font-size: small;">He.22 y/o Live in Medina st. Aliaga Nueva Ecija<a><br>
            <a style="font-size: small;">3rd year South 2 BSIT student at<a><br>
            <a style="font-size: small;">PHINMA Araullo University South Campus Cabanatuan<a><br>
                <a style="font-size: large;">ABOUT MYSELF<a><br>
            <a style="font-size: small;">I always forget that self care works.<a><br>
             <a style="font-size: small;"> like oh yeah maybe if i clean my messy depression room<a><br>
               <a style="font-size: small;">i won’t be depressed about my room being messy<a><br>
            <ul class="links">
                <li><a href="gallery.html">Gallery</a></li>
                <div class="vertical-line"></div>
                <li><a href="diary_entry.html">Diary</a></li>
                <div class="vertical-line"></div>
                <li><a href="diary_listing.html">Diary Listing</a></li>
            </ul>

            <iframe width="300" height="200" src="https://www.youtube.com/embed/QVDAWDDMabA?si=uDuJe7Z8aFG_5Zha" frameborder="0"
                allowfullscreen></iframe>

            <audio src="path/to/your-music-file.mp3" autoplay loop></audio>

            <ul class="icons">
            </ul>
        </div>
    </section>
</body>

</html>
