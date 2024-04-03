<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="nav.css">
    
</head>

<body>
    <?php
    include_once("nav.php");
    ?>
    <section>
        <div class="main">
            <img src="img/main.avif" alt="main img">
            <h1>
                pro interior designers
            </h1>
            <p>You will really enjoy doing business with us! we offer competitive price. We save you time and money. Interested? Check out our work.</p>
            <div class="btn-group">
                <div>
                    <button class="btn">book now</button>
                </div>
                <div>
                    <button class="btn">explore more</button>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h2>explore us</h2>
        <p>Our experienced workers are highly trained in all aspects of electrical service, painting, housekeeping, plumbing office lighting, security systems to emergency repair and many more.</p>
        <div class="grid-container">
            <div class="img-box">
                <img src="img/img1.jpeg" alt="img" class="grid-img img1">
            </div>
            <div class="img-box">
                <img src="img/img2.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box">
                <img src="img/img3.jpg" alt="img" class="grid-img img3">
            </div>
            <div class="img-box">
                <img src="img/img4.jpg" alt="img" class="grid-img img4">
            </div>
            <div class="img-box">
                <img src="img/img5.jpg" alt="img" class="grid-img img5">
            </div>
            <div class="img-box">
                <img src="img/img6.jpg" alt="img" class="grid-img img1">
            </div>
            <div class="img-box">
                <img src="img/img7.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box">
                <img src="img/img8.webp" alt="img" class="grid-img img3"></div>
            <div class="img-box">
                <img src="img/img9.webp" alt="img" class="grid-img img5">
            </div>
            <div class="img-box">
                <img src="img/img10.avif" alt="img" class="grid-img img1">
            </div>
            <div class="img-box">
                <img src="img/img11.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box">
                <img src="img/img12.jpg"
                    alt="img" class="grid-img img4">
            </div>
        </div>
    </section>

    <section class="js-gallery">
        <h2>see more of our work</h2>
        <p> Our gallery includes snapshots of our workspaces, events, and daily activities that contribute to the dynamic and positive atmosphere.</p>
    <div class="js-img-wrapper">
        <div class="main-img">
            <img src="img/ppl1.jpg" alt="" class="main main-img" id="main-img">
        </div>
        <div class="sub-img">
            <img src="img/ppl1.jpg" alt="" class="main" onclick="changeImg('img/ppl1.jpg')">
            <img src="img/ppl8.avif" alt="" class="main md-img" onclick="changeImg('img/ppl8.avif')">
            <img src="img/ppl3.jpg" alt="" class="main md-img" onclick="changeImg('img/ppl3.jpg')">
            <img src="img/ppl4.jpg" alt="" class="main" onclick="changeImg('img/ppl4.jpg')">
        </div>
        <div class="sub-img">
            <img src="img/ppl5.webp" alt="" class="main" onclick="changeImg('img/ppl5.webp')">
            <img src="img/ppl6.webp" alt="" class="main md-img" onclick="changeImg('img/ppl6.webp')">
            <img src="img/ppl7.jpg" alt="" class="main md-img" onclick="changeImg('img/ppl7.jpg')">
            <img src="img/ppl10.jpg" alt="" class="main" onclick="changeImg('img/ppl10.jpg')">
        </div>
        <p style="margin:20px;">*click on image for better view</p>
    </div>
    </section>


    <script>
        
        function changeImg(getImg){
            var img = document.getElementById('main-img');
            img.src=getImg;
        }
        
    </script>
    <?php include_once("footer.php");?>
</body>

</html>