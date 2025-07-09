@include('header')

<style>
    body {
        background-color: #BED1E3;
        font-family: 'Merriweather', serif;
        color: #2C3E50;
    }
    .section {
        padding: 50px;
    }
    .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.15);
        padding: 25px;
    }
    .card-header h4 {
        font-family: 'Playfair Display', serif;
        font-size: 36px;
        color: #2C3E50;
        font-weight: bold;
    }
</style>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Support & Help Center</h4>
        </div>
        <div class="card-body">
            <p style="font-size: 22px; line-height: 1.8; text-align: justify;">
                At <strong>Zenity</strong>, we are dedicated to providing you with the best support to ensure your experience with our platform is smooth and fulfilling. 
                Whether you need assistance with features, account issues, or mental health resources, we are here to help.
            </p>

            <h5 style="font-size: 26px; margin-top: 20px;">Frequently Asked Questions</h5>
            <ul style="font-size: 20px; line-height: 1.9;">
                <li><strong>How do I book a therapy session?</strong><br>
                    You can book a session through the "Therapists" section in the Zenity app. Choose a therapist, select a time, and confirm your booking.
                </li>
                <li><strong>What payment methods are accepted?</strong><br>
                    We accept all major credit/debit cards, PayPal, and online banking for a seamless transaction experience.
                </li>
                <li><strong>Can I integrate Zenity with my smartwatch?</strong><br>
                    Yes! Zenity supports integration with popular wearable devices to track your wellness in real-time.
                </li>
                <li><strong>Is my data secure?</strong><br>
                    Absolutely. We prioritize user privacy with <strong>end-to-end encryption</strong> and secure data storage.
                </li>
            </ul>

            <h5 style="font-size: 26px; margin-top: 20px;">Contact Us</h5>
            <div class="contact-box" style="background: #D4E6F1; padding: 20px; border-radius: 10px; font-size: 20px;">
                <p><strong>Email:</strong> support@zenity.com</p>
                <p><strong>Phone:</strong> +1 (800) 2628-1109</p>
                <p><strong>Session:</strong> Available in the app</p>
                <p><strong>Support Hours:</strong> Monday - Friday, 9 AM - 6 PM (PST)</p>
            </div>

            <p style="font-size: 22px; line-height: 1.8; text-align: justify; margin-top: 20px;">
                Need immediate help? Our <strong>Zenity AI Assistant</strong> is available 24/7 to guide you through self-help resources and direct you to professional support when necessary.
            </p>
        </div>
    </div>
</section>

@include('footer')
