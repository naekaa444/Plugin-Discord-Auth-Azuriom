<?php

return [
    'nav' => [
        'title' => 'Discord auth',
        'settings' => 'Settings',
    ],

    'permission' => 'View and change discord-auth settings',

    'settings' => [
        'title' => 'Discord Auth Settings',
        'header' => 'Authentication management through Discord',
        'subtitle' => 'Your discord application',
        'discord-portal' => 'Save a discord app',
        'info' => "On Discord Developers, in the OAuth -> Redirects section, don't forget to add :",

        'client_id' => 'Client ID',
        'client_secret' => 'Client Secret',
        'guild' => 'Server ID (let empty if you want to allow user to login even if he is not present on your discord server)',
        'guild_invite' => 'Invitation link (let empty if you want to allow user to login even if he is not present on your discord server)',
        'avatar' => "Have the Discord avatar on the Azuriom account (updates at each login to the website)",
    ],
];
