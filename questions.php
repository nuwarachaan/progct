<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسأل سؤالك</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="question-container">
        <h2>ضع سؤالك وسنرد عليك في أقرب وقت إن شاء الله</h2>
        <form action="submit_question.php" method="POST">
            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="الاسم" required>
            </div>
            <div class="input-group">
                <textarea id="question" name="question" placeholder="اكتب سؤالك هنا" required></textarea>
            </div>
            <button type="submit" class="btn">إرسال السؤال</button>
        </form>
    </div>
</body>
</html>
