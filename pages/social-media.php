<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Gestion des Réseaux Sociaux</h1>
            <p class="text-lg">Optimisez votre présence en ligne avec notre gestion experte des réseaux sociaux.</p>
        </div>
    </section>

    <!-- Section Social Media Details -->
    <section class="social-media-details bg-white p-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-4">Nos Services de Gestion des Réseaux Sociaux</h2>
            <ul class="list-disc pl-5">
                <li>Stratégie et gestion des campagnes sur les réseaux sociaux</li>
                <li>Création de contenu engageant</li>
                <li>Gestion des communautés et interaction avec les abonnés</li>
                <li>Analyse des performances et rapports</li>
            </ul>
            <p class="mt-4">Nous vous aiderons à bâtir une présence solide et engageante sur les réseaux sociaux pour atteindre vos objectifs marketing.</p>
            <a href="/contact" class="text-blue-600 hover:underline">Parlez-nous de vos besoins</a>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
