<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You - Zero to Hero Masterclass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #10182b; color: #fff; text-align: center; padding-top: 60px; }
        .thankyou-box { background: #fff; color: #222; border-radius: 16px; max-width: 420px; margin: 40px auto; padding: 36px 24px; box-shadow: 0 4px 24px #0002; }
        .thankyou-title { font-size: 2em; font-weight: bold; color: #e60000; margin-bottom: 18px; }
        .thankyou-msg { font-size: 1.2em; margin-bottom: 24px; }
        .whatsapp-btn { background: #25D366; color: #fff; font-size: 1.2em; font-weight: bold; border: none; border-radius: 8px; padding: 12px 32px; margin-top: 18px; display: inline-block; }
        .whatsapp-btn i { margin-right: 8px; }
    </style>
</head>
<body>
    <div class="thankyou-box">
        <div class="thankyou-title">Thank You For Registering!</div>
        <div class="thankyou-msg">
            आपकी रजिस्ट्रेशन सफल रही।<br>
            हमारी टीम जल्द ही आपसे संपर्क करेगी।<br>
            अधिक जानकारी और अपडेट्स के लिए हमारे व्हाट्सएप ग्रुप से जुड़ें।
        </div>
        <a href="https://wa.me/917054790790" target="_blank" class="whatsapp-btn">
            <i class="bi bi-whatsapp"></i> Join WhatsApp Now
        </a>
    </div>
    <script>
        // After 3 seconds, open WhatsApp in a new tab
        setTimeout(function(){
            window.open('https://wa.me/917054790790', '_blank');
        }, 3000);
    </script>
</body>
</html>
