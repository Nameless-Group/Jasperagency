<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>Contact us</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post" action="{{ route('contact_us.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Joe@example.com" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="message" name="message" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn">Submit now</button>
                </div>
            </form>
        </div>

        <!--Social Icons-->
        <div class="social-style-one">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</section>
