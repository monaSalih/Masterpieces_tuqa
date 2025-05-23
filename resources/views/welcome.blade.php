<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A platform to shop and learn traditional Palestinian Tatreez embroidery.">
    <title>Tatreez - Palestinian Embroidery Heritage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Badeen+Display&family=Reem+Kufi+Fun:wght@400..700&family=Reem+Kufi:wght@400..700&family=Ruwudu:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

<style>
    body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("{{ asset('images/back.png') }}") repeat center center;
    background-size: cover;
    background-attachment: fixed;
    opacity: 0.09;
    z-index: -1;
}
</style>
</head>
<body>
    <header>
    <div class="navbar">
        <div class="icons">
        @if(Auth::check())
    <a href="{{ route('cart.show') }}" class="cart-icon">
        <i class="fas fa-shopping-cart"></i>
        <span id="cart-count">
            {{ \App\Models\CartItem::where('user_id', Auth::id())->sum('quantity') }}
        </span>
    </a>
        @endif

        @if(Auth::check())
    <div class="login-register-dropdown">
        <a href="#" class="dropdown-toggle" style="display: flex; align-items: center; white-space: nowrap;">
            <span style="margin-right: 5px;">Welcome,</span>
            <span>{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-content">
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="border: none; background: none; padding: 8px 16px; font-size: 14px; color: rgb(155, 55, 55); width: 100%; text-align: left; cursor: pointer;">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="login-register-dropdown">
                <a href="#" class="dropdown-toggle">User</a>
                <div class="dropdown-content">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        @endif

        </div>
            
            <ul id="navMenu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/shop') }}">Shop</a></li>
            <li><a href="{{ url('/learn') }}">Learn</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            
            <div class="logo-container">
                <span class="logo-text">غرزه</span>
                <img src="{{ asset('images/embroidery_1230695.png') }}" alt="Tatreez Logo">
               
            </div>
            
           
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
        <div class="hero-content">
                <h1>Palestinian Embroidery Heritage</h1>
                <p>Preserving traditional Tatreez through contemporary artistry and education</p>
                <div class="hero-buttons">
                <a href="{{ url('/shop') }}" class="btn btn-primary">Shop Collection</a>
                <a href="{{ url('/learn') }}" class="btn btn-secondary">Learn Tatreez</a>
                </div>
            </div>
            <div class="scroll-down" onclick="scrollToSection('.about-section')">
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>
        
        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <h2 class="section-title">Our Story</h2>
                <p class="section-subtitle">Bringing Palestinian culture and tradition to the modern world through the art of Tatreez.</p>
                
                <div class="about-content">
                    <div class="about-image">
                        <img src="{{ asset('images/about.png') }}" alt="Tatreez Embroidery Process">
                    </div>
                    
                    <div class="about-text">
                        <h3>Preserving Cultural Heritage</h3>
                        <p>Tatreez is more than just embroidery – it's a visual language that tells the story of Palestinian culture, history, and identity. Each stitch carries generations of tradition and craftsmanship.</p>
                        <p>Our mission is to preserve and promote this beautiful art form by creating contemporary pieces that honor tradition while embracing modern aesthetics. Every product in our collection is a bridge between past and present.</p>
                        
                        <div class="about-features">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Authentic Design</h4>
                                    <p>Each pattern represents traditional Palestinian motifs with cultural significance.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Handcrafted Quality</h4>
                                    <p>Every piece is meticulously crafted by skilled artisans using traditional techniques.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Educational Workshops</h4>
                                    <p>Learn the art of Tatreez from skilled instructors in our immersive workshops.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Cultural Preservation</h4>
                                    <p>Supporting traditional crafts and preserving cultural heritage for future generations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Featured Products Section -->
        <section class="featured-products">
            <div class="container">
                <h2 class="section-title">Featured Products</h2>
                <p class="section-subtitle">Discover our handcrafted collection of contemporary Palestinian embroidery art.</p>
                
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product">
                        <div class="product-image">
                        <img src="{{ asset('images/product-1.png') }}" alt="Embroidered Wall Art">
                        <div class="product-badge">Featured</div>
                            <div class="quick-view">Quick View</div>
                        </div>
                        <div class="product-info">
                            <h4>Embroidered Wall Art</h4>
                            <p>Traditional wall art hanging featuring intricate Palestinian motifs</p>
                            <p class="price">$120.00</p>
                            <button 
                            class="add-to-cart" 
                            data-name="Embroidered Wall Art" 
                            data-price="$120.00" 
                            data-image="{{ asset('images/product-1.png') }}">
                            Add to Cart
                        </button>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="product">
                        <div class="product-image">
                        <img src="{{ asset('images/product-2.jpeg') }}" alt="Watch Embroidery Designs">
                        <div class="quick-view">Quick View</div>
                        </div>
                        <div class="product-info">
                            <h4>Watch Embroidery Designs</h4>
                            <p>Handcrafted timepiece with traditional Tatreez patterns</p>
                            <p class="price">$75.00</p>
                            <button 
                            class="add-to-cart" 
                            data-name="Watch Embroidery Designs" 
                            data-price="$75.00" 
                            data-image="{{ asset('images/product-2.jpeg') }}">
                            Add to Cart
                        </button>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="product">
                        <div class="product-image">
                        <img src="{{ asset('images/product-3.jpeg') }}" alt="Custom mug design and printing">
                        <div class="product-badge">New</div>
                            <div class="quick-view">Quick View</div>
                        </div>
                        <div class="product-info">
                            <h4>Custom Mug Design</h4>
                            <p>Modern Palestinian design for everyday inspiration</p>
                            <p class="price">$95.00</p>
                            <button 
                            class="add-to-cart" 
                            data-name="Custom mug design and printing" 
                            data-price="$95.00" 
                            data-image="{{ asset('images/product-3.jpeg') }}">
                            Add to Cart
                        </button>
                        </div>
                    </div>
                    
                </div>
                
                <div style="text-align: center; margin-top: 40px;">
                    <a href="{{ url('/shop') }}" class="btn btn-primary">View All Products</a>
                </div>
            </div>
        </section>
        
        <!-- Learn Section -->
        <section class="learn">
            <div class="container">
                <h2 class="section-title">Learn Tatreez</h2>
                <p class="section-subtitle">Join our workshops and master the art of traditional Palestinian embroidery.</p>
                
                <div class="learn-grid">
                    <!-- Workshop 1 -->
                    <div class="learn-item">
                        <div class="learn-image">
                        <img src="{{ asset('images/learn-1-p.jpeg') }}" alt="Basic Stitches">
                        <div class="workshop-date">May 15</div>
                        </div>
                        <div class="learn-info">
                            <h4>Design Transfer Learn</h4>
                            <p>Learn foundational stitches to start your Tatreez journey with confidence.</p>
                            <div class="learn-meta">
                                <span><i class="far fa-clock"></i> 2 hours</span>
                                <span><i class="fas fa-user-friends"></i> All levels</span>
                            </div>
                            <p class="price">$45.00</p>
                            <div class="btn-container">
                            <button class="add-to-cart" 
                                data-name="Basic Stitches Workshop" 
                                data-price="45.00" 
                                data-image="{{ asset('images/learn-1-p.jpeg') }}">
                            Add to Cart
                        </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Workshop 2 -->
                    <div class="learn-item">
                        <div class="learn-image">
                        <img src="{{ asset('images/learn-2.jpeg') }}" alt="Pattern Creation">
                        <div class="workshop-date">May 22</div>
                        </div>
                        <div class="learn-info">
                            <h4>Pattern Creation Learn</h4>
                            <p>Master the art of creating your own patterns inspired by tradition.</p>
                            <div class="learn-meta">
                                <span><i class="far fa-clock"></i> 3 hours</span>
                                <span><i class="fas fa-user-friends"></i> Intermediate</span>
                            </div>
                            <p class="price">$55.00</p>
                            <div class="btn-container">
                            <button class="add-to-cart" 
                                data-name="Pattern Creation Workshop" 
                                data-price="55.00" 
                                data-image="{{ asset('images/learn-2.jpeg') }}">
                            Add to Cart
                        </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Workshop 3 -->
                    <div class="learn-item">
                        <div class="learn-image">
                        <img src="{{ asset('images/learn-3.jpeg') }}" alt="Design Transfer">
                        <div class="workshop-date">June 5</div>
                        </div>
                        <div class="learn-info">
                            <h4>Basic Stitches Learn</h4>  
                            <p>Learn professional techniques to transfer designs to various fabrics.</p>
                            <div class="learn-meta">
                                <span><i class="far fa-clock"></i> 2 hours</span>
                                <span><i class="fas fa-user-friends"></i> Beginner </span>
                            </div>
                            <p class="price">$45.00</p>
                            <div class="btn-container">
                            <button class="add-to-cart" 
                                data-name="Design Transfer Workshop" 
                                data-price="65.00" 
                                data-image="{{ asset('images/learn-3.jpeg') }}">
                            Add to Cart
                        </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="container">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Hear from our community of Tatreez enthusiasts and collectors.</p>
                
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <div class="testimonial-text">
                            The quality of the embroidery is exceptional! I purchased a wall hanging as a gift, and the recipient was amazed by the intricate details and vibrant colors. The piece tells a beautiful cultural story and has become the centerpiece of their living room.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="{{ asset('images/girl.jpeg') }}" alt="Sarah M.">
                            </div>
                            <div class="author-info">
                                <h4>Sarah M.</h4>
                                <p>Collector & Workshop Participant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Newsletter Section -->
        <section class="newsletter">
            <div class="container">
                <h2>Stay Connected</h2>
                <p>Subscribe to our newsletter to receive updates on new collections, workshops, and special offers.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <div class="footer-links">
                        <ul>
                        <li><a href="{{ url('/') }}">Dashboard</a></li>
                        <li><a href="{{ url('/shop') }}">Shop Collection</a></li>
                        <li><a href="{{ url('/learn') }}">Learn</a></li>
                        <li><a href="{{ url('/about') }}">About Tatreez</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Customer Service</h4>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>About Tatreez</h4>
                    <div class="footer-info">
                        <p>We are dedicated to preserving and promoting Palestinian embroidery traditions through education and contemporary design.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <div class="contact-info">
                        <div>
                            <i class="fas fa-envelope"></i>
                            <span>info@tatreez.com</span>
                        </div>
                        <div>
                            <i class="fas fa-phone"></i>
                            <span>+123 456 789</span>
                        </div>
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Embroidery Lane<br>Artisan District, 12345</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="footer-copy">&copy; 2025 Tatreez Traditions. All rights reserved.</p>
        </div>
    </footer>
    
    <button onclick="scrollToTop()" id="topBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <script>
        // Toggle mobile menu
        function toggleMenu() {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('show');
        }
        
        // Smooth scroll to section
        function scrollToSection(selector) {
            const section = document.querySelector(selector);
            if (section) {
                window.scrollTo({
                    top: section.offsetTop,
                    behavior: 'smooth'
                });
            }
        }
        
        // Scroll to top button
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        
        // Show/hide scroll to top button based on scroll position
        window.addEventListener('scroll', function() {
            const topBtn = document.getElementById('topBtn');
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                topBtn.classList.add('show');
            } else {
                topBtn.classList.remove('show');
            }
        });
        
        // Change header background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Initialize cart functionality
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        
        function updateCartCount() {
            const cartCountElement = document.getElementById("cart-count");
            if (cartCountElement) {
                cartCountElement.textContent = cart.length;
            }
        }
        
        // Initialize cart count on page load
        document.addEventListener("DOMContentLoaded", function() {
            updateCartCount();
            
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const price = this.getAttribute('data-price');
                    const image = this.getAttribute('data-image') || '/api/placeholder/100/100';
                    
                    const product = {
                        id: Date.now(),
                        name: name,
                        price: price,
                        image: image,
                        quantity: 1
                    };
                    
                    cart.push(product);
                    localStorage.setItem("cart", JSON.stringify(cart));
                    updateCartCount();
                    
                    // Animation or notification here
                    alert(`${name} added to cart!`);
                });
            });
        });
    </script>
</body>
</html>