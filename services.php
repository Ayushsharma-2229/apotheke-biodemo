<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Bio 7.0 Apotheke</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>

    <!-- Page Header -->
    <header class="page-header-services text-white text-center py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="display-4">Unsere Services</h1>
            <p class="lead">Ein umfassendes Angebot für Ihre Gesundheit</p>
        </div>
    </header>

    <!-- Service Sections -->
    <main class="container py-5">
        <!-- Service Section -->
        <section id="service-details" class="mb-5">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="sticky-top" style="top: 100px;">
                        <h3>Unsere Leistungen im Überblick</h3>
                        <p>Wir bieten Ihnen eine Vielzahl von Dienstleistungen, um Ihre Gesundheit bestmöglich zu unterstützen.</p>
                        <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/bio-apotheke-berlin-2-1.jpg" alt="Service Interior" class="img-fluid rounded shadow-sm mt-3">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 service-card">
                                <div class="card-body">
                                    <h4 class="card-title">Service</h4>
                                    <ul class="list-unstyled">
                                        <li>Spezieller Wechselwirkungscheck Ihrer Arzneimittel</li>
                                        <li>über 6500 Artikel vorrätig</li>
                                        <li>Online Vorbestellung & telefonische Vorbestellung</li>
                                        <li>Hilfsmittelversorgung</li>
                                        <li>Anmessung von Kompressionsstrümpfen</li>
                                        <li>Verleih von medizinischen Geräten (Inhalationsgeräte, Milchpumpen & Babywaagen)</li>
                                        <li>Monatlich wechselnde Angebote</li>
                                        <li>Kostenloser Lieferservice</li>
                                        <li>Kostenlose Kundenkarte mit vielen Vorteilen</li>
                                        <li>und vieles mehr</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 service-card">
                                <div class="card-body">
                                    <h4 class="card-title">Qualität</h4>
                                    <ul class="list-unstyled">
                                        <li>Unsere Apotheken sind QMS zertifiziert!</li>
                                        <li>Gemäß unserer internen Qualitats- und Fortbildungsrichtlinien sowie aktueller Empfehlungen der Apothekerkammer Berlin sind unsere Mitarbeiter immer auf dem neuesten Stand der Wissenschaft</li>
                                        <li>Die von uns hergestellten Rezepturen erfüllen alle Kriterien der höchsten Qualität und Reinheit, mitunter durch den Einsatz von Infrarotspektrum Arzneimittelprüfung.</li>
                                        <li>Ihre Daten sind bei uns sicher. Wir sind zertifiziert für Datenschutz auf höchsten Niveau!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 service-card">
                                <div class="card-body">
                                    <h4 class="card-title">Beratung</h4>
                                    <ul class="list-unstyled">
                                        <li>Mikronährstoffe</li>
                                        <li>Tee Auswahl</li>
                                        <li>Pflegehilfsmittel zum Verbrauch</li>
                                        <li>Allgemeine Impfberatung</li>
                                        <li>Beratung Darmgesundheit</li>
                                        <li>Beratung zu Inkontinenzprodukten</li>
                                        <li>Beratung zur Raucherentwöhnung</li>
                                        <li>Diabetes-Intensiv-Beratung</li>
                                        <li>Asthma-Intensiv-Beratung</li>
                                        <li>und vieles mehr</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="card h-100 service-card">
                                <div class="card-body">
                                    <h4 class="card-title">Lieferservice</h4>
                                    <p>Nutzen Sie gern unseren kostenlosen Lieferservice in Berlin. Wir beliefern Sie kostenlos im Umkreis von 10 km bei einem Mindestbestellwert von 30 Euro. Die Lieferung erfolgt innerhalb von 24 Stunden.</p>
                                    <a href="contact.html" class="btn btn-outline-success">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        setTimeout(() => {
            const nav = document.querySelector('.navbar');
            if (nav) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        nav.classList.add('scrolled');
                    } else {
                        nav.classList.remove('scrolled');
                    }
                });
            }
        }, 100);
    </script>
</body>
</html>
