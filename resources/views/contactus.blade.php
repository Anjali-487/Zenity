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
            <h4>Contact Us</h4>
        </div>
        <div class="card-body">
            <p style="font-size: 22px; line-height: 1.8; text-align: justify;">
                Have a question, feedback, or need support? Our team at <strong>Zenity</strong> is always here to assist you. 
                Feel free to reach out to us through any of the channels below, and we will respond as soon as possible.
            </p>

            <h5 style="font-size: 26px; margin-top: 20px;">Get in Touch</h5>
            <div class="contact-box" style="background: #D4E6F1; padding: 20px; border-radius: 10px; font-size: 20px;">
                <p><strong>Email:</strong> support@zenity.com</p>
                <p><strong>Phone:</strong> +1 (800) 123-4567</p>
                <p><strong>Live Chat:</strong> Available in the app</p>
                <p><strong>Office Address:</strong> 123 Zenity Wellness Street, San Francisco, CA 94103</p>
                <p><strong>Support Hours:</strong> Monday - Friday, 9 AM - 6 PM (PST)</p>
            </div>

            <h5 style="font-size: 26px; margin-top: 20px;">Send Us a Message</h5>
            <p style="font-size: 22px; line-height: 1.8; text-align: justify;">
                If you have any specific inquiries or concerns, please fill out the contact form below, and our team will get back to you at the earliest.
            </p>

            <form action="{{ route('contactus.submit') }}" method="POST" style="margin-top: 20px;">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label for="name" style="font-size: 20px;"><strong>Your Name:</strong></label>
                    <input type="text" id="name" name="name" required 
                           style="width: 100%; padding: 12px; font-size: 18px; border-radius: 6px; border: 1px solid #ccc;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="email" style="font-size: 20px;"><strong>Your Email:</strong></label>
                    <input type="email" id="email" name="email" required 
                           style="width: 100%; padding: 12px; font-size: 18px; border-radius: 6px; border: 1px solid #ccc;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="message" style="font-size: 20px;"><strong>Your Message:</strong></label>
                    <textarea id="message" name="message" rows="5" required 
                              style="width: 100%; padding: 12px; font-size: 18px; border-radius: 6px; border: 1px solid #ccc;"></textarea>
                </div>
                <button type="submit" 
                        style="background-color: #2C3E50; color: white; font-size: 22px; padding: 12px 20px; border: none; border-radius: 6px; cursor: pointer;">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

@include('footer')
