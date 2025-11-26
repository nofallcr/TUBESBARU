<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px ;
    background-color: #131a2e; /* Warna navigasi yang sedikit lebih gelap dari body */
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.logo {
    display: flex;
    align-items: center;
    font-size: 20px;
    font-weight: 700;
    color: #fff;
}

.logo img {
    height: 30px; /* Sesuaikan ukuran logo */
    margin-right: 10px;
    filter: invert(1); /* Jika logo hitam, balikkan warnanya */
}

.logo .tagline {
    font-size: 14px;
    font-weight: 400;
    color: #92a3c7; /* Warna abu-abu kebiruan */
    margin-left: 8px;
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 25px;
}

.nav-links a {
    color: #c9d1d9; /* Warna teks link */
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.2s;
}

.nav-links a:hover, .nav-links a.active {
    color: #79a2f7; /* Warna biru saat hover/aktif */
}

.social-icons {
    display: flex;
    gap: 15px;
}

.social-icons i {
    font-size: 16px;
    color: #c9d1d9;
}

.lang-toggle {
    font-weight: 600 !important;
}

.settings-icon {
    font-size: 18px;
    color: #c9d1d9;
    cursor: pointer;
}
    </style>
<body>
        <header class="navbar">
        <div class="logo">
            <img src="LogoExploreBandung.jpeg" alt="Medan Toba Logo">
            <span>Explore Bandung</span>
            <span class="tagline">Bandung Tour</span>
        </div>
        <nav class="nav-links">
            <a href="#">Beranda</a>
            <a href="#">Paket Wisata</a>
            <a href="#">Galeri</a>
            <a href="#" class="active">Destinasi</a>
            <a href="#">Tentang Kami</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <a href="#" class="lang-toggle">🇮🇩 EN</a>
            <i class="fas fa-cog settings-icon"></i>
        </nav>
    </header>
</body>
</html>