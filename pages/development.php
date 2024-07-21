<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Développement Web</h1>
            <p class="text-lg">Nous offrons des solutions de développement web personnalisées pour répondre aux besoins uniques de votre entreprise.</p>
        </div>
    </section>

    <!-- Section Development Details -->
    <section class="development-details bg-white p-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-4">Ce que nous proposons</h2>
            <ul class="list-disc pl-5">
                <li>Conception et développement de sites web sur mesure</li>
                <li>Développement d'applications web</li>
                <li>Maintenance et support technique</li>
                <li>Optimisation des performances du site</li>
            </ul>
            <p class="mt-4">Contactez-nous pour discuter de vos besoins en développement web et obtenir un devis personnalisé.</p>
            <a href="/contact" class="text-blue-600 hover:underline">Nous contacter</a>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
