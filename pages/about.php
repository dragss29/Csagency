<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>
<main class="pt-20">
    <!-- Section Our Story -->
    <section class="our-story bg-white p-8">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-8 mb-8 md:mb-0">
                    <img src="/images/team.jpg" alt="Notre Équipe" class="w-full h-64 object-cover rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-semibold mb-4">Notre Histoire</h2>
                    <p class="text-lg mb-4">Nous sommes une agence spécialisée dans la création de solutions numériques innovantes. Depuis notre création, nous avons aidé de nombreuses entreprises à atteindre leurs objectifs grâce à notre expertise en développement web, optimisation SEO, et gestion des réseaux sociaux.</p>
                    <p class="text-lg">Notre équipe est composée de professionnels passionnés et expérimentés qui travaillent ensemble pour offrir des résultats exceptionnels. Nous croyons en la collaboration étroite avec nos clients pour comprendre leurs besoins uniques et fournir des solutions adaptées.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Mission & Vision -->
    <section class="mission-vision bg-gray-100 p-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Notre Mission</h2>
                    <p class="text-lg">Notre mission est de fournir des solutions numériques de haute qualité qui permettent à nos clients de réussir dans un environnement en ligne en constante évolution. Nous nous engageons à offrir des services personnalisés et à aider nos clients à atteindre leurs objectifs commerciaux.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4">Notre Vision</h2>
                    <p class="text-lg">Nous visons à être le partenaire numérique de choix pour les entreprises qui cherchent à se démarquer sur le web. Nous croyons en l'innovation continue et en l'adaptation aux nouvelles tendances pour offrir des solutions qui répondent aux besoins de demain.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Meet the Team -->
    <section class="meet-team bg-white p-8">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Rencontrez Notre Équipe</h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-1/2 md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="/images/team-member1.jpg" alt="Membre de l'Équipe" class="w-full h-40 object-cover rounded-full mb-4">
                        <h3 class="text-xl font-semibold">Nom Prénom</h3>
                        <p class="text-lg">Titre du Poste</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="/images/team-member2.jpg" alt="Membre de l'Équipe" class="w-full h-40 object-cover rounded-full mb-4">
                        <h3 class="text-xl font-semibold">Nom Prénom</h3>
                        <p class="text-lg">Titre du Poste</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="/images/team-member3.jpg" alt="Membre de l'Équipe" class="w-full h-40 object-cover rounded-full mb-4">
                        <h3 class="text-xl font-semibold">Nom Prénom</h3>
                        <p class="text-lg">Titre du Poste</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="/images/team-member4.jpg" alt="Membre de l'Équipe" class="w-full h-40 object-cover rounded-full mb-4">
                        <h3 class="text-xl font-semibold">Nom Prénom</h3>
                        <p class="text-lg">Titre du Poste</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact Us -->
    <section class="contact-us bg-blue-800 text-white p-8">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-4">Contactez-Nous</h2>
            <p class="text-lg mb-4">Vous avez des questions ou souhaitez en savoir plus sur nos services ? N'hésitez pas à nous contacter.</p>
            <a href="/contact" class="inline-block bg-yellow-500 text-blue-800 px-6 py-3 rounded-lg text-lg hover:bg-yellow-400">Nous Contacter</a>
        </div>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php'; ?>
