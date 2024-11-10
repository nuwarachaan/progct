<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حاسبة الزكاة</title>
    <link rel="stylesheet" href="css/styles-zkat.css">
</head>
<body>
    <div class="calculator-container">
        <h1>حاسبة الزكاة</h1>
        <label for="zakahType">اختر نوع الزكاة:</label>
        <select id="zakahType" onchange="showOptions()">
            <option value="">-- اختر --</option>
            <option value="gold">زكاة الذهب</option>
            <option value="money">زكاة المال</option>
        </select>

        <div id="goldOptions" class="hidden">
            <h2>زكاة الذهب</h2>
            <label for="goldCarat">اختر نوع الذهب:</label>
            <select id="goldCarat" onchange="showGoldInput()">
                <option value="">-- اختر --</option>
                <option value="18">18 قيراط</option>
                <option value="21">21 قيراط</option>
                <option value="24">24 قيراط</option>
            </select>

            <div id="goldInput" class="hidden">
                <label for="goldWeight">أدخل وزن الذهب (بالجرام):</label>
                <input type="number" id="goldWeight" min="0" oninput="checkGoldWeight()">
                <p id="goldMessage" class="hidden"></p>
                <button id="calculateGold" class="hidden" onclick="calculateGold()">احسب الزكاة</button>
                <p id="goldResult" class="hidden"></p>
            </div>
        </div>

        <div id="moneyOptions" class="hidden">
            <h2>زكاة المال</h2>
            <label for="moneyAmount">أدخل مبلغ المال:</label>
            <input type="number" id="moneyAmount" min="0" oninput="checkMoneyAmount()">
            
            <label for="currency">اختر العملة:</label>
            <select id="currency">
                <option value="USD">دولار أمريكي</option>
                <option value="EUR">يورو</option>
                <option value="SAR">ريال سعودي</option>
                <option value="AED">درهم إماراتي</option>
                <!-- يمكنك إضافة المزيد من العملات هنا -->
            </select>
            
            <p id="moneyMessage" class="hidden"></p>
            <button id="calculateMoney" class="hidden" onclick="calculateMoney()">احسب الزكاة</button>
            <p id="moneyResult" class="hidden"></p>
        </div>
    </div>

    <script src="js/zakah.js"></script>
    <script>
