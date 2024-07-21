<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Nos Services</h1>
            <p class="text-lg">Découvrez notre gamme complète de services conçus pour répondre à tous vos besoins numériques.</p>
        </div>
    </section>

    <!-- Section Service Overview -->
    <section class="services-overview bg-white p-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-4 bg-gray-100 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Développement Web</h2>
                    <p>Des solutions de développement web sur mesure pour créer un site web adapté à vos besoins.</p>
                    <a href="/services/development" class="text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Optimisation SEO</h2>
                    <p>Améliorez la visibilité de votre site web avec nos services d'optimisation SEO.</p>
                    <a href="/services/seo" class="text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Gestion des Réseaux Sociaux</h2>
                    <p>Optimisez votre présence en ligne avec notre gestion experte des réseaux sociaux.</p>
                    <a href="/services/social-media" class="text-blue-600 hover:underline">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
