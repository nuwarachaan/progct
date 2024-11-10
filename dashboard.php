<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>لوحة التحكم</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1>لوحة التحكم</h1>
    </header>
    <main>
        <h2>مرحبا، <?php echo $_SESSION['username']; ?>!</h2>
        <nav>
            <ul>
                <li><a href="add_content.php">إضافة محتوى</a></li>
                <li><a href="delete_content.php">حذف محتوى</a></li>
                <li><a href="logout.php">تسجيل الخروج</a></li>
            </ul>
        </nav>
    </main>
    <footer>
        <p>&copy; 2024 موقع الفتاوى والمكتبة الدينية</p>
    </footer>
</body>
</html>

