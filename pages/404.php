<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; // Utilisation du chemin absolu
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?> 
<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Erreur 404</h1>
            <p class="text-lg">Désolé, la page que vous recherchez est introuvable.</p>
            <a href="/" class="text-blue-600 hover:underline">Retourner à l'accueil</a>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
