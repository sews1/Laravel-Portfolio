<div class="container my-5">
    <div class="text mt-5">
        <div class="row">
            <!-- Contact Form Section -->
            <div class="col-md-6 mb-4">
                <div id="contactSection" class="container section contact-style" 
                    style="background-color: #f0f0f0; padding: 2rem; border-radius: 8px;">
                    <h2 class="text-center mb-4" style="color: #333;">Contact Me</h2>
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight: 700;">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label" style="font-weight: 700;">Message</label>
                            <textarea name="desc" class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Get in Touch Section -->
            <div class="col-md-6 mb-4">
                <div class="container section contact-style" 
                     style="background-color: #f0f0f0; padding: 2rem; border-radius: 8px;">
                    <h2 class="text-center mb-4" style="color: #333;">Get in Touch</h2>
                    <div class="contact-info">
                        <div class="mb-3">
                            <h4 style="font-weight: 700;">Address</h4>
                            <p>Indonesia</p>
                        </div>
                        <div class="mb-3">
                            <h4 style="font-weight: 700;">Phone</h4>
                            <p><a href="tel:+1234567890" style="color: #007bff;">+123 456 7890</a></p>
                        </div>
                        <div class="mb-3">
                            <h4 style="font-weight: 700;">Email</h4>
                            <p><a href="mailto:example@example.com" style="color: #007bff;">example@gmail.com</a></p>
                        </div>
                        <div class="mb-3">
                            <h4 style="font-weight: 700;">Social Media</h4>
                            <a href="https://facebook.com" target="_blank" class="me-3"><i class="fab fa-facebook fa-2x" style="color: #007bff;"></i></a>
                            <a href="https://twitter.com" target="_blank" class="me-3"><i class="fab fa-twitter fa-2x" style="color: #007bff;"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin fa-2x" style="color: #007bff;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

