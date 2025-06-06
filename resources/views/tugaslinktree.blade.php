<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click and shop! | Instagram, Facebook | Linktree</title>
    <link rel="stylesheet" href="{{ asset('css/csstugaslinktree.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="description" content="Official Vans Indonesia - Shop now through Shopee, WhatsApp, and more!">
    <meta name="keywords" content="Vans Indonesia, Vans Store, Vans Shopee, Vans Outlet, Vans Official">
</head>
<body>
    <div class="header">
        <button class="notification-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2C10.34 2 9 3.34 9 5V6C6.24 6 4 8.24 4 11V16L2 18V19H22V18L20 16V11C20 8.24 17.76 6 15 6V5C15 3.34 13.66 2 12 2ZM12 22C13.1 22 14 21.1 14 20H10C10 21.1 10.9 22 12 22Z"/>
            </svg>
        </button>

        <button class="share-header">
            <svg width="100%" height="100%" viewBox="0 0 16 16">
                <path fill="currentColor" stroke="currentColor" d="M12.6661 7.33348C12.2979 7.33348 11.9994 7.63195 11.9994 8.00014C11.9994 8.36833 12.2979 8.66681 12.6661 8.66681C13.0343 8.66681 13.3328 8.36833 13.3328 8.00014C13.3328 7.63195 13.0343 7.33348 12.6661 7.33348Z"></path>
                <path fill="currentColor" stroke="currentColor" d="M8.00057 7.33348C7.63238 7.33348 7.3339 7.63195 7.3339 8.00014C7.3339 8.36833 7.63238 8.66681 8.00057 8.66681C8.36876 8.66681 8.66724 8.36833 8.66724 8.00014C8.66724 7.63195 8.36876 7.33348 8.00057 7.33348Z"></path>
                <path fill="currentColor" stroke="currentColor" d="M3.33333 7.33348C2.96514 7.33348 2.66667 7.63195 2.66667 8.00014C2.66667 8.36833 2.96514 8.66681 3.33333 8.66681C3.70152 8.66681 4 8.36833 4 8.00014C4 7.63195 3.70152 7.33348 3.33333 7.33348Z"></path>
            </svg>
        </button>
    </div>


    <div class="container">
        <img src="{{ asset('images/logovansindonesia.jpeg') }}" alt="Official Vans Indonesia Logo" class="logo">

        <h1>Click and shop!</h1>
        <div> </div>

        <div class="link-container">
            <div class="link-wrapper">
                <a href="https://id.shp.ee/WShmaJP" class="link" target="_blank">
                    <img src="{{ asset('images/iconwa.svg') }}" class="link-icon" alt="WhatsApp Icon">
                    <span class="link-text">Shopee Official Store</span>
                </a>
                <button class="share-button" onclick="copyLink('https://id.shp.ee/WShmaJP', event)">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

            <div class="link-wrapper">
                <a href="https://wa.me/62895358487553" class="link" target="_blank">
                    <img src="{{ asset('images/iconwa.svg') }}" class="link-icon" alt="WhatsApp Icon">
                    <span class="link-text">Shop From Home</span>
                </a>
                <button class="share-button" onclick="copyLink('https://wa.me/62895358487553', event)">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

            <div class="link-wrapper">
                <a href="https://wa.me/628561203150" class="link" target="_blank">
                    <img src="{{ asset('images/iconoutletpondoklabu.webp') }}" class="link-icon" alt="Outlet Icon">
                    <span class="link-text">Vans Outlet Pondok Labu</span>
                </a>
                <button class="share-button" onclick="copyLink('https://wa.me/628561203150', event)">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

            <div class="link-wrapper">
                <a href="https://id.shp.ee/WShmaJP" class="link" target="_blank">
                    <span class="empty-icon"></span> <!-- Ikon kosong -->
                    <span class="link-text">News & Updates!</span>
                    <span class="empty-icon"></span> <!-- Ikon kosong di kanan -->
                </a>
                <button class="share-button" onclick="copyLink('https://id.shp.ee/WShmaJP')">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

        </div>


        <div class="social-links">
            <a href="https://facebook.com/VansIndonesia" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com/VansIndonesia" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/62895358487553" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:contact@vansindonesia.com" target="_blank" aria-label="Email"><i class="fas fa-envelope"></i></a>
            <a href="https://twitter.com/VansIndonesia" target="_blank" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
        </div>
    </div>
</body>
</html>
