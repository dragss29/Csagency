<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Optimisation SEO</h1>
            <p class="text-lg">Boostez la visibilité de votre site web avec nos services d'optimisation SEO.</p>
        </div>
    </section>

    <!-- Section SEO Details -->
    <section class="seo-details bg-white p-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-4">Nos Services SEO</h2>
            <ul class="list-disc pl-5">
                <li>Analyse et audit SEO complet</li>
                <li>Recherche et optimisation des mots-clés</li>
                <li>Amélioration de la structure du site</li>
                <li>Création de contenu optimisé</li>
                <li>Stratégies de link building</li>
            </ul>
            <p class="mt-4">Nous vous aiderons à améliorer votre classement sur les moteurs de recherche et attirer plus de visiteurs sur votre site.</p>
            <a href="/contact" class="text-blue-600 hover:underline">Obtenez une consultation SEO</a>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
