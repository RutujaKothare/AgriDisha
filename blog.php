<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriDisha - Blog</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 28px;
        }
        .video-section {
            margin: 30px 0;
            text-align: center;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            background: url('ASSETS/IMAGES/f1.jpg') no-repeat center center/cover;
            color: white;
        }
        video {
            width: 100%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .description {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            font-weight: 500;
            color: #ffffff;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>अ‍ॅग्रीदिशा ब्लॉगमध्ये आपले स्वागत आहे</h1>
        
        <div class="video-section">
            <h2>अ‍ॅग्रीदिशाचा परिचय</h2>
            <video controls>
                <source src="videos/intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="description">शेतकरी आणि खरेदीदार यांच्यातील अंतर भरून काढत कृषी व्यापारात क्रांती घडविण्याचे अ‍ॅग्रीदिशाचे ध्येय जाणून घ्या.</p>
        </div>

        <div class="video-section">
            <h2>अ‍ॅग्रीदिशावर खरेदी कशी करावी</h2>
            <video controls>
                <source src="videos/buyer.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="description">शेतकऱ्यांकडून थेट उच्च-गुणवत्तेची पिके आणि मसाले कसे खरेदी करावेत याबद्दल जाणून घ्या.</p>
        </div>

        <div class="video-section">
            <h2>अ‍ॅग्रीदिशावर विक्री कशी करावी</h2>
            <video controls>
                <source src="videos/seller.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="description">शेतकरी आपली उत्पादने सूचीबद्ध करून, खरेदीदारांपर्यंत पोहोचून आणि आपला व्यवसाय कसा वाढवू शकतात हे जाणून घ्या.</p>
        </div>
    </div>
</body>
</html>
