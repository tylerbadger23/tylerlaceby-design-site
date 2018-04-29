<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">

    <meta name="description" content="Get professional web design solutions with tyler laceby design. I offer custom websites with responsive design and seo optimization in mind. Make your businesses more profitable">
    <meta name="keywords" content="PSD To HTML,seo,responsive deisgn ,responsive development,services, web design">
    <meta name="author" content="Tyler Laceby">
    <title>Contact | Tylerlaceby | Design & Development</title>
</head>

<body>


    <header id="header">
        <?php  include "includes/nav.php";  ?>
    </header>

    <section id="work-together">
        <div class="container">
         <h2>Lets Work Together</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita doloremque ab placeat nulla fuga fugit excepturi 
             praesentium deserunt ea id officia vitae quod omnis, cumque doloribus blanditiis adipisci debitis dicta?</p>
        </div>
    </section>

    <section id="line-border"></section>

    <section>
        <div class="container">
            <div class="contact-form">
                <form action="contact.php" method='POST'>

                    <div class="input">
                        <label>Full Name<span class='red-text'>*</span></label>
                        <br>
                        <input type="text" name="fname" required>
                    </div>

                    <div class="input">
                        <label>Email<span class='red-text'>*</span></label>
                        <br>
                        <input type="email" name="email" required>
                    </div>

                    <div class="input">
                        <label>Description Of Your Project</label>
                        <br>
                        <textarea name="description"></textarea>
                    </div>

                    <div class="input">
                        <input type="submit" value="Submit" name="contactButton">
                    </div>

                </form>
            </div> <!-- contact form div end-->
        </div> <!-- end of container div -->
    </section>
    
    <?php  include "includes/footer.php"; ?>




</body>

</html>