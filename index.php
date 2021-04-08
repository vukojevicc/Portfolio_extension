<?php
require __DIR__ . '/partials/header.php';
?>
<div class="overflow">

    <body>
        <header class="small-header header fixed" id="z-index">
            <div class="header-container" id="top">
                <img class="header-container-img" id="rotate-logo" src="imgs/logowhite.png" alt="logo">
                <?php include __DIR__ . '/partials/social-icons.php'; ?>
            </div>
        </header>
        <header class="main-header header">
            <div class="header-container">
                <img id="main-logo" class="header-container-img" src="" alt="logo">
                <ul class="navigation" id="main-menu">
                    <?php
                    include __DIR__ . '/partials/main-menu.php';
                    ?>
                    <div class="menu-btn">
                        <div class="menu-btn-burger"></div>
                    </div>
                </ul>
            </div>
            <aside class="side-menu">
                <ul>
                    <?php
                    include __DIR__ . '/partials/main-menu.php';
                    ?>
                </ul>
            </aside>
        </header>
        <div id="particles-js">
        </div>
        <main>
            <div class="main-container-technologies">
                <div class="technologies" id="technologies">
                    <div class="flex-heading">
                        <h1 class="technologies-heading">front end focused with <br>full stack experience</h1>
                    </div>
                    <div class="about-me-grid">
                        <div class="about-me-section fade">
                            <h2>
                                About me
                            </h2>
                            <p>
                                Hi! My name is Aleksandar, a tenacious programmer eager for new knowledge in the web development industry. I love writing JavaScript and PHP while randomly switching channels on <a href="https://www.youtube.com/watch?v=BD_guK9b64k" target="_blank">spinnin' tv live</a>.
                            </p>
                            <p>
                                When not working, I like to research into new, better and easier ways to implement my programming ideas, play basketball and enjoy life.
                            </p>
                        </div>
                        <div class="about-me-section about-me-section-img fade"><img src="imgs/me2.jpg" alt="My image"></div>
                        <div class="about-me-section fade">
                            <?php include __DIR__ . '/partials/basic-info.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="languages">
                <?php include __DIR__ . '/partials/languages.php'; ?>
            </div>
            <div class="flex-heading"><div class="technologies-heading">some of my projects</div></div>
            <section class="projects" id="projects">
                <a href="https://mihabodytec-batajnica.rs/" target="_blank" class="project fade"><img src="imgs/maciphonemiha.png" alt="project1"></a>
                <a href="http://dubinskopranjezemun.com/" target="_blank" class="project fade"><img src="imgs/dubinskosve.png" alt="project2"></a>
                <a href="http://airsoftforum.rs/" target="_blank" class="project fade"><img src="imgs/airsoft.png" alt="project3"></a>
                <a href="https://stakecasinobalkan.com/" target="_blank" class="project fade"><img src="imgs/stakecasino.png" alt="project4"></a>
            </section>
            <footer class="contact" id="contact">
                <div class="contact-heading-container">
                    <div class="contact-heading">Contact me</div>
                </div>
                <div class="footer-main">
                    <div class="box">
                        <div class="square" style="--i:0;"></div>
                        <div class="square" style="--i:1;"></div>
                        <div class="square" style="--i:2;"></div>
                        <div class="square" style="--i:3;"></div>
                        <div class="square" style="--i:4;"></div>
                    </div>
                    <div class="footer-container fade">
                        <form method="post" action="logika/posaljiporuku.php">
                            <div class="inputBox">
                                <input type="text" name="ime" placeholder="Name" value="<?php
                                if (isset($_COOKIE['name'])) {
                                    echo $_COOKIE['name'];
                                }
                                ?>">
                            </div>
                            <div class="inputBox">
                                <input type="text" name="email" placeholder="Email" value="<?php
                                if (isset($_COOKIE['email'])) {
                                    echo $_COOKIE['email'];
                                }
                                ?>">
                            </div>
                            <div class="inputBox">
                                <textarea name="poruka" cols="30" rows="10" placeholder="Leave a message!"></textarea>
                            </div>
                            <div id="error-wrapper">
                            </div>
                            <div class="inputBox checkbox-flex">
                                <label for="save_data">Remember me</label>
                                <input type="checkbox" name="save_data" id="save_data">
                            </div>
                            <div class="inputBox">
                                <div class="submit-hover">
                                    <input type="submit" name="submit" value="Send message" class="input-button">
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="copyrights">
                        2021. copyrights aleksandar &copy;. all rights reserved
                    </p>
                </div>
            </footer>
            <a href="#particles-js" id="jump-to-top" class="anchor-scroll">
                <i class="fas fa-rocket fa-2x"></i>
            </a>
            <!-- importing particles library -->
            <script src="js/particles.js"></script>
            <script src="js/app.js"></script>
            <!-- importing smooth scroll jQuery plugin -->
            <script src="js/jquery-scroll/jquery.anchorScroll.js"></script>
        </main>
    </body>
</div>

</html>