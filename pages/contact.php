<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php'; // Utilisation du chemin absolu
include $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?> 

<main class="pt-20">
    <!-- Section Hero -->
    <section class="hero bg-gray-100 p-8 relative overflow-hidden">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Nous Contacter</h1>
            <p class="text-lg">Nous sommes à votre écoute pour répondre à toutes vos questions ou pour discuter de votre projet.</p>
        </div>
    </section>

    <!-- Section Contact Form -->
    <section class="contact-form bg-white p-8">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-8 text-center">Formulaire de Contact</h2>
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
