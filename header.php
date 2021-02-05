<?php
    $sitetitle = 'Peritos México';
?>

<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141527194-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141527194-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

        <title><?php echo $pagetitle . ' | ' . $sitetitle ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="author" content="https://erikespinosar.com">
        <meta name="robots" content="index, follow" />
        <link rel="canonical" href="https://peritosmexico.com.mx/" />
        
        <meta property="og:locale" content="es_MX" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $pagetitle . ' | ' . $sitetitle ?>" />
        <meta property="og:description" content="<?php echo $description ?>" />

        <meta property="og:url" content="https://peritosmexico.com.mx/" />
        <meta property="og:site_name" content="<?php echo $sitetitle ?>" />
        <meta property="og:image" content="https://peritosmexico.com.mx/assets/share.png" />
        <meta property="og:image:secure_url" content="https://peritosmexico.com.mx/assets/share.png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="628" />
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="<?php echo $description ?>" />
        <meta name="twitter:title" content="<?php echo $pagetitle . ' | ' . $sitetitle ?>" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:image" content="https://peritosmexico.com.mx/assets/share.png" />
        <meta name="twitter:creator" content="" />

        <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Organization",
            "name": "Peritos México",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "",
                "addressLocality": "Ciudad de México",
                "addressRegion": "Ciudad de México",
                "postalCode": ""
            },
            "telephone": " 5561189036"
        }
        </script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700&display=swap" rel="stylesheet">
        
        <link rel=icon href="assets/favicon.png" sizes="64x64" type="image/png">
    </head>
<body>
    <div class="menu-mobile-content">
        <ul>
            <li><a href="./#about" id="about-btn" title="Quienes somos">Quienes somos</a></li>
            <li><a href="./#services" id="services-btn" title="Servicios">Servicios</a></li>
            <li><a href="./#contact" id="contact-btn" title="Contacto">Contacto</a></li>
            <li><a href="#" title="Cerrar" class="button-close" id="menu-mobile-button-close">Cerrar</a></li>
        </ul>
    </div>

    <nav class="navbar">
        <div class="logo">
            <a href="./" title="Inicio"><img src="assets/logo.png" alt="Logo"></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="./#about" title="Quienes somos">Quienes somos</a></li>
                <li><a href="./#services" title="Servicios">Servicios</a></li>
                <li><a href="./#contact" title="Contacto">Contacto</a></li>
                <li><a href="https://www.facebook.com/peritosmexico" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://www.linkedin.com/company/peritos-mexico" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        
        <div class="menu-mobile">
            <a href="#" title="Menú" id="menu-mobile-button">Menú</a>
        </div>
    </nav>