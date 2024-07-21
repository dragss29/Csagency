<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; // Utilisation du chemin absolu
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main>
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden h-screen">
    <div class="absolute inset-0">
        <!-- Vidéo d'accueil -->
        <div class="hidden md:block h-full w-full">
            <video autoplay="" loop="" muted="" class="object-cover h-full w-full">
                <source src="/videos/home-hero.mp4" type="video/mp4">
            </video>
        </div>
        <div class="md:hidden h-full w-full">
            <video autoplay="" loop="" muted="" class="object-cover h-full w-full">
                <source src="/videos/home-hero-mobile.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
        <div>
            <h1 class="text-5xl font-bold mb-4">Bienvenue chez CS Agency</h1>
            <p class="text-xl">Nous offrons des solutions numériques de premier ordre pour votre entreprise, y compris le développement web, l'optimisation SEO et la gestion des réseaux sociaux.</p>
            <a href="#services" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700">Découvrir nos services</a>
        </div>
    </div>
</section>


    <!-- Section Services -->
    <section id="services" class="services bg-white p-8">
        <div class="container mx-auto">
            <h3 class="text-4xl font-bold mb-8 text-center text-blue-900">Nos Services</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="relative overflow-hidden bg-gray-800 rounded-lg shadow-lg">
                    <video autoplay loop muted class="w-full h-48 object-cover">
                        <source src="/videos/development.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <a href="/services/development" class="text-white text-lg bg-blue-600 px-4 py-2 rounded shadow-lg hover:bg-blue-700">En savoir plus</a>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-2xl font-bold text-white mb-2">Développement Web</h4>
                        <p class="text-white">Création de sites web sur mesure adaptés à vos besoins.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="relative overflow-hidden bg-gray-800 rounded-lg shadow-lg">
                    <video autoplay loop muted class="w-full h-48 object-cover">
                        <source src="/videos/seo.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <a href="/services/seo" class="text-white text-lg bg-blue-600 px-4 py-2 rounded shadow-lg hover:bg-blue-700">En savoir plus</a>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-2xl font-bold text-white mb-2">Optimisation SEO</h4>
                        <p class="text-white">Amélioration de la visibilité de votre site sur les moteurs de recherche.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="relative overflow-hidden bg-gray-800 rounded-lg shadow-lg">
                    <video autoplay loop muted class="w-full h-48 object-cover">
                        <source src="/videos/social-media.mp4" type="video/mp4" />
                    </video>
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <a href="/services/social-media" class="text-white text-lg bg-blue-600 px-4 py-2 rounded shadow-lg hover:bg-blue-700">En savoir plus</a>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-2xl font-bold text-white mb-2">Gestion des Réseaux Sociaux</h4>
                        <p class="text-white">Gestion complète de vos comptes sociaux pour maximiser l'engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section Partenaires -->
    <!-- Section Partenaires -->
    <section id="partenaires" class="partenaires bg-gray-100 p-8">
    <div class="container mx-auto text-center">
        <h3 class="text-3xl font-semibold mb-8">Nos Partenaires & Clients de Confiance</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8">
            <!-- Partenaire 1 -->
            <a href="https://www.partenaire1.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire1.png" alt="Partenaire 1" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 2 -->
            <a href="https://www.partenaire2.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire2.png" alt="Partenaire 2" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 3 -->
            <a href="https://www.partenaire3.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire3.png" alt="Partenaire 3" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 4 -->
            <a href="https://www.partenaire4.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire4.png" alt="Partenaire 4" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 5 -->
            <a href="https://www.partenaire5.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire5.png" alt="Partenaire 5" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 6 -->
            <a href="https://www.partenaire6.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire6.png" alt="Partenaire 6" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 7 -->
            <a href="https://www.partenaire7.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire7.png" alt="Partenaire 7" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
            <!-- Partenaire 8 -->
            <a href="https://www.partenaire8.com" target="_blank" class="flex items-center justify-center">
                <img src="/images/partenaire8.png" alt="Partenaire 8" class="w-24 h-auto max-w-xs mx-auto"/>
            </a>
        </div>
    </div>
    </section>


    <!-- Section Contact -->
    <section id="contact" class="contact bg-white p-8">
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-4 text-center">Nous Contacter</h3>
            <form action="/php/contact.php" method="post" class="max-w-lg mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium mb-2">Nom</label>
                    <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded"/>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-lg font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded"/>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required class="w-full p-3 border border-gray-300 rounded"></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">Envoyer</button>
            </form>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
