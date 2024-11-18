<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Büşra Kara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="#about">Hakkımda</a>
            <a href="#skills">Beceriler</a>
            <a href="#portfolio">Portföy</a>
            <a href="#contact">İletişim</a>
        </nav>
    </header>

    <section class="hero">
        <img src="img/bg.jpg" alt="Arka Plan Görseli" class="content-image">
        <h1>Portföyüme Hoş Geldiniz</h1>
        <a href="#about" class="btn">Daha Fazla Bilgi</a>
    </section>

    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-text">
                <h2>Hakkımda</h2>
                <p>Ben, 2 yıldan fazla deneyimi olan bir web tasarımcısıyım. Amacım, estetik ve fonksiyonelliği bir araya getirerek kullanıcı deneyimini en üst düzeye çıkarmaktır.</p>
                <p>Responsive tasarım, marka kimliği oluşturma ve interaktif web deneyimleri uzmanlık alanlarım arasında. Sanatla ilgilenir, fotoğraf çeker ve kişisel projeler üzerinde çalışırım.</p>
                <a href="#portfolio" class="btn">Çalışmalarımı Gör</a>
            </div>
            <div class="about-image">
                <img src="img/about-photo.jpg" alt="Hakkımda Görseli">
            </div>
        </div>
    </section>

    <section id="skills" class="skills-section">
        <div class="skills-header">
            <h2>Beceriler</h2>
            <p>Kendi becerilerim, araçlar ve GitHub istatistiklerim</p>
        </div>
        <div class="skills-stats">
            <div class="github-stats">
                <img src="https://github-readme-stats.vercel.app/api?username=busrajkara&show_icons=true&theme=light&count_private=true&bg_color=FFFFFF&text_color=000000&icon_color=000000" alt="GitHub İstatistikleri">
            </div>
            <div class="github-languages">
                <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=busrajkara&layout=compact&theme=light&bg_color=FFFFFF&text_color=000000&icon_color=000000" alt="En Çok Kullanılan Diller">
            </div>
        </div>
        <div class="skills-details">
            <h3>Programlama Dilleri</h3>
            <div class="skills-list">
                <span class="badge" data-skill="HTML5" data-percent="95">HTML5</span>
                <span class="badge" data-skill="CSS3" data-percent="90">CSS3</span>
                <span class="badge" data-skill="JavaScript" data-percent="85">JavaScript</span>
                <span class="badge" data-skill="Python" data-percent="70">Python</span>
                <span class="badge" data-skill="PHP" data-percent="75">PHP</span>
                <span class="badge" data-skill="Java" data-percent="60">Java</span>
                <span class="badge" data-skill="SQL" data-percent="80">SQL</span>
            </div>
        </div>
        <div class="skills-details">
            <h3>Tasarım Araçları</h3>
            <div class="skills-list">
                <span class="badge" data-skill="Canva" data-percent="85">Canva</span>
                <span class="badge" data-skill="Adobe Photoshop" data-percent="75">Adobe Photoshop</span>
            </div>
        </div>
        <div class="skills-details">
            <h3>Derleyiciler ve Diğer Araçlar</h3>
            <div class="skills-list">
                <span class="badge" data-skill="XAMPP" data-percent="80">XAMPP</span>
                <span class="badge" data-skill="Docker" data-percent="70">Docker</span>
                <span class="badge" data-skill="Bootstrap" data-percent="85">Bootstrap</span>
                <span class="badge" data-skill="WordPress" data-percent="90">WordPress</span>
                <span class="badge" data-skill="SQL Server Management Studio" data-percent="75">SQL Server Management Studio</span>
                <span class="badge" data-skill="Microsoft Office" data-percent="95">Microsoft Office</span>
                <span class="badge" data-skill="OpenCart" data-percent="65">OpenCart</span>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section">
        <div class="portfolio-header">
            <h2>Portföy</h2>
            <p>En son projelerimi ve çalışmalarımı inceleyin.</p>
        </div>
        <div class="portfolio-grid" id="portfolio-grid-top"></div>
        <div class="portfolio-grid" id="portfolio-grid-bottom"></div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-header">
            <h2>İletişim</h2>
            <p>Bana aşağıdaki platformlardan ulaşabilirsiniz.</p>
        </div>
        <div class="contact-links">
            <a href="https://www.linkedin.com/in/b%C3%BC%C5%9Fra-kara-394aba317/" target="_blank" class="contact-item">
                <img src="img/linkedin-icon.png" alt="LinkedIn" class="contact-icon">
                <span>LinkedIn</span>
            </a>
            <a href="https://github.com/busrajkara" target="_blank" class="contact-item">
                <img src="img/github-icon.png" alt="GitHub" class="contact-icon">
                <span>GitHub</span>
            </a>
            <a href="mailto:busra.kara.3234@gmail.com" class="contact-item">
                <img src="img/email-icon.png" alt="Email" class="contact-icon">
                <span>busra.kara.3234@gmail.com</span>
            </a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Web Tasarımcı</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
