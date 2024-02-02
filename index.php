<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsife.css">
    <title>Portfolio Dewa</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="pesan.php">Pesan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="home">
            <?php $gambarUrl = "/assets/e.png"; ?>
            <img src="<?php echo $gambarUrl; ?>" class="foto" width="520px">
            <div class="contain1">
                <h3 class="itro">Hi, I'm</h3>
                <h1 class="itro2">Anggara Pratama</h1>
                <p class="p1">"As a dedicated student in the field of Computer Technology, I am passionate about
                    self-learning and eager to explore areas such as Computer Networks,
                    Cloud Computing, DevOps, and Web Development. Currently seeking opportunities to gain more hands-on
                    experience and further enhance my skills in these domains."</p>    
                <a href="https://github.com/your_username">
                    <i class="fab fa-github-square social"></i></a>
                <a href="https://www.linkedin.com/in/your_username">
                    <i class="fab fa-linkedin social"></i> </a>
                <a href="https://www.instagram.com/your_username/">
                    <i class="fab fa-instagram social"></i> </a>
            </div>
        </section>

        <section id="skills">
            <div class="containerw">
                <p class="p3">Skills</p>
                <p class="p2">Here some of my skills</p>
            </div>
            <div class="card-container">
                <a href="#" class="card">
                    <?php $icon1Url = "/assets/linux-22615.png"; ?>
                    <img class="icon" src="<?php echo $icon1Url; ?>" width="100px">
                  <span class="card__footer">
                    <span class="Linux">Linux</span>
                    <span class="p4">5 month experience</span>
                  </span>
                </a>
                <a href="#" class="card">
                    <?php $icon2Url = "/assets/docker.png"; ?>
                    <img class="icon2" src="<?php echo $icon2Url; ?>" width="125px">
                  <span class="card__footer">
                    <span class="Linux">Docker</span>
                    <span class="p4">1 month experience</span>
                  </span>
                </a>
                <a href="#" class="card">
                    <?php $icon3Url = "/assets/k.png"; ?>
                    <img class="icon3" src="<?php echo $icon3Url; ?>" width="130px">
                  <span class="card__footer">
                    <span class="Linux">Alibaba</span>
                    <span class="p4">1 month experience</span>
                  </span>
                </a>
            </div>
        </section>

        <section id="certifications">
            <div class="containerw2">
                <p class="p6">Certifications</p>
                <p class="p0">Here some of my certifications</p>
            </div>
            <div class="certi-card">
                <div class="certi-card">
                    <a href="https://adinusa.id/course/publisher/show/b5b6cdde-3ac4-43bf-8640-87c696ef3f70" class="certi">
                        <?php $sertif1Url = "/assets/AnggaraPratama.png"; ?>
                        <img class="sertif" src="<?php echo $sertif1Url; ?>" width="250px">
                        <span class="certi1">Linux System Administration</span>
                        <span class="p9">Issued by Adinusa</span>
                    </a>
                </div>
                <div class="certi-card">
                    <a href="https://www.dicoding.com/certificates/GRX521QR3X0M" class="certi">
                        <?php $sertif2Url = "/assets/jaringan.png"; ?>
                        <img class="sertif" src="<?php echo $sertif2Url; ?>" width="250px">
                        <span class="certi1">Jaringan Komputer Pemula</span>
                        <span class="p9">Issued by Dicoding</span>
                    </a>
                </div>
                <div class="certi-card">
                    <a href="https://www.dicoding.com/certificates/EYX4Y5MQRZDL" class="certi">
                        <?php $sertif3Url = "/assets/devops.png"; ?>
                        <img class="sertif" src="<?php echo $sertif3Url; ?>" width="250px">
                        <span class="certi1">Dasar-Dasar DevOps</span>
                        <span class="p9">Issued by Dicoding</span>
                    </a>
                </div>
                <div class="certi-card">
                    <a href="https://www.dicoding.com/certificates/JMZV18LWOXN9" class="certi">
                        <?php $sertif4Url = "/assets/web.png"; ?>
                        <img class="sertif" src="<?php echo $sertif4Url; ?>" width="250px">
                        <span class="certi1">Dasar Pemrograman Web</span>
                        <span class="p9">Issued by Dicoding</span>
                    </a>
                </div>
                <div class="certi-card">
                    <a href="https://www.dicoding.com/certificates/1OP813VJ8ZQK" class="certi">
                        <?php $sertif5Url = "/assets/logic.png"; ?>
                        <img class="sertif" src="<?php echo $sertif5Url; ?>" width="250px">
                        <span class="certi1">Pemrograman Logic 101</span>
                        <span class="p9">Issued by Dicoding</span>
                    </a>
                </div>
                <div class="certi-card">
                    <a href="https://www.dicoding.com/certificates/N9ZO516NRPG5" class="certi">
                        <?php $sertif6Url = "/assets/data.png"; ?>
                        <img class="sertif" src="<?php echo $sertif6Url; ?>" width="250px">
                        <span class="certi1">Dasar Visualisasi Data</span>
                        <span class="p9">Issued by Dicoding</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Portfolio Dewa. All rights reserved.</p>
    </footer>
</body>
</html>
