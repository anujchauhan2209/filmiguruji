<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zero to Hero Masterclass</title>
    <!-- Add Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #10182b;
            color: #fff;
        }
        .top-bar {
            background: #b3001b;
            color: #fff;
            text-align: center;
            padding: 8px 0;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .offer-bar {
            background: #fff;
            color: #b3001b;
            text-align: center;
            margin: 30px auto 0 auto;
            padding: 10px 0;
            width: 60%;
            border-radius: 12px;
            font-size: 1.4em;
            font-weight: bold;
            border: 3px solid #b3001b;
            box-shadow: 0 2px 12px #0001;
        }
        .main-content {
            text-align: center;
            margin-top: 30px;
        }
        .main-heading {
            font-size: 2.2em;
            font-weight: bold;
            line-height: 1.3;
        }
        .main-heading .red {
            color: #e53935;
        }
        .main-heading .bold {
            font-weight: bold;
        }
        .sub-heading {
            font-size: 1.2em;
            margin: 18px 0 10px 0;
            color: #ffe600;
            font-style: italic;
        }
        .video-container {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }
        .video-frame {
            border: 4px solid #e53935;
            border-radius: 12px;
            overflow: hidden;
            width: 480px;
            height: 270px;
            background: #000;
            box-shadow: 0 2px 12px #0002;
        }
        .register-btn {
            background: linear-gradient(90deg,#e60000,#ff6600);
            color: #fff;
            font-size: 1.3em;
            font-weight: bold;
            padding: 16px 48px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 18px;
            transition: background 0.2s;
            box-shadow: 0 2px 12px #e6000033;
        }
        .register-btn:hover {
            background: linear-gradient(90deg,#ff6600,#e60000);
        }
        .section-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #0001;
            margin-bottom: 32px;
            padding: 32px 18px 40px 18px;
        }
        .section-title {
            font-size: 2em;
            font-weight: 900;
            color: #101820;
            font-family: Arial,sans-serif;
            margin-bottom: 18px;
            text-align: center;
        }
        .owl-carousel .item {
            padding: 8px;
        }
        .owl-carousel .item img {
            border-radius: 10px;
            box-shadow: 0 2px 12px #0002;
        }
        .open-register-modal-btn {
            transition: box-shadow 0.2s;
        }
        .open-register-modal-btn:hover {
            box-shadow: 0 4px 16px #e6000033;
        }
        .faq-section .accordion-button {
            font-size: 1.1em;
            font-weight: 600;
        }
        .faq-section .accordion-body {
            background: #f9f9f9;
            color: #222;
        }
        .faq-section .accordion-item {
            border-radius: 8px;
            margin-bottom: 8px;
            overflow: hidden;
        }
        .faq-section .accordion-button:not(.collapsed) {
            background: #ffe6e6;
            color: #e60000;
        }
        @media (max-width: 700px) {
            .offer-bar, .video-frame { width: 98vw !important; }
            .main-heading { font-size: 1.2em; }
            .section-card { padding: 18px 2vw 24px 2vw; }
        }
        @media (max-width: 400px) {
            .register-btn { font-size: 1em; padding: 10px 2vw; }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>

    <div class="top-bar">
        LIMITED TIME OFFER: JOIN OUR WEBINAR TODAY FOR <span style="color: #ffe600;">RS. 99</span> !
    </div>
    <!-- Main Content with Background Image -->
    <div class="container mt-4">
        <div class="offer-bar mb-4">
            Live 2 Hrs में जानिए "Zero to Hero" बनने की PROVEN Strategy
        </div>
        <div class="section-card" style="background:rgba(16,24,43,0.75);">
            <div class="main-content">
                <div class="main-heading">
                    सीखिए कैसे आप घर बैठे एक सफल <span class="red">ACTOR</span> बन सकते हैं<br>
                    BOLLYWOOD में बिना किसी <span class="red">GODFATHER</span> के IN FILM INDUSTRY
                </div>
                <div class="sub-heading">
                    Learn <span class="bold">Film Industry Entry Model In Hindi</span> By Radhe.
                </div>
                <div class="video-container">
                    <div class="video-frame">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/your_video_id_here" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <form class="open-register-modal-form mt-3">
                    <button class="register-btn open-register-modal-btn" type="button">➤ Register Now</button>
                </form>
            </div>
        </div>
    </div>
    <!-- My Acting Work Section -->
    <div class="container section-card">
        <div class="section-title">My Acting Work</div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-5.webp" alt="Acting Work 1" style="width:100%; border-radius:8px;">
                </div>
            </div>
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-6.webp" alt="Acting Work 2" style="width:100%; border-radius:8px;">
                </div>
            </div>
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-7.webp" alt="Acting Work 3" style="width:100%; border-radius:8px;">
                </div>
            </div>
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-8.webp" alt="Acting Work 4" style="width:100%; border-radius:8px;">
                </div>
            </div>
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-9.webp" alt="Acting Work 5" style="width:100%; border-radius:8px;">
                </div>
            </div>
            <div class="item">
                <div style="background:#000; border-radius:10px; box-shadow:0 2px 12px #0002; padding:8px;">
                    <img src="images/Acting-Crasoul-Pic-12.webp" alt="Acting Work 6" style="width:100%; border-radius:8px;">
                </div>
            </div>
           </div>
    </div>
    <!-- End My Acting Work Section -->

    <!-- Live Masterclass Steps Section -->
    <div style="background:#fff; padding: 40px 0 60px 0;">
        <div style="text-align:center; margin-bottom: 38px;">
            <span style="font-size:2.8em; font-family:'Mangal',Arial,sans-serif; color:#222; font-weight:400;">
                इस <span style="color:#ff3c00;">Live Masterclass</span> में सीखिए
            </span>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px 28px; max-width:1100px; margin:0 auto;">
            <!-- Step 1 -->
            <div style="background:#1a1316; color:#fff; border-radius:12px; box-shadow:0 8px 32px #0002; width:300px; padding:28px 18px; text-align:center;">
                <div style="font-size:2em; font-weight:700; color:#ff3c00; margin-bottom:8px;">Step #1</div>
                <div style="font-size:1.25em; font-weight:600; margin-bottom:10px;">Your Acting Journey</div>
                <div style="font-size:1em; color:#fff;">
                    कैसे आप घर बैठे अपनी Acting जर्नी को शुरू कर सकते हैं वह भी बहुत ही अफोर्डेबल प्राइस पर बिना लाखों रुपये खर्च किए。
                </div>
            </div>
            <!-- Step 2 -->
            <div style="background:#1a1316; color:#fff; border-radius:12px; box-shadow:0 8px 32px #0002; width:300px; padding:28px 18px; text-align:center;">
                <div style="font-size:2em; font-weight:700; color:#ff3c00; margin-bottom:8px;">Step #2</div>
                <div style="font-size:1.25em; font-weight:600; margin-bottom:10px;">Best Acting Tools & Techniques</div>
                <div style="font-size:1em; color:#fff;">
                    कैसे आप Best Acting टेक्निक्स का बेहतरीन तरीके से इस्तेमाल करके, एक Versatile और एक शानदार ACTOR बन सकते हैं。
                </div>
            </div>
            <!-- Step 3 -->
            <div style="background:#1a1316; color:#fff; border-radius:12px; box-shadow:0 8px 32px #0002; width:300px; padding:28px 18px; text-align:center;">
                <div style="font-size:2em; font-weight:700; color:#ff3c00; margin-bottom:8px;">Step #3</div>
                <div style="font-size:1.25em; font-weight:600; margin-bottom:10px;">Audition Hack</div>
                <div style="font-size:1em; color:#fff;">
                    कैसे आप Audition के लिए अप्लाई करें, कैसे आप उसे Confidently क्रैक करें。
                </div>
            </div>
            <!-- Step 4 -->
            <div style="background:#1a1316; color:#fff; border-radius:12px; box-shadow:0 8px 32px #0002; width:300px; padding:28px 18px; text-align:center;">
                <div style="font-size:2em; font-weight:700; color:#ff3c00; margin-bottom:8px;">Step #4</div>
                <div style="font-size:1.25em; font-weight:600; margin-bottom:10px;">Film Industry Entry Blueprint</div>
                <div style="font-size:1em; color:#fff;">
                    कैसे आप Film Industry में अपना लिंक क्रिएट कर सकते हैं और अपना इनफ्लुएंस बिल्ड कर सकते हैं。
                </div>
            </div>
            <!-- Step 5 -->
            <div style="background:#1a1316; color:#fff; border-radius:12px; box-shadow:0 8px 32px #0002; width:300px; padding:28px 18px; text-align:center;">
                <div style="font-size:2em; font-weight:700; color:#ff3c00; margin-bottom:8px;">Step #5</div>
                <div style="font-size:1.25em; font-weight:600; margin-bottom:10px;">Casting Director's Hack Blueprint</div>
                <div style="font-size:1em; color:#fff;">
                    कैसे आप Casting Director’s को अप्रोच कर उन्हें इंप्रेस करेंगे और Bollywood में एंट्री करके, अपने सपनों को पूरा करेंगे, उसका पूरा Blueprint आपके साथ शेयर किया जाएगा。
                </div>
            </div>
        </div>
    </div>
    <!-- End Steps Section -->

    <!-- Bonuses Section -->
    <div style="background:#101820; padding: 50px 0 30px 0;">
        <div style="text-align:center; margin-bottom:38px;">
            <span style="font-size:2em; color:#fff; font-family:'Mangal',Arial,sans-serif; font-weight:400;">
                इस <span style="color:#ff3c00;">MASTERCLASS WEBINAR</span> में आपको,
                <span style="color:#ff3c00;">5 BONUSES</span> मिलेंगे, जो आपकी जिंदगी बदल देंगे !
            </span>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px 28px; max-width:1200px; margin:0 auto 40px auto;">
            <img src="images/Acting-school-Bonus-1.webp" alt="Bonus 1" style="width:340px; max-width:95%; border-radius:10px; box-shadow:0 8px 32px #0003;">
            <img src="images/Acting-school-Bonus-2.webp" alt="Bonus 2" style="width:340px; max-width:95%; border-radius:10px; box-shadow:0 8px 32px #0003;">
            <img src="images/Acting-school-Bonus-3.webp" style="width:340px; max-width:95%; border-radius:10px; box-shadow:0 8px 32px #0003;">
        </div>
        <div style="display:flex; justify-content:center; margin-top:18px;">
            <div class="open-register-modal-btn" tabindex="0" role="button" style="background:#ff5c1a; color:#fff; font-size:1.5em; font-weight:700; padding:18px 38px; border-radius:8px; text-align:center; box-shadow:0 4px 16px #0003; cursor:pointer;">
        <span style="font-size:1.1em;">&#10148; DON'T MISS OUT – REGISTER NOW</span><br>
        <span style="font-size:0.8em; font-weight:400; display:block; margin-top:6px;">
            🎁 ₹1499 की मास्टरक्लास अब सिर्फ ₹99 में!
        </span>
    </div>
        </div>
    </div>
    <!-- End Bonuses Section -->

    <!-- Are You Facing Section -->
    <div style="background:#fff; padding:40px 0 0 0;">
        <div style="text-align:center; font-size:2.5em; font-weight:700; color:#101820; letter-spacing:1px; margin-bottom:30px;">
            ARE YOU <span style="color:#e53935;">FACING</span>
        </div>
        <div style="display:flex; flex-direction:column; align-items:center; gap:18px;">
            <div style="background:#111; color:#fff; border-radius:10px; width:480px; max-width:95%; padding:14px 18px; font-size:1.2em; text-align:left; display:flex; align-items:center; gap:10px;">
                <span style="font-size:1.3em;">😳</span>
                <span>Acting ki Sahi Training & Guidance.</span>
            </div>
            <div style="background:#111; color:#fff; border-radius:10px; width:480px; max-width:95%; padding:14px 18px; font-size:1.2em; text-align:left; display:flex; align-items:center; gap:10px;">
                <span style="font-size:1.3em;">😳</span>
                <span>Upcoming Audition Updates</span>
            </div>
            <div style="background:#111; color:#fff; border-radius:10px; width:480px; max-width:95%; padding:14px 18px; font-size:1.2em; text-align:left; display:flex; align-items:center; gap:10px;">
                <span style="font-size:1.3em;">😳</span>
                <span>Confused Between "Theatre & Camera" Acting.</span>
            </div>
            <div style="background:#111; color:#fff; border-radius:10px; width:480px; max-width:95%; padding:14px 18px; font-size:1.2em; text-align:left; display:flex; align-items:center; gap:10px;">
                <span style="font-size:1.3em;">😳</span>
                <span>Getting Stereo type Roles & No call backs after Audition.</span>
            </div>
        </div>
        <div style="display:flex; justify-content:center; margin:38px 0 0 0;">
            <div style="background:#f4431c; color:#fff; font-size:1.4em; font-weight:700; padding:18px 24px; border-radius:8px; text-align:center; max-width:600px; width:100%;">
                <span style="font-size:1.2em;">😟 NO TIME FOR JOINING EXPENSIVE ACTING SCHOOL ARE THEATER INSTITUTE.</span><br>
                <span style="font-size:0.85em; font-weight:400; display:block; margin-top:6px;">
                    I'M READY TO BOOST MY ACTING CARRIER BOOK YOUR FREE SPOT
                </span>
            </div>
        </div>
        <div style="display:flex; justify-content:center; margin:38px 0 0 0;">
            <div style="background:#111; border:2px solid #e53935; border-radius:16px; padding:32px 24px 24px 24px; max-width:700px; width:100%; text-align:center;">
                <div style="color:#ff3c00; font-size:2em; font-weight:700; margin-bottom:10px;">
                    अभी रजिस्टर करें, यदि आप MOVIE, WEBSERIES, TV और AD FILMS में काम करना चाहते हैं。
                </div>
                <!-- Are You Facing Section: BOOK YOUR SPOT NOW (already handled) -->
<form action="register.php" method="get" class="open-register-modal-form" style="margin-top:10px;">
    <button type="button" class="open-register-modal-btn" style="background:#e53935; color:#fff; font-size:1.3em; font-weight:700; padding:14px 48px; border:none; border-radius:8px; cursor:pointer;">
        BOOK YOUR SPOT NOW
    </button>
</form>
            </div>
        </div>
        <div style="height:40px;"></div>
    </div>
    <!-- End Are You Facing Section -->

    <!-- Testimonial Section -->
    <div style="background:#fff; padding:50px 0 30px 0;">
        <div style="text-align:center; margin-bottom:18px;">
            <span style="background:#ff2d2d; color:#fff; font-size:2em; font-weight:900; padding:2px 10px; border-radius:4px;">
                DON'T JUST TAKE MY WORD FOR IT
            </span>
        </div>
        <!-- New Video Testimonial Section -->
        <div style="text-align:center; margin: 40px 0 32px 0;">
            <span style="font-size:2em; color:#e53935; font-weight:700; font-family:Arial,sans-serif;">
                <b>See What Our Aspiring Actors have to Say about <i>Us</i></b>
            </span>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px 28px; max-width:1200px; margin:0 auto 40px auto;">
            <div style="border:2px solid #2196f3; border-radius:6px; overflow:hidden; width:260px; background:#000;">
                <img src="images/vishal.jpg" alt="Vishal" style="width:100%; display:block;">
                <div style="background:#d50032; color:#fff; font-size:1.2em; font-weight:700; text-align:center; padding:6px 0;">
                    Vishal
                </div>
            </div>
            <div style="border:2px solid #2196f3; border-radius:6px; overflow:hidden; width:260px; background:#000;">
                <img src="images/avinash.jpg" alt="Avinash" style="width:100%; display:block;">
                <div style="background:#d50032; color:#fff; font-size:1.2em; font-weight:700; text-align:center; padding:6px 0;">
                    Avinash
                </div>
            </div>
            <div style="border:2px solid #2196f3; border-radius:6px; overflow:hidden; width:260px; background:#000;">
                <img src="images/ashwini.jpg" alt="Ashwini" style="width:100%; display:block;">
                <div style="background:#d50032; color:#fff; font-size:1.2em; font-weight:700; text-align:center; padding:6px 0;">
                    Ashwini
                </div>
            </div>
            <div style="border:2px solid #2196f3; border-radius:6px; overflow:hidden; width:260px; background:#000;">
                <img src="images/pratibha.jpg" alt="Pratibha" style="width:100%; display:block;">
                <div style="background:#d50032; color:#fff; font-size:1.2em; font-weight:700; text-align:center; padding:6px 0;">
                    Pratibha
                </div>
            </div>
        </div>
        <!-- End New Video Testimonial Section -->
        <div style="text-align:center; font-size:2em; font-weight:700; color:#222; margin-bottom:38px;">
            Have A Look At <u>What People Have To Speak About Us</u>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px 28px; max-width:1200px; margin:0 auto 40px auto;">
            <img src="images/image.png" alt="Review 1" style="width:370px; max-width:95%; border-radius:14px; box-shadow:0 8px 32px #0002;">
            <img src="images/image.png" alt="Review 2" style="width:370px; max-width:95%; border-radius:14px; box-shadow:0 8px 32px #0002;">
            <img src="images/image.png" alt="Review 3" style="width:370px; max-width:95%; border-radius:14px; box-shadow:0 8px 32px #0002;">
            <img src="images/image.png" alt="Review 4" style="width:370px; max-width:95%; border-radius:14px; box-shadow:0 8px 32px #0002;">
        </div>
        <div style="display:flex; justify-content:center; margin-top:18px;">
            <div class="open-register-modal-btn" tabindex="0" role="button" style="background:#ff2d2d; color:#fff; font-size:2em; font-weight:900; padding:18px 38px; border-radius:8px; text-align:center; box-shadow:0 4px 16px #0003; cursor:pointer;">
        <span style="font-size:1.1em;">➤ REGISTER THE WORKSHOP NOW!</span><br>
        <span style="font-size:0.8em; font-weight:400; display:block; margin-top:6px;">
            (FOR 99 <span style="font-size:1.1em;">🤩</span>)
        </span>
    </div>
        </div>
    </div>
    <!-- End Testimonial Section -->

    <!-- Meet Your Mentor Section -->
    <div style="background:#18181a; padding:60px 0 60px 0;">
        <div style="text-align:center; margin-bottom:38px;">
            <span style="background:#06142e; color:#fff; font-size:2.2em; font-weight:900; padding:4px 28px; border-radius:8px; border:2px solid #06142e;">
                Meet <span style="color:#ff2d2d;">Your Mentor</span>
            </span>
        </div>
        <div style="max-width:1100px; margin:0 auto; border:2px solid #06142e; border-radius:16px; padding:38px 24px 32px 24px; display:flex; flex-wrap:wrap; gap:32px; background:#18181a;">
            <div style="flex:1 1 320px; display:flex; flex-direction:column; align-items:center;">
                <img src="images/fg_person.webp" alt="Radhe Ajeet Chaudhary" style="    width: 466px;
    max-width: 131%;
 border-radius:16px;">
                <div style="margin-top:24px; color:#ff2d2d; font-size:2em; font-weight:900; text-align:center;">
                    Radhe Ajeet Chaudhary
                </div>
                <div style="color:#fff; font-size:1.1em; margin-top:6px; text-align:center;">
                    <span style="color:#ff2d2d;">&#9632;</span> Founder of FG ACTING SCHOOL
                </div>
                <form action="register.php" method="get" style="margin-top:22px; text-align:center;">
                    <!-- <button type="submit" style="background:#ff6600; color:#fff; font-size:1.2em; font-weight:700; padding:12px 38px; border:none; border-radius:8px; cursor:pointer;">
                        ➤ REGISTER NOW
                    </button> -->
                </form>
            </div>
            <div style="flex:2 1 420px; color:#fff; font-size:1.15em; line-height:1.7; font-family:'Mangal',Arial,sans-serif;">
                Hello Aspiring Actors, नमस्ते, मेरा नाम “राधे अजीत चौधरी” है 8 साल का मुझे Theatre का Experience है और इन 8 सालों में, मैंने बहुत सारी Theatre Plays किए हैं, YouTube Projects किए, बहुत सारे किरदारों को मैंने जीवंत किया है बहुत सारी थिएटर प्ले में जैसे: Jaise Karni Vaise Bharni, Selfie le le, My best Friend, Fauji, The King, Aadhe Adhure इत्यादि और जिन किरदारों को मैंने जीवंत किया, आसानी किया जैसे: Ashwathama the Curse Warrior, Toba Take Singh, Tuglaki Farmaan, Kaala Suite Anchor in Aadhe Adhure इत्यादि। और Saadhna TV और Disha TV पर भी में आ चुका हूं। तो इस मास्टर क्लास में जो आप सीखने वाले हैं वह सब कुछ मैंने एक ऐसे टीचर से सीखा है जिन्होंने खुद Sahara One, Star Plus और Colors चैनल में As a Creative Head काम किया है। इसके अलावा मेरे गुरु के बहुत सारे दोस्त आज Bollywood Film industry में एक नामचीन हस्ती है कोई Actor है कोई Writer है कोई Director है कोई Casting Director है तो कोई “STAR” है। तो इसलिए यह मास्टर क्लास किसी की कमी पर मिस मत कीजिएगा क्योंकि यह आपके लिए लाइफ चेंजिंग साबित हो सकती है इसलिए तुरंत ही रजिस्टर करिए और अपना स्लॉट बुक कर लीजिए क्योंकि पहले 100 लोगों के लिए बिल्कुल FREE है। तो इस “Zero to Hero” Masterclass वेबिनार में, मैं वह सारे Secrets , तो सारे Hacks शेयर करने वाला हूं जिससे आप तुरंत ही वहीं से ही अपनी ACTING जर्नी की शुरू करके Films, Webseries और TV में As an ACTOR काम करना शुरू कर देंगे। तो जानना चाहते हैं कैसे तो Book Now पर क्लिक करके जल्दी से रजिस्टर करिए और मिलिए मुझसे LIVE WEBINAR में !
            </div>
        </div>
        <div style="display:flex; justify-content:center; margin-top:38px;">
            <div class="open-register-modal-btn" tabindex="0" role="button" style="background:#ff6600; color:#fff; font-size:2em; font-weight:900; padding:18px 38px; border-radius:8px; text-align:center; box-shadow:0 4px 16px #0003; border-bottom:4px solid #e53935; display:inline-block; cursor:pointer;">
                <span style="font-size:1.1em;">➤ REGISTER THE WORKSHOP NOW! &nbsp; (FOR FREE <span style="font-size:1.1em;">🤩</span>)</span>
            </div>
        </div>
    </div>
    <!-- End Meet Your Mentor Section -->

   <!-- FAQ Section -->
      <!-- FAQ Section -->
    <div style="background:#fff; padding:60px 0 40px 0;">
        <div style="text-align:center; font-size:2.5em; font-weight:900; color:#101820; letter-spacing:1px; margin-bottom:30px;">
            FREQUENTLY ASKED QUESTIONS
        </div>
        <div class="container" >
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">Acting क्या है? और क्या मैं भी एक प्रोफेशनल Actor बन सकता/सकती हूं.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            जब, चेहरे के हाव-भाव, शरीर की भाषा और आवाज का उपयोग करके भावनाओं और संवादों को व्यक्त किया जाता है तो इसे ही Acting कहा जाता है। फिर, इसके निरंतर अभ्यास से और Right Mentor के मार्गदर्शन में, जब आप खुद को लगातार इम्प्रूव करते रहते हैं तो आप बहुत ही जल्द एक प्रोफेशनल Actor बन जाते हैं。
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">मुझे यह "Zero to Hero" LIVE Webinar क्यों अटेंड करनी चाहिए.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            यदि आप, Acting Process को बहुत ही आसानी से और सिंपल तरीके से सीखना चाहते हैं और बिल्कुल जीरो से शुरू करना चाहते हैं तो यह Webinar आपको अटेंड करनी चाहिए.<br><i class="bi bi-info-circle-fill text-success me-2"></i>
                            यदि आपके पास समय नहीं है, पैसा नहीं है किसी Mehgi एक्टिंग स्कूल में दाखिला लेने के लिए, कोई थिएटर क्लास जॉइन करने के लिए तो यह वेबीनार आपके लिए है.<br><i class="bi bi-info-circle-fill text-success me-2"></i>
                            यदि आप कम इन्वेस्टमेंट में, कम समय में एक प्रोफेशनल Actor बनकर Name, Fame, Money पाना चाहते हैं और अपने माता-पिता का नाम रौशन करना चाहते हैं तो यह वेबीनार आपके लिए है.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">इस "Zero to Hero" Webinar में हम कैसे जुड़ सकते हैं.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            हमारा 2 घंटे का “Zero to Hero” Masterclass Zoom App पर होता है।<br><i class="bi bi-info-circle-fill text-success me-2"></i>
                            आप Zoom App Download करें, Account Create कर लें।<br><i class="bi bi-info-circle-fill text-success me-2"></i>
                            Webinar में जुड़ने की Link आपके Email और WhatsApp पर भेज दी जाती है।<br><i class="bi bi-info-circle-fill text-success me-2"></i>
                            Webinar Miss न हो, इसके लिए अपने Mobile Phone में Alarm ⏰️ Set कर सकते हैं。
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">क्या यह Webinar Live होगी और क्या हम इसकी Recording देख सकते हैं.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            यह Webinar Live होती है और इसकी कोई Recording नहीं मिलती और ना ही इसे रिप्ले किया जाता है|
                            <ul> 
                                <p>इसलिए Webinar में आने से पहले कुछ ज़रूरी बातों का ध्यान रखें:</p>
                                <li> Webinar एकांत में सुनें</li>
                                <li> Webinar के लिए Earphones का इस्तेमाल करें</li>
                                <li> Notepad और Pen Ready रखें, Notes लेते रहे</li>
                                <li> 100% पूरा Attend करें</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">क्या Actor बनने के लिए English समझना और बोलना दोनों आना ही चाहिए तभी आप एक Actor बन सकते है.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            नहीं, Actor बनने के लिए English जानना जरूरी नहीं है। यह मास्टरक्लास हिंदी में है और इसमें आपको पूरी जानकारी और मार्गदर्शन हिंदी में दिया जाएगा。</br>
                            देखिए, किसी भी Creative Field में एक ही रूल होता है कि आपके अंदर प्रतिभा होनी चाहिए, तभी आप लंबे समय तक काम कर पाएंगे |
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading6">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">इस "Zero to Hero" Webinar में कौन सी Language का इस्तेमाल किया गया है.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                           इस Webinar में सिंपल हिंदी लैंग्वेज का इस्तेमाल किया गया है और थोड़ी बहुत इंग्लिश जो सबको बड़ी आसानी से समझ आ जाती है|
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading7">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">Acting सीखने के लिए हमें किस तरह का सपोर्ट मिलेगा.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                            ● Acting Books 📚<br>
● 30 Day Challenge<br>
● Actor’s Community<br>
● Online Acting Course<br>
● Earn Money from Home Hack .
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading8">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">यह "Zero to Hero" Webinar किसके लिए है.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                           यह Webinar हर उस इंसान के लिए है जो एक प्रोफेशनल Actor बनना चाहता है जो क्रिएटिव फील्ड से जुड़ना चाहता है जो अपने क्रिएटिविटी को बूस्ट करना चाहता है|
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading9">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">क्या यह Webinar हाउसवाइफ और वर्किंग प्रोफेशनल्स भी अटेंड कर सकते हैं.?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                           यदि उनका इंटरेस्ट Acting में है तो, अन्यथा बिल्कुल भी नहीं |</br><i class="bi bi-info-circle-fill text-success me-2"></i>
मैं फिर कह रहा हूं यह Webinar हर उस इंसान के लिए है जो सच में एक शानदार Actor बनना चाहता है क्योंकि यह Online Webinar है और हिंदी में हैं तो इसे आसानी से हर कोई समझ सकता है और जहां है वहीं से ही Attend कर सकता है|
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading10">
                        <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10" style="color:#111;">
                            <span class="me-2 faq-toggle-icon text-primary"><i class="bi bi-plus-lg"></i></span>
                            <span class="text-dark">क्या आप अभी भी Confused 😕?</span>
                        </button>
                    </h2>
                    <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <i class="bi bi-info-circle-fill text-success me-2"></i>
                           तो ज़ायदा सोचिए मत, आप बस एक ओपन माइंड और Acting का जुनून लाएं बाकी का काम, यह Masterclass ख़ुद करती है|
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Section -->

    <!-- End FAQ Section -->

    <!-- Footer Section -->
    <div style="background:#101820; padding:40px 0 80px 0;">
        <div style="text-align:center; color:#fff; font-size:1.1em; line-height:1.6;">
            &copy; 2023 Zero to Hero Masterclass. All Rights Reserved.<br>
            इस वेबसाइट पर दी गई सभी जानकारियाँ केवल शैक्षिक उद्देश्यों के लिए हैं। कृपया कोई भी निर्णय लेने से पहले उचित शोध और परामर्श करें。
        </div>
        <div style="text-align:center; color:#ffe600; font-size:1.1em; margin-top:18px;">
            Designed & Developed by FG Team | <a href="register.php" style="color:#ff6600; text-decoration:underline;">Register Now</a>
        </div>
    </div>
    <!-- End Footer Section -->

    <!-- Sticky Register Now Button (with popup trigger) -->
<div id="sticky-register" style="
    position:fixed;
    left:0; right:0;
    bottom:0;
    z-index:9999;
    background: #03142a;
    border-top: 4px solid #e53935;
    box-shadow: 0 -2px 12px #0005;
    display:flex;
    justify-content:center;
    align-items:center;
    padding: 0;
    min-height: 54px;
">
    <button type="button" id="openRegisterModal" style="
        background: #ff5c1a;
        border: 1px solid #e1cfcf;
        border-radius: 30px;
        color: white;
        padding: 8px 32px;
        font-weight: 700;
        font-size: 1.15em;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
    ">
        <i class="bi bi-chevron-right" style="font-size:1.1em;"></i> Register Now
    </button>
</div>
<!-- End Sticky Register Now Button -->

<!-- Register Modal Popup -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 742px;">
    <div class="modal-content" style="border-radius:20px;">
      <div class="modal-body" style="padding:32px 24px 18px 24px; background:#fff; border-radius:20px; text-align:center;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position:absolute; right:18px; top:18px;"></button>
        <div style="font-size:1.5em; font-weight:700; margin-bottom:8px; color:#111;">
            निःशुल्क हिंदी Webinar के लिए रजिस्टर कीजिए
        </div>
        <div style="font-size:2.2em; font-weight:900; color:#e60000; margin-bottom:18px;">
            Register For Free Webinar
        </div>
        <form id="popupRegisterForm" autocomplete="off">
          <div class="row g-3 mb-2">
            <div class="col-12 col-md-6">
              <input type="text" name="first_name" class="form-control" placeholder="आपका प्रथम नाम - First Name" required style="font-size:1.1em; border-radius:8px;">
            </div>
            <div class="col-12 col-md-6">
              <input type="text" name="last_name" class="form-control" placeholder="आपका सरनेम - Last Name" required style="font-size:1.1em; border-radius:8px;">
            </div>
          </div>
          <div class="mb-2 " style="padding-top:20px">
            <input type="text" name="whatsapp" maxlength="10" pattern="\d{10}" class="form-control" placeholder="आपका Whatsapp नम्बर - Whatsapp Number 10 Digits" required style="font-size:1.1em; border-radius:8px;">
            <div style="font-size:0.95em; color:#222; text-align:left; margin-top:2px;">10 of 10 Number(s) left</div>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="आपकी Email Address - Enter your e-mail" required style="font-size:1.1em; border-radius:8px;">
          </div>
          <button type="submit" class="btn" style="background:#e60000; color:#fff; font-size:1.3em; font-weight:700; border-radius:30px; padding:12px 48px; margin:18px 0 8px 0;">
            <i class="bi bi-box-arrow-in-right me-2"></i> Register Now
          </button>
        </form>
        <div style="font-size:1.15em; font-weight:700; color:#111; margin:10px 0 0 0;">
            जल्दी कीजिए, Limited Seats
        </div>
        <div style="font-size:1em; color:#222, margin-top:10px;">
            We will not spam, rent, or sell your information…
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Register Modal Popup -->

<!-- Razorpay JS -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:24,
            nav:true,
            dots:true,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:4 }
            }
        });
        // Open modal on sticky register button click
        function openRegisterModal() {
            var modal = new bootstrap.Modal(document.getElementById('registerModal'));
            modal.show();
        }
        $('#openRegisterModal').on('click', openRegisterModal);
        $(document).on('click', '.open-register-modal-btn', openRegisterModal);
        // Also allow keyboard enter/space for accessibility
        $(document).on('keydown', '.open-register-modal-btn', function(e){
            if (e.key === "Enter" || e.key === " ") {
                openRegisterModal();
            }
        });
        // Razorpay payment handler
        function startRazorpayPayment(formData, registration_id) {
            var options = {
                "key": "rzp_test_MUIj5XUJjWSuKC",
                "amount": 9900, // 99 INR in paise
                "currency": "INR",
                "name": "Zero to Hero Masterclass",
                "description": "Webinar Registration",
                "image": "https://yourdomain.com/logo.png",
                "handler": function (response){
                    // On successful payment, update payment_status to 'success'
                    $.ajax({
                        url: "register.php",
                        type: "POST",
                        data: {
                            update_payment: 1,
                            registration_id: registration_id,
                            razorpay_payment_id: response.razorpay_payment_id
                        },
                        success: function(res){
                            $('#registerModal').modal('hide');
                            alert("Registration successful! Payment ID: " + response.razorpay_payment_id);
                        },
                        error: function(){
                            alert("Registration failed. Please contact support.");
                        }
                    });
                },
                "prefill": {
                    "name": formData.first_name + " " + formData.last_name,
                    "email": formData.email,
                    "contact": formData.whatsapp
                },
                "theme": {
                    "color": "#e60000"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }

        // AJAX form submit for popupRegisterForm
        $('#popupRegisterForm').on('submit', function(e){
            e.preventDefault();
            var formData = {};
            $(this).serializeArray().forEach(function(item){
                formData[item.name] = item.value;
            });
            // Save entry as pending before payment
            if(formData.first_name && formData.last_name && formData.whatsapp && formData.email) {
                $.ajax({
                    url: "register.php",
                    type: "POST",
                    data: $.extend({}, formData, { payment_status: "pending" }),
                    dataType: "json",
                    success: function(res){
                        if(res.status === "pending" && res.registration_id) {
                            // Now start Razorpay payment and pass registration_id
                            startRazorpayPayment(formData, res.registration_id);
                        } else {
                            alert("Could not save registration. Please try again.");
                        }
                    },
                    error: function(){
                        alert("Registration failed. Please contact support.");
                    }
                });
            } else {
                alert("Please fill all fields.");
            }
        });
    });
    </script>
</body>
</html>
