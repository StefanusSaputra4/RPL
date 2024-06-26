<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fega Jaya</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTTXRE8OfxzN6CKD1s6hD39B1mDeHI0Cgx2hY5POz1V6cy2Kp1qX1/oJr6r/3zXt32cbRHepw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container">
            <h1>FEGA JAYA</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <div class="search-cart">
                <input type="text" placeholder="Search...">
                <i class="fas fa-search"></i>
                <a href="#" class="cart-icon">
                    <box-icon name='cart' color='#ffffff'></box-icon>
                    <span id="cart-count" class="cart-count">0</span>
                </a>                
                <a href="#" class="profile-icon"><box-icon name='user-circle' type='solid' color='#ffffff'></box-icon></a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <img src="home.webp" alt="Motorcycle">
        </section>
        <section class="products">
            <h2>All Products</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="knalpot.png" alt="Knalpot Akrapovic">
                    <h3>KNALPOT AKRAPOVIC</h3>
                    <p>Rp. 3.000.000,00</p>
                    <button id="add-to-cart-button">Add to Cart</button>
                    <button onclick="window.location.href='/payment'">Buy Now</button>

                </div>
                <!-- Repeat similar blocks for other products -->
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>  
    
</body>
</html>
