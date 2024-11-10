let goldPricePerGram = 0; // سعر الذهب لكل جرام

// استدعاء API للحصول على سعر الذهب
async function fetchGoldPrice() {
    try {
        const response = await fetch('https://www.goldapi.io/api/XAU/USD', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'x-access-token': 'goldapi-2wen00ksm38ziqb0-io' // استخدم مفتاح API الخاص بك هنا
            }
        });
        const data = await response.json();
        goldPricePerGram = data.price; // سعر الذهب لكل جرام
        console.log(`سعر الذهب لكل جرام: ${goldPricePerGram}`);
    } catch (error) {
        console.error('خطأ في جلب سعر الذهب:', error);
    }
}

fetchGoldPrice(); // استدعاء الدالة عند تحميل الصفحة

function showOptions() {
    const zakahType = document.getElementById("zakahType").value;
    document.getElementById("goldOptions").classList.add("hidden");
    document.getElementById("moneyOptions").classList.add("hidden");

    if (zakahType === "gold") {
        document.getElementById("goldOptions").classList.remove("hidden");
    } else if (zakahType === "money") {
        document.getElementById("moneyOptions").classList.remove("hidden");
    }
}

function showGoldInput() {
    const goldCarat = document.getElementById("goldCarat").value;
    document.getElementById("goldInput").classList.add("hidden");
    document.getElementById("goldMessage").classList.add("hidden");
    document.getElementById("goldResult").classList.add("hidden");
    document.getElementById("calculateGold").classList.add("hidden");

    if (goldCarat) {
        document.getElementById("goldInput").classList.remove("hidden");
    }
}

function checkGoldWeight() {
    const goldWeight = parseFloat(document.getElementById("goldWeight").value);
    const goldCarat = document.getElementById("goldCarat").value;
    let minimumWeight;

    if (goldCarat === "18") {
        minimumWeight = 133.33; // نصاب الذهب عيار 18
    } else if (goldCarat === "21") {
        minimumWeight = 97.15; // نصاب الذهب عيار 21
    } else if (goldCarat === "24") {
        minimumWeight = 24; // نصاب الذهب عيار 24
    }

    const messageElement = document.getElementById("goldMessage");
    const calculateButton = document.getElementById("calculateGold");

    if (goldWeight < minimumWeight && goldWeight > 0) {
        messageElement.textContent = "وزن الذهب أقل من النصاب وليس عليه زكاة.";
        messageElement.classList.remove("hidden");
        calculateButton.classList.add("hidden");
    } else if (goldWeight >= minimumWeight) {
        messageElement.classList.add("hidden");
        calculateButton.classList.remove("hidden");
    } else {
        messageElement.classList.add("hidden");
        calculateButton.classList.add("hidden");
    }
}

function calculateGold() {
    const goldWeight = parseFloat(document.getElementById("goldWeight").value);
    const goldCarat = document.getElementById("goldCarat").value;
    let zakatAmount;

    if (goldCarat === "18" || goldCarat === "21" || goldCarat === "24") {
        zakatAmount = goldWeight * 0.025; // حساب الزكاة
    }

    document.getElementById("goldResult").textContent = `مقدار الزكاة: ${zakatAmount.toFixed(2)} جرام من الذهب.`;
    document.getElementById("goldResult").classList.remove("hidden");
}

function checkMoneyAmount() {
    const moneyAmount = parseFloat(document.getElementById("moneyAmount").value);
    const minimumZakatAmount = goldPricePerGram * 85; // نصاب الزكاة يعادل 85 جرام ذهب
    const messageElement = document.getElementById("moneyMessage");
    const calculateButton = document.getElementById("calculateMoney");

    if (moneyAmount < minimumZakatAmount && moneyAmount > 0) {
               messageElement.textContent = "المبلغ أقل من نصاب الزكاة وليس عليه زكاة.";
        messageElement.classList.remove("hidden");
        calculateButton.classList.add("hidden");
    } else if (moneyAmount >= minimumZakatAmount) {
        messageElement.classList.add("hidden");
        calculateButton.classList.remove("hidden");
    } else {
        messageElement.classList.add("hidden");
        calculateButton.classList.add("hidden");
    }
}

function calculateMoney() {
    const moneyAmount = parseFloat(document.getElementById("moneyAmount").value);
    const minimumZakatAmount = goldPricePerGram * 85; // نصاب الزكاة يعادل 85 جرام ذهب
    const zakatAmount = moneyAmount * 0.025; // حساب الزكاة بنسبة 2.5%

    if (moneyAmount >= minimumZakatAmount) {
        document.getElementById("moneyResult").textContent = `مقدار الزكاة: ${zakatAmount.toFixed(2)} من العملة المختارة.`;
        document.getElementById("moneyResult").classList.remove("hidden");
    } else {
        document.getElementById("moneyResult").textContent = "لا يوجد زكاة على هذا المبلغ.";
        document.getElementById("moneyResult").classList.remove("hidden");
    }
}
