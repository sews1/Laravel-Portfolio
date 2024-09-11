<style>
    .footer {
        background: linear-gradient(135deg, #343a40 0%, #1d2124 100%); /* Background gradient */
        color: white;
        padding: 40px 0; /* Increased padding for a taller footer */
        border-top: 4px solid #007bff;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1); /* Stronger shadow for more depth */
        font-size: 0.95rem; /* Slightly larger font size */
        width: 100%; /* Ensures footer spans full width */
        position: relative;
    }
    .footer .text-muted {
        color: #f8f9fa;
    }
    .footer .social-icons {
        margin-top: 16px;
    }
    .footer .social-icons a {
        color: white;
        margin: 0 12px; /* Increased margin between icons */
        font-size: 1.6rem; /* Larger icons */
        transition: color 0.3s, transform 0.3s; /* Added smooth scaling effect */
    }
    .footer .social-icons a:hover {
        color: #007bff;
        transform: scale(1.1); /* Scaling effect on hover */
    }
    .footer .contact-info {
        margin-top: 12px;
    }
    .footer .contact-info p {
        margin: 5px 0; /* Slightly increased margin */
    }
    .footer .contact-info i {
        margin-right: 8px; /* More spacing for icons */
    }
    .footer .footer-links {
        margin-top: 24px;
        display: flex;
        justify-content: center;
        gap: 24px;
    }
    .footer .footer-links a {
        color: #f8f9fa;
        text-decoration: none;
    }
    .footer .footer-links a:hover {
        color: #007bff;
        text-decoration: underline;
    }
</style>

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">© 2024 SewS. All rights reserved.</span>
    <div class="social-icons mt-4">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-linkedin-in"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>
    <div class="contact-info mt-4">
      <p><i class="fas fa-envelope"></i> email@example.com</p>
      <p><i class="fas fa-phone"></i> +123 456 7890</p>
    </div>
    <div class="footer-links mt-4">
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
      <a href="/privacy">Privacy Policy</a>
    </div>
  </div>
</footer>
