<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>منصة أثر بأثر</title>
  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background-color: #f6f6f6;
      color: #333;
      margin: 0;
      padding: 0;
      direction: rtl;
    }
    header {
      background-color: #4d4d4d;
      color: white;
      padding: 1em;
      text-align: center;
    }
    nav {
      text-align: center;
      margin: 1em 0;
    }
    nav a {
      margin: 0 1em;
      text-decoration: none;
      color: #4d4d4d;
      font-weight: bold;
    }
    section {
      padding: 2em;
      background-color: white;
      margin: 1em;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    footer {
      background-color: #4d4d4d;
      color: white;
      text-align: center;
      padding: 1em;
      margin-top: 2em;
    }
    .logo {
      width: 80px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    input, textarea, button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: inherit;
    }
    button {
      background-color: #4d4d4d;
      color: white;
      cursor: pointer;
    }
    button:hover {
      background-color: #333;
    }
  </style>
</head>
<body>

  <header>
    <img src="logo.png" alt="شعار أثر" class="logo" />
    <h1>منصة أثر بأثر</h1>
    <p>أعد التدوير. أبدع. أدعم.</p>
  </header>

  <nav>
    <a href="#products">المنتجات</a>
    <a href="#donate">تبرع</a>
    <a href="#ai">الذكاء الاصطناعي</a>
    <a href="#team">فريق العمل</a>
    <a href="#contact">تواصل</a>
  </nav>

  <section id="intro">
    <h2>عن المشروع</h2>
    <p>منصة ذكية تستقبل تبرعات المواد القابلة لإعادة التدوير، وتحوّلها إلى منتجات فنية مبتكرة من إبداع أصحاب الهمم.</p>
  </section>

  <section id="products">
    <h2>منتجاتنا</h2>
    <ul>
      <li>حقائب صديقة للبيئة</li>
      <li>وسائد فنية</li>
      <li>لوحات جدارية</li>
      <li>ميداليات وأعمال خشبية</li>
    </ul>
  </section>

  <section id="donate">
    <h2>تبرع بالمواد</h2>
    <form id="donationForm">
      <label for="name">الاسم الكامل:</label>
      <input type="text" id="name" required>

      <label for="material">نوع المواد المتبرع بها:</label>
      <input type="text" id="material" required>

      <label for="message">ملاحظات إضافية:</label>
      <textarea id="message" rows="4"></textarea>

      <button type="submit">إرسال التبرع</button>
    </form>
    <p id="formResponse" style="color: green;"></p>
  </section>

  <section id="ai">
    <h2>دور الذكاء الاصطناعي</h2>
    <ul>
      <li>تحليل تفضيلات الزبائن</li>
      <li>اقتراح تصاميم مخصصة</li>
      <li>تشغيل مساعد افتراضي ذكي</li>
    </ul>
  </section>

  <section id="team">
    <h2>فريق أصحاب الهمم</h2>
    <p>يتكوّن فريقنا من مبدعين مهرة يعملون على تحويل النفايات إلى فن، باستخدام أدوات خياطة، وأجهزة كهربائية صديقة للبيئة.</p>
  </section>

  <section id="contact">
    <h2>تواصل معنا</h2>
    <p>📧 البريد الإلكتروني: info@athar.com</p>
    <p>📱 انستغرام: @athar_platform</p>
    <p>📍 الإمارات - مركز إعادة التدوير المجتمعي</p>
  </section>

  <footer>
    <p>جميع الحقوق محفوظة © أثر بأثر 2025</p>
  </footer>

  <script>
    document.getElementById('donationForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('name').value;
      const material = document.getElementById('material').value;

      document.getElementById('formResponse').textContent = `شكرًا يا ${name}! تم استلام تبرعك بـ "${material}".`;
      
      // Reset form
      document.getElementById('donationForm').reset();
    });
  </script>

</body>
</html>
