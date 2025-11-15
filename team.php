<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unser Team - Bio 7.0 Apotheke</title>
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
    <header class="page-header-team text-white text-center py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="display-4">Unser Team</h1>
            <p class="lead">Wir helfen Ihnen weiter</p>
        </div>
    </header>

    <!-- Team Section -->
    <main class="container py-5">
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/Marietta-Dubinski.png" class="card-img-top" alt="Marietta Dubinski">
                    <div class="card-body text-center">
                        <h5 class="card-title">Marietta Dubinski</h5>
                        <p class="card-text text-muted">Apothekenleitung, Inhaberin</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/Lev-Dubinski-4.png" class="card-img-top" alt="Lev Dubinski">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lev Dubinski</h5>
                        <p class="card-text text-muted">Office Manager</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/team-platzhalter-m.png" class="card-img-top" alt="Joel Dubinski">
                    <div class="card-body text-center">
                        <h5 class="card-title">Joel Dubinski</h5>
                        <p class="card-text text-muted">Assistenz der Buchhaltung</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/Salamani.png" class="card-img-top" alt="Egkina Salamani">
                    <div class="card-body text-center">
                        <h5 class="card-title">Egkina Salamani</h5>
                        <p class="card-text text-muted">Apothekerin, Impfapothekerin</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 5 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/team-platzhalter-m.png" class="card-img-top" alt="Dr. Ali Al-Arifi">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Ali Al-Arifi</h5>
                        <p class="card-text text-muted">Apotheker</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 6 -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card team-card h-100">
                    <img src="https://www.apotheke-bio.de/wp-content/uploads/sites/282/Teresa-Koschkakarjan.png" class="card-img-top" alt="Teresa Aram Koschkakarjan">
                    <div class="card-body text-center">
                        <h5 class="card-title">Teresa Aram Koschkakarjan</h5>
                        <p class="card-text text-muted">Pharmazeutisch-technische Angestellte, Supervisor</p>
                    </div>
                </div>
            </div>
            <!-- Add more team members as needed -->
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
