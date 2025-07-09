@include('header')

<style>
    body {
        background-color: #BED1E3;
        font-family: 'Merriweather', serif;
    }
    .section {
        padding: 40px;
    }
    .card {
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .card-header h4 {
        font-family: 'Playfair Display', serif;
        font-size: 28px;
        color: #333;
    }
</style>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>About Us</h4>
        </div>
        <div class="card-body">
            <p style="font-size: 18px; line-height: 1.8;">
                Welcome to <strong>Zenity</strong>we believe that mental wellness is not just a luxury—it’s a necessity. 
                In today’s fast-paced world, stress, anxiety, and emotional burnout have become common challenges. 
                That’s why we created Zenity: a **holistic mental health and self-care platform** designed to empower individuals to take control of their well-being. 
                Whether you’re looking for guided meditation, therapy sessions, mood tracking, or self-improvement tools, **Zenity is here to support you every step of the way**.
            </p>
            <h5 style="font-family: 'Merriweather', serif; font-size: 24px;">Our Vision</h5>
            <p style="font-size: 16px;">
                Zenity’s mission is simple: **to make mental wellness accessible, engaging, and effective**. 
                We aim to bridge the gap between technology and mental health by offering a seamless experience where users can explore self-care solutions tailored to their needs. 
                Our platform integrates the latest advancements in **AI, psychology, and wellness coaching** to deliver personalized recommendations that help you feel better, every day.
            </p>
            <h5 style="font-family: 'Merriweather', serif; font-size: 24px;">What We Offer</h5>
            <ul style="font-size: 16px;">
                <li> AI-powered mental health insights</li>
                <li> Guided meditation & stress-relief exercises</li>
                <li> Wearable device integrations for real-time monitoring</li>
                <li> A supportive community & therapist network</li>
                <li> Curated wellness products & lifestyle essentials</li>
            </ul>
            <p style="font-size: 18px;">
                Join us on this journey towards a balanced, healthier mind. Together, let's make self-care a lifestyle! 💙
            </p>
        </div>
    </div>
</section>

@include('footer')