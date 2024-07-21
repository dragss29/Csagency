
        <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CS Agency - Solutions numériques pour votre entreprise">
    <title>CS Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Styles pour le menu mobile */
        #menu {
            display: none; /* Cache le menu par défaut */
            position: fixed; /* Positionne le menu en haut de la page */
            top: 4rem; /* Place le menu juste en dessous de l'en-tête (4rem est la hauteur de l'en-tête) */
            right: 0; /* Aligne le menu à droite */
            width: 100%; /* Fait en sorte que le menu prenne toute la largeur de l'écran */
            background-color: #1E3A8A; /* Utilise une couleur bleue foncée pour le fond du menu */
            transition: opacity 0.3s ease, transform 0.3s ease; /* Ajoute une transition fluide pour l'apparition du menu */
            opacity: 0; /* Cache le menu par défaut */
            transform: translateY(-100%); /* Cache le menu en haut */
            overflow-y: auto; /* Permet le défilement vertical si le contenu dépasse la hauteur de l'écran */
        }

        /* Styles pour le menu mobile lorsque visible */
        #menu.show {
            
            z-index: 50; /* Assure que le menu est au-dessus des autres éléments */
            margin-top: 1rem;
            display: block; /* Affiche le menu */
            opacity: 1; /* Rends le menu visible */
            transform: translateY(0); /* Fait apparaître le menu en le déplaçant */
        }

        /* Styles pour le bouton de menu */
        #menu-toggle {
            display: flex; /* Utilise flex pour centrer le contenu */
            align-items: center; /* Aligne verticalement le contenu */
            justify-content: center; /* Centre horizontalement le contenu */
            cursor: pointer; /* Change le curseur pour indiquer que c'est cliquable */
        }

        /* Styles pour le bouton de fermeture */
        #menu-close {
            position: absolute;
            top: 1rem; /* Positionne le bouton en haut du menu */
            right: 1rem; /* Aligne le bouton à droite du menu */
            cursor: pointer; /* Change le curseur pour indiquer que c'est cliquable */
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-800 text-white p-4 fixed top-0 left-0 right-0 z-40">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">CS Agency</a>
            <nav class="hidden md:flex">
                <ul class="flex space-x-4">
                    <li><a href="/pages/home.php" class="hover:underline">Accueil</a></li>
                    <li><a href="/pages/about.php" class="hover:underline">À propos</a></li>
                    <li><a href="/pages/services.php" class="hover:underline">Services</a></li>
                    <li><a href="/pages/contact.php" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
            <button id="menu-toggle" class="md:hidden p-3 border rounded text-white border-white hover:bg-blue-700">
                <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M3 6h14M3 12h14M3 18h14" stroke="currentColor" stroke-width="2"/>
                </svg>
            </button>
        </div>
    </header>
    <div id="menu" class="bg-blue-900">
        <button id="menu-close" class="text-white">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>
        <ul class="flex flex-col p-4 space-y-2">
            <li><a href="/pages/home.php" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Accueil</a></li>
            <li><a href="/pages/about.php" class="text-white hover:bg-blue-700 px-4 py-2 rounded">À propos</a></li>
            <li><a href="/pages/services.php" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Services</a></li>
            <li><a href="/pages/contact.php" class="text-white hover:bg-blue-700 px-4 py-2 rounded">Contact</a></li>
        </ul>
    </div>
        <!-- Contenu principal de la page -->
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');
            const menuClose = document.getElementById('menu-close');

            function toggleMenu() {
                menu.classList.toggle('show');
            }

            menuToggle.addEventListener('click', toggleMenu);
            menuClose.addEventListener('click', function () {
                menu.classList.remove('show');
            });

            // Ferme le menu si l'utilisateur clique en dehors de celui-ci
            document.addEventListener('click', function (event) {
                if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
                    menu.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
