<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - Agence</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #1F1F1F;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #00585A 0%, #0D8B84 100%);
            padding: 24px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        nav {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 500;
        }

        .btn-contact {
            background-color: #00FFB7;
            color: #00585A;
            padding: 10px 24px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #00585A 0%, #0D8B84 100%);
            color: white;
            padding: 120px 60px;
            text-align: center;
            min-height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero h1 {
            font-size: 56px;
            font-weight: 300;
            letter-spacing: 4px;
        }

        /* Solutions Section */
        .solutions-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 100px 60px;
        }

        .solutions-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 70px;
        }

        .solutions-title {
            font-size: 48px;
            color: #00585A;
            font-weight: 300;
            line-height: 1.15;
            letter-spacing: 0.5px;
        }

        .solutions-title span {
            display: block;
        }

        .view-more {
            color: #0277B6;
            font-size: 11px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        /* Solution Cards */
        .solutions-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
            margin-bottom: 100px;
        }

        .solution-card {
            background-color: #D0F5F1;
            padding: 48px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 130px;
        }

        .solution-card p {
            font-size: 22px;
            color: #00585A;
            font-weight: 400;
            line-height: 1.3;
        }

        .dot {
            width: 44px;
            height: 44px;
            background-color: #00FFB7;
            border-radius: 50%;
            flex-shrink: 0;
            margin-left: 30px;
        }

        /* About Section */
        .about-section {
            text-align: center;
            margin-bottom: 100px;
        }

        .about-title {
            font-size: 16px;
            color: #00585A;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 24px;
            line-height: 1.6;
            font-weight: 600;
        }

        .about-text {
            color: #666666;
            font-size: 14px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #00585A 0%, #0D8B84 100%);
            padding: 100px 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            margin-bottom: 0;
        }

        .contact-text h2 {
            font-size: 56px;
            color: #00FFB7;
            font-weight: 300;
            margin-bottom: 40px;
            line-height: 1.1;
            letter-spacing: 0.5px;
        }

        .toggle-switch {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 26px;
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 26px;
            cursor: pointer;
            border: none;
            padding: 0;
        }

        .switch::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 22px;
            background-color: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: left 0.3s;
        }

        .switch.active {
            background-color: #00FFB7;
        }

        .switch.active::after {
            left: 28px;
        }

        .contact-image {
            text-align: center;
        }

        .contact-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
        }

        /* CTA Box */
        .cta-box {
            background: linear-gradient(135deg, #01525A 0%, #0D7D79 100%);
            color: white;
            padding: 48px 60px;
            border-radius: 0;
            text-align: center;
            margin-bottom: 0;
            font-size: 24px;
            font-weight: 300;
            display: flex;
            align-items: center;
            justify-content: space-between;
            letter-spacing: 0.5px;
        }

        .cta-box .switch {
            margin-left: 30px;
        }

        /* Footer */
        footer {
            background-color: #0B3D39;
            color: #7FC9C1;
            padding: 70px 60px;
            font-size: 12px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-column h4 {
            color: white;
            margin-bottom: 18px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-size: 11px;
        }

        .footer-column p, .footer-column a {
            display: block;
            margin-bottom: 12px;
            color: #7FC9C1;
            text-decoration: none;
            line-height: 1.6;
            font-size: 12px;
        }

        .footer-column a:hover {
            color: #00FFB7;
        }

        .footer-bottom {
            border-top: 1px solid rgba(127, 201, 193, 0.2);
            padding-top: 30px;
            text-align: center;
        }

        .footer-logo {
            margin-bottom: 16px;
            font-size: 16px;
            color: white;
            letter-spacing: 2px;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            header {
                padding: 20px 40px;
            }

            nav {
                gap: 25px;
            }

            .solutions-container {
                padding: 80px 40px;
            }

            .hero {
                padding: 100px 40px;
            }

            .contact-section {
                padding: 80px 40px;
                gap: 50px;
            }

            .cta-box {
                padding: 40px;
            }

            footer {
                padding: 50px 40px;
            }

            .footer-content {
                gap: 40px;
                padding: 0;
            }
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
                text-align: center;
                width: 100%;
            }

            .hero {
                padding: 60px 20px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .solutions-container {
                padding: 50px 20px;
            }

            .solutions-header {
                flex-direction: column;
                margin-bottom: 40px;
            }

            .solutions-title {
                font-size: 32px;
                margin-bottom: 20px;
            }

            .solution-card {
                padding: 32px;
                min-height: auto;
            }

            .solution-card p {
                font-size: 18px;
            }

            .contact-section {
                grid-template-columns: 1fr;
                padding: 50px 20px;
                gap: 40px;
            }

            .contact-text h2 {
                font-size: 36px;
            }

            .cta-box {
                flex-direction: column;
                gap: 20px;
                padding: 30px 20px;
                font-size: 18px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0;
            }

            footer {
                padding: 40px 20px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 15px;
            }

            nav {
                gap: 10px;
            }

            nav a {
                font-size: 9px;
            }

            .hero h1 {
                font-size: 24px;
                letter-spacing: 2px;
            }

            .solutions-container {
                padding: 30px 15px;
            }

            .solutions-title {
                font-size: 24px;
            }

            .solution-card {
                flex-direction: column;
                text-align: center;
                gap: 20px;
                padding: 24px;
            }

            .solution-card p {
                font-size: 16px;
            }

            .dot {
                margin-left: 0;
            }

            .about-title {
                font-size: 13px;
            }

            .contact-text h2 {
                font-size: 28px;
            }

            .cta-box {
                font-size: 14px;
                padding: 20px;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">JX•</div>
        <nav>
            <a href="#">ACCUEIL</a>
            <a href="#">SERVICES</a>
            <a href="#">SOLUTIONS</a>
            <a href="#">EMPLOIS</a>
            <button class="btn-contact">CONTACT</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>SOLUTIONS</h1>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-container">
        <div class="solutions-header">
            <div>
                <h2 class="solutions-title">
                    <span>NOS</span>
                    <span>SOLUTIONS</span>
                </h2>
            </div>
            <a href="#" class="view-more">Voir tous (7) →</a>
        </div>

        <div class="solutions-list">
            <div class="solution-card">
                <p>Un accomp<br>agnement clair</p>
                <div class="dot"></div>
            </div>
            <div class="solution-card">
                <p>Un accomp<br>agnement clair</p>
                <div class="dot"></div>
            </div>
            <div class="solution-card">
                <p>Un accomp<br>agnement clair</p>
                <div class="dot"></div>
            </div>
        </div>

        <!-- About Section -->
        <div class="about-section">
            <h3 class="about-title">
                DES SOLUTIONS SUR MESURE<br>
                PENSÉES POUR VOTRE ACTIVITÉ
            </h3>
            <p class="about-text">
                Imply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-text">
            <h2>Contactez<br>-nous.</h2>
            <div class="toggle-switch">
                <button class="switch active"></button>
            </div>
        </div>
        <div class="contact-image">
            <div style="width: 100%; height: 300px; background-color: rgba(0, 255, 183, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #00FFB7; font-size: 14px;">
                [Espace pour image VR]
            </div>
        </div>
    </section>

    <!-- CTA Box -->
    <div class="cta-box">
        <span>Libérez votre potentiel</span>
        <button class="switch active"></button>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</body>
</html>