<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RIE - The Digital Technocrats</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="app">
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/hero.php'; ?>
        <?php include 'includes/about.php'; ?>
        <?php include 'includes/services.php'; ?>
        <?php include 'includes/why-choose-us.php'; ?>
        <?php include 'includes/testimonials.php'; ?>
        <?php include 'includes/contact.php'; ?>
        <?php include 'includes/footer.php'; ?>
    </div>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        function toggleMenu() {
            const menu = document.getElementById('nav-menu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        function closeMenu() {
            const menu = document.getElementById('nav-menu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    </script>
</body>
</html>
