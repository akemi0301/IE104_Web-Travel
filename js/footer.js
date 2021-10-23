const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="main-wrap">
        <div class="footer-wrap">
            <div class="footer-wrap-1">
                <div class="footer-section">
                    <h2>About</h2>
                    <a href="#">Services</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Pricing</a>
                    <a href="#">Career</a>
                </div>
                <div class="footer-section">
                    <h2>Resources</h2>
                    <a href="#">Docs</a>
                    <a href="#">Blog</a>
                    <a href="#">eBooks</a>
                    <a href="#">Videos</a>
                </div>
                <div class="footer-section">
                    <h2>Contact</h2>
                    <a href="#">Help</a>
                    <a href="#">Sales</a>
                    <a href="#">Advertise</a>
                </div>
                <div class="footer-section">
                    <h2>Stay Connected</h2>
                    <p>Các deal du lịch giảm giá đến 60% sẽ được gửi đến inbox của bạn</p>
                    <form action="">
                        <input type="email" name="email" placeholder="Enter Email Address">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-warp-2">
                <div class="line"></div>
                <div class="social-link">
                    <a href="#">
                        <img src="images/fb.png" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="images/google.png" alt="Google">
                    </a>
                    <a href="#">
                        <img src="images/linkedin.png" alt="linkedin">
                    </a>
                    <a href="#">
                        <img src="images/twitter.png" alt="Twitter">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="first-box">
                <a href="#">Terms $Condition</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="last-box">
                <span>© 2014-2021 OB Travel. All Rights Reserved.</span>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    `;
}

createFooter();