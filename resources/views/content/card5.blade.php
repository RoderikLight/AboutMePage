<div>
    <h2>Contact Me</h2>
    <p>If you're interested and want to know more about what you can get for your business, please fill this survey so I can contact you later!
    You can also send me a message in any of my socials.</p>
    <p>Don't forget to ask for a card and thank you for your time!</p>
    <form id="survey-form">
        @csrf <!-- Include CSRF token -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" id="occupation" name="occupation" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message (What are you interested in? Need help with knowing what you need? Feedback is also appreciated.)</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="social-icons" style="padding-top: 20px; text-align: center;">
        <div style="display: inline-block; text-align: left;">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="{{ asset('res/gmail.png') }}" alt="Gmail" class="social-icon" style="width: 40px; height: 40px; margin-right: 10px;">
                <span>roddevbusiness@gmail.com</span>
            </div>
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="{{ asset('res/github.png') }}" alt="GitHub" class="social-icon" style="width: 50px; height: 50px; margin-right: 10px;">
                <span>github.com/RoderikLight</span>
            </div>
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="{{ asset('res/phone.png') }}" alt="Phone" class="social-icon" style="width: 50px; height: 50px; margin-right: 10px;">
                <span>+1234567890</span>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('res/linkedin.webp') }}" alt="LinkedIn" class="social-icon" style="width: 40px; height: 40px; margin-right: 10px;">
                <span>linkedin.com/in/your-profile</span>
            </div>
        </div>
    </div>
</div>