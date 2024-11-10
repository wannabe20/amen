<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Gun Store</title>
    @vite(['resources/js/app.js'])
    @vite('resources/css/layout.css')
    
</head>
<body>
    <div class="top-bar">
        <div class="contact-info">
            <a class="email" href="mailto:info@gunstore.cz">Email: info@gunstore.com</a>
            <span class="line"> | </span>
            <a class="phone" href="tel: +420 123 456 789" >Telefon: +420 123 456 789</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Vyhledávání...">
            <button type="submit">Hledat</button>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo-container">
            <a href="/">
                <img src="{{asset('logo.png') }}"> 
            </a>
        </div>
        <!-- Ikona burger menu pro mobilní zařízení -->
    <div class="burger-icon" onclick="toggleMenu()">☰</div>

    <!-- Skryté navigační menu, zobrazí se po kliknutí na ikonu burger menu -->
    <ul class="menu" id="mobileMenu">
        <li><a href="./guns">Zbraně a Střelivo</a></li>
        <li><a href="./equipment">Doplňky ke zbraním</a></li>
        <li><a href="./knives">Nože</a></li>
    </ul>
    
    </div>
        <ul class="menu">
            <li><a href="./guns">Zbraně a Střelivo</a></li>
            <li><a href="{{ route('accessories.index') }}">Doplňky ke zbraním</a></li>
            <li><a href="./knives">Nože</a></li>

        </ul>
        <div class="right-side">
            <!-- Odkaz na košík -->
            <a href="{{ route('cart.view') }}" class="cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" fill="white">
                    <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                </svg>
                Nákup
            </a>
            <a href="#" class="language-toggle">CZ/EN</a>
        </div>
    </nav>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="content">
        @yield('content')
    </div>

    <section class="contact-section">

    
    <div class="contact-container">

    <div class="contact-infotmation">
        <div class="logo-container">
        <a href="/">
                <img src="{{asset('logo.png') }}"> 
            </a>
        </div>
        <div class="menu-container">
            <h2 class="contact_information-title" >Informace</h2>
            <ul class="contact-menu">
                <li><a href="#home">Domů</a></li>
                <li><a href="#products">Produkty</a></li>
                <li><a href="#about">O nás</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
        <div class="contact-info">
            <h3 class="contact_ContactUS-title" >Kontaktujte nás</h3>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                </span>
                 <a href="tel:+420123456789">+420 123 456 789</a>
            </p>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                </span>
                <a href="mailto:info@example.com">info@example.com</a></p>
            <p>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                </span>
                <a href="https://maps.app.goo.gl/HXUQZoocfdZQendL8">Šrekova bažina 1893, 760 01 Zlín</a></p>
            <div class="social-icons">
                <a href="https://www.facebook.com/skolabaltaci" class="icon-facebook">
                    <i class="fa-brands fa-facebook fa-xl"></i>
                </a>
                <a href="https://www.instagram.com/skolabaltaci/" class="icon-instagram">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </a>
                <a href="https://x.com/?lang=cs" class="icon-twitter">
                    <i class="fa-brands fa-x-twitter fa-xl"></i>
                </a>
            </div>
                <button class="contact-button">Kontaktní formulář</button>
            </div>
    </div>
        <div class="post-container">
            <div class="post-card">
                <img src="{{ asset('Post/ceska-posta-logo.png') }}" alt="ceskaposta">
            </div>
            <div class="post-card">
                <img src="{{ asset('Post/ppl.png') }}" alt="ppl">
            </div>
            <div class="post-card">
                <img src="{{ asset('Post/zasilkovna-cz.png') }}" alt="zasilkovna">
            </div>
         </div>
    </div>
</section>
<!-- Footer -->
<div class="footer">
    <h1 class="footer-text">Copyright 2024 GUNSHOP. Všechna práva vyhrazena. </h1>
 </div>
<!-- Konec Footer -->
</body>
</html>

<script>
    function toggleMenu() {
        const menu = document.getElementById("mobileMenu");
        menu.style.display = menu.style.display === "flex" ? "none" : "flex";
    }
</script>

