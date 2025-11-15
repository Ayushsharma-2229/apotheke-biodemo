<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Bio 7.0 Apotheke</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.html'; ?>

    <!-- Page Header -->
    <header class="page-header-contact text-white text-center py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="display-4">Kontaktieren Sie uns</h1>
            <p class="lead">Wir sind für Sie da</p>
        </div>
    </header>

    <!-- Contact Section -->
    <main class="container py-5">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-6" data-aos="fade-right">
                <h3>Standort & Kontakt</h3>
                <address class="lead">
                    <strong>Bio 7.0 Apotheke am Ku'damm</strong><br>
                    Kurfürstendamm 203-205<br>
                    10719 Berlin
                </address>
                <ul class="list-unstyled lead">
                    <li><i class="bi bi-telephone-fill text-success me-2"></i><a href="tel:030-88723997">030-88723997</a></li>
                    <li><i class="bi bi-printer-fill text-success me-2"></i>030-88723998</li>
                    <li><i class="bi bi-envelope-fill text-success me-2"></i><a href="mailto:info@apotheke-bio.de">info@apotheke-bio.de</a></li>
                </ul>

                <h3 class="mt-5">Öffnungszeiten</h3>
                <ul class="list-unstyled lead">
                    <li>Mo - Fr: 08:30 – 20:00 Uhr</li>
                    <li>Sa: 09:00 – 20:00 Uhr</li>
                </ul>

                <div class="mt-5 map-container rounded shadow-sm" data-aos="fade-up" data-aos-delay="100">
                    <!-- Placeholder for Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.39213993289!2d13.31830361580697!3d52.5026899798109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a850f3a6547d7b%3A0xbd39b507336e9690!2sKurf%C3%BCrstendamm%20203-205%2C%2010719%20Berlin%2C%20Germany!5e0!3m2!1sen!2sus!4v1678886400000!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <h3>Schreiben Sie uns eine Nachricht</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail-Adresse</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Betreff</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nachricht</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Nachricht senden</button>
                </form>
            </div>
        </div>
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
