<?php
$language = $_SESSION['lng'];
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("$language", "../locale");
textdomain("$language");
?>
    <!-- Stylesheets
============================================= -->

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="Assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Assets/img/favicon.ico" type="image/x-icon">

    <!-- Document Title
    ============================================= -->

    <style>

        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }
        .tp-video-play-button { display: none !important; }

        .tp-caption { white-space: nowrap; }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header dark full-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <!-- Logo
					============================================= -->
                <div id="logo">
                    <a href="<?php echo BASE_URL ?>" class="standard-logo" data-dark-logo="Assets/images/logo-micro.png"><img src="Assets/images/logo-micro.png" alt="Logo Micromercio"></a>
                    <a href="<?php echo BASE_URL ?>" class="retina-logo" data-dark-logo="Assets/images/logo-micro@2x.webp"><img src="Assets/images/logo-micro@2x.webp" alt="Logo Micromercio"></a>
                </div><!-- #logo end -->
                <!-- Primary Navigation
					============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li><a href="<?php echo BASE_URL ?>"><div><?php echo _("Inicio") ?></div></a>

                        </li>
                        <li><a href="<?php echo BASE_URL ?>quienes_somos"><div><?php echo _("Quienes Somos") ?></div></a>
                        </li>
                        <li><a href="https://www.micromercio.com/news/"><div><?php echo _("Noticias") ?></div></a>
                        </li>

                        <li><a href="<?php echo BASE_URL ?>Servicios"><div><?php echo _("Nuestros Servicios") ?></div></a>

                        </li>
						<li><a href="<?php echo BASE_URL ?>Impresion3D"><div><?php echo _("Impresión 3D") ?></div></a>

                        </li>
                        <li><a href="<?php echo BASE_URL ?>Contactar"><div><?php echo _("Contactar") ?></div></a>

                        </li>
                    </ul>

                    <!-- Top Search
						============================================= -->
                    <div id="top-search">
                        <?php

                        if ($locale == 'en_GB'){
                            $u ="changeesp();";
                            $l = "es";
                        }else{
                            $u ="changeeng();";
                            $l = "en";
                        }
                        echo "<a href='' onclick='$u'><div>";
                        echo $l;
                        echo "</div></a>";
                        ?>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
