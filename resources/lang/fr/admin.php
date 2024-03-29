<?php

return [
    'nav' => [
        'title' => 'Discord auth',
        'settings' => 'Paramètres',
    ],

    'permission' => 'Voir et modifier les paramètres du plugin Discord-auth',

    'settings' => [
        'title' => 'Paramètres Discord Auth',
        'header' => "Gestion de l'authentification via Discord",
        'subtitle' => 'Votre application discord',
        'discord-portal' => 'Enregistrer une application Discord',
        'info' => "Sur Discord Developers, dans la section OAuth -> Redirects, n'oubliez pas d'ajouter :",

        'client_id' => 'Client ID',
        'client_secret' => 'Client Secret',
        'guild' => 'Identifiant de votre guild (laisser vide pour autoriser des membres qui ne sont pas de votre guild à se connecter)',
        'guild_invite' => "Lien d'invitation de votre serveur discord (laisser vide pour autoriser des membres qui ne sont pas de votre guild à se connecter)",
        'avatar' => "Avoir l'avatar discord sur le compte Azuriom (se met à jour à chaque connexion sur le site)",
    ],
];
