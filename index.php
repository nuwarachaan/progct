<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع الفتاوى والمكتبة الدينية</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="theme-toggle">
            <input type="checkbox" id="theme-toggle"/>
            <div class="slider round">
                <i class="fas fa-sun"></i>
                <i class="fas fa-moon"></i>
            </div>
        </label>
    </div>

    <header>
        <div class="header-top">
            <div class="logo">
                <h1>موقع الفتاوى الإسلامية</h1>
            </div>
            <div class="search-box">
                <input type="text" placeholder="ابحث عن فتوى...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li><a href="fatwas.php"><i class="fas fa-book-open"></i> الفتاوى</a></li>
                <li><a href="zkat.php"><i class="fas fa-book-ssm"></i> حساب الزكاة </a></li>
                <li><a href="library.php"><i class="fas fa-mosque"></i> المكتبة الدينية</a></li>
                <li><a href="questions.php"><i class="fas fa-question-circle"></i> اسأل سؤالك</a></li>
                <li class="login"><a href="login.php"><i class="fas fa-user"></i> تسجيل الدخول</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="featured-section">
            <h2>أحدث الفتاوى</h2>
            <div class="fatwa-grid">
                <div class="fatwa-card">
                    <div class="fatwa-icon"><i class="fas fa-pray"></i></div>
                    <h3>أحكام الصلاة</h3>
                    <p>فتاوى متعلقة بالصلاة وأحكامها</p>
                    <a href="#" class="read-more">اقرأ المزيد</a>
                </div>
                <div class="fatwa-card">
                    <div class="fatwa-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h3>الزكاة والصدقات</h3>
                    <p>أحكام الزكاة والصدقات</p>
                    <a href="#" class="read-more">اقرأ المزيد</a>
                </div>
                <div class="fatwa-card">
                    <div class="fatwa-icon"><i class="fas fa-kaaba"></i></div>
                    <h3>الحج والعمرة</h3>
                    <p>فتاوى متعلقة بالحج والعمرة</p>
                    <a href="#" class="read-more">اقرأ المزيد</a>
                </div>
            </div>
        </div>

        <section class="quick-links">
            <h2>روابط سريعة</h2>
            <div class="links-grid">
                <a href="#" class="quick-link-card">
                    <i class="fas fa-book"></i>
                    <span>المكتبة الإسلامية</span>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-calendar-alt"></i>
                    <span>مواقيت الصلاة</span>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-quran"></i>
                    <span>القرآن الكريم</span>
                </a>
                <a href="#" class="quick-link-card">
                    <i class="fas fa-video"></i>
                    <span>محاضرات دينية</span>
                </a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>عن الموقع</h3>
                <p>موقع إسلامي يقدم الفتاوى والمحتوى الديني الموثوق</p>
            </div>
            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="#">اتصل بنا</a></li>
                    <li><a href="#">سياسة الخصوصية</a></li>
                    <li><a href="#">الشروط والأحكام</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>تابعنا</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 موقع الفتاوى الإسلامية. جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
