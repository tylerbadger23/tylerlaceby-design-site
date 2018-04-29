<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">

    <meta name="description" content="Get professional web design solutions with tyler laceby design. I offer custom websites with responsive design and seo optimization in mind. Make your businesses more profitable">
    <meta name="keywords" content="PSD To HTML,seo,responsive,responsive design,design, ux, web design, web development">
    <meta name="author" content="Tyler Laceby">

    <title>Tylerlaceby | Web Design & Development</title>
</head>

<body>

    <header id="header-section">

    <?php  include "includes/nav.php";  ?>

        <div class="hero-bg clear-both">
            <div class="container conteiner-hero">
                <div class="hero-content-container clear-both">
                    <h1 class="hero-header">Hello I'm Tyler Laceby</h1>
                    <p>I’m a freelance web designer specializing in landing pages and custom web design solutions.</p>
                </div>
                <div class="hero-btn-container clear-both">
                    <a class="btn-two-hero " href="contact.php">Hire Me</a>
                    <a class="btn-two-hero" href="#clients">Learn More</a>
                </div>
            </div>
        </div>

    </header>


    <section id="clients">
        <h2>What I Do For my Clients</h2>
        <p>I help businesses reach their goals, whether that be by getting more sales through their store, increasing the number of inquiries or 
            getting more traffic to their site. I don't just design to make it look pretty. A big part of my job is to find solutions to problems clients have.
            </p>
    </section>

    <section id="check-out-work">
        <h2>Check Out My Work</h2>
        <div class="row-work">
            <div class="col-work1 col-work">
                <img src="assets/screen-game.png" alt="computer screen image of app/game website">
                <h3>Mobile App Landing Page</h3>
            </div>
            <div class="col-work2 col-work">
                <img src="assets/screen-glass.png" alt="computer screen image of glass company website homescreen">
                <h3 class="bottom-screen-text">Glass Cutting Company Website</h3>
            </div>
        </div>
    </section>

    <section id="comes-with">
        <h2>Every Website Comes With</h2>
        <div class="features-container">
            <div class="row-comes-with row-comes-with-first">
                <div class="img">
                    <img src="assets/responsive.png" alt="picture describing responsive design ">
                </div>
                <div class="text">
                    <h3>Responsive Design</h3>
                    <p>Your website will display beautifully and work fluently on desktop, tablet and mobile screens.</p>
                </div>
            </div>

            <div class="row-comes-with">
                <div class="img">
                    <img src="assets/convert.png" alt="picture of converting icon. looks like graph to increase sales">
                </div>
                <div class="text">
                    <h3>Built To Convert</h3>
                    <p>Your website will be built with one thing in mind...turning your clicks into new customers. </p>
                </div>
            </div>

            <div class="row-comes-with">
                <div class="img">
                    <img src="assets/eye.png" alt="picture describing modern design. eye icon.">
                </div>
                <div class="text">
                    <h3>Modern Design</h3>
                    <p>Your website will be designed using the latest trends and techniques for a great experience.</p>
                </div>
            </div>

            <div class="row-comes-with row-comes-with-last">
                <div class="img">
                    <img src="assets/calendar.png" alt="picture showing calendar with checkmark in center. shows that its seo optimized">
                </div>
                <div class="text">
                    <h3>Search Engine Optimized Content</h3>
                    <p>Your website will be more optimized for search engines, which will allow you to rank higher in search and be found easier.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="get-started">
        <h2 id="first-header">Lets Get Started</h2>

        <div class="row-started row-started-first">
            <div class="number">
                <h2>1.</h2>
            </div>
            <div class="header">
                <h3>Strategy & Planning</h3>
            </div>
            <div class="content">
                <p>We will start by talking over your problems with your current site and discuss what goals you have. Before we do 
                    anything else I have to understand what you want to accomplish with your new website and I need to learn more 
                    about your current brand. Then we will go over what assets you already have in place including images, logo, 
                    color palette, etc.</p>
            </div>
        </div>

        <div class="row-started">
            <div class="number">
                <h2>2.</h2>
            </div>
            <div class="header">
                <h3>Research & Design</h3>
            </div>
            <div class="content">
                <p>Research is a vital part of the process. Here I will collaborate with you and see what your competitors are doing 
                    and how we can do it better. We will also decide what not to do. I will see what you like from other websites and 
                    don't like and why. This gives me a good understanding of where the direction is going to go and what 
                    to keep in mind when designing the site.I will then turn these ideas and research into  wireframes and mockups. 
                    Here you will get a few revisions, and we will layout the structure of the website. Finally, I will turn that into a
                     high resolution wireframe. and with your approval  we will begin development.</p>
            </div>
        </div>

        <div class="row-started row-started-last">
            <div class="number">
                <h2>3.</h2>
            </div>
            <div class="header">
                <h3>Development & Deploy</h3>
            </div>
            <div class="content">
                <p>Development is where I take the design and translate it into a fully functional website. Here I will focus on
                     the search engine optimization and making the site fully responsive for all screen sizes. We will link it to 
                     your custom domain name and then deploy for the whole world to see.</p>
            </div>
        </div>
        <div class="row-get-started">
            <h4>Lets Work Together</h4>
            <a class="btn-get-started " href="contact.php">Contact</a>
        </div>

    </section>

    <?php  include "includes/footer.php"; ?>

</body>

</html>