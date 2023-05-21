<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <nav class="navbar">
        <a href="#home" class="active" style="--t:0">Home</a>
        <a href="#about" style="--t:.1s">About</a>
        <a href="#services" style="--t:.2s">Services</a>
        <a href="#portfolio" style="--t:.3s">Portfolio</a>
        <a href="#contact" style="--t:.4s">Contact</a>
        </nav>
    </header>
    <section class="main_content" id="home">
        <div>
            <h3>
                Hello It's me!
            </h3>
            <h1>
                Baobab
            </h1>
            <h3>
                and I'm <span class="multiply-text"></span>
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, provident nihil dolorum deleniti labore optio commodi placeat omnis soluta dicta velit odit sunt, vero saepe id eligendi quaerat aliquam nostrum!
            </p>
            <div class="social">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
            <a href="#" class="bth">Donwload</a>
        </div>
        <div class="photo_wrapper">
            <div class="photo"></div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="photo_wrapper">
            <div class="photo"></div>
        </div>
        <div>
            <h3>Baobab - <span>Fronted developer</span></h3>
            <p> <span>Edication:</span>  Lorem ipsum dolor sit amet. </p>
            <p> <span> Work exp:</span>   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, natus.</p>
            <p> <span> Hobbies:</span>  Lorem ipsum dolor sit amet.</p>
        </div>
    </section>
    <section class="services" id="services">
            <h3>our <span>services</span></h3>
            <div class="services_wrapper">
                <div class="services_elem">
                    <i class="bx bx-code-alt"></i>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, laboriosam.</p>
                    <a href="#" class="bth">Read more</a>
                </div>
                <div class="services_elem">
                    <i class="bx bxs-paint"></i>
                    <h3>Graphic Design</h3>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, veritatis.</P>
                    <a href="#" class="bth">Read more</a>
                </div>
                <div class="services_elem">
                    <i class='bx bx-signal-4'></i>
                    <h3>Digital Marceting</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, quibusdam!</p>
                    <a href="#" class="bth">Read more</a>
                </div>
            </div>
    </section>
    <section class="portfolio" id="portfolio">
        <h3>Last <span>Projects</span></h3>
        <div class="portfolio_wrapper">
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="portfolio_elem">
                <div class="desc">
                    <a href="#"><i class='bx bx-link-external'></i></a>
                    <h5>Title</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h3>Write <span>ME!!!</span></h3>
        <form action="send.php" method="post">
            <div class="input_block">
                <input name="FIO" type="text" placeholder="Write Name" required>
                <input name="email" type="email" placeholder="Write E-mail" required>
            </div>
            <div class="input_block">
                <input name="phone" type="phone" placeholder="Write Phone" required>
                <input name="subject" type="text" placeholder="Write object" required>
            </div>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="bth" value="Отправить">
        </form>
    </section>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="main.js"></script>
</body>
</html>