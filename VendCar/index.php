<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Penjualan Mobil</title>
</head>

<body>

    <ul class="nav-links">
        <li class="upward"><a href="#mobil">Mobil</a></li>
        <li class="forward"><a href="#keranjang">Keranjang</a></li>
        <li class="center"><a href="#keranjang">Keranjang</a></li>
    </ul>

    <section id="mobil">
        <h1>Daftar Mobil</h1>
        <div class="mobil">
            <div class="produk">
                <img src="assets/BMW-X3-140220221442.jpg" alt="BMW X3">
                <h2>BMW X3</h2>
                <p>Harga: $50,000</p>
                <button onclick="addToCart('BMW X3', 50000)">Tambah ke Keranjang</button>
            </div>

            <div class="produk">
                <img src="assets/x5-facelift-exterior-right-front-three-quarter-4.jpeg" alt="BMW X5">
                <h2>BMW X5</h2>
                <p>Harga: $60,000</p>
                <button onclick="addToCart('BMW X5', 60000)">Tambah ke Keranjang</button>
            </div>

            <div class="produk">
                <img src="assets/bmw-i4-edrive-40-modelfinder-890x501.png" alt="BMW i4">
                <h2>BMW i4</h2>
                <p>Harga: $55,000</p>
                <button onclick="addToCart('BMW i4', 55000)">Tambah ke Keranjang</button>
            </div>

            <div class="produk">
                <img src="assets/bmw-8series-coupe-modellfinder.png" alt="BMW 8 Series">
                <h2>BMW 8 Series</h2>
                <p>Harga: $70,000</p>
                <button onclick="addToCart('BMW 8 Series', 70000)">Tambah ke Keranjang</button>
            </div>
        </div>
    </section>

    <section id="keranjang">
        <h1>Keranjang Belanja</h1>
        <div id="cart">
            <!-- Isi keranjang akan ditampilkan di sini -->
        </div>
        <button onclick="checkout()">Checkout</button>
    </section>

    <!-- <div class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h2>Customer Care Center</h2>
                <p>1 5000 50</p>
                <p>08:00am – 17:00pm</p>
                <p>Monday - Friday (Closed on public holidays)</p>
            </div>
            <div class="footer-section">
                <h2>Contact Us</h2>
                <p>Get in touch</p>
                <p>Test drive</p>
                <p>Request a test drive here.</p>
                <p>Dealer locator</p>
                <p>Find a dealer near you</p>
            </div>
        </div>
    </div> -->
    <script src="script.js"></script>
</body>

</html>