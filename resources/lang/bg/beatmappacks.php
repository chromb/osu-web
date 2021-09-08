<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => 'Предварително пакетирани колекции от бийтмапове, базирани на обща тема.',
        'nav_title' => 'списък',
        'title' => 'Бийтмап пакети',

        'blurb' => [
            'important' => 'ПРОЧИ ТОВА ПРЕДИ ИЗТЕГЛЯНЕ',
            'instruction' => [
                '_' => "Инсталиране: След като изтеглите пакет с песни, разархивирайте .rar файла във вашата osu! директория, папка Songs.
                    Всички бийтмапове ще са в .zip или .osz формат, така че osu! ще ги разархивира от само себе си като пуснете играта.
                    :scary да разархивирате самите .zip/.osz файлове
                    или бийтмаповете ще се покажат неправилно и няма да работят.",
                'scary' => 'НЕДЕЙТЕ',
            ],
            'note' => [
                '_' => 'Също, препоръчително е да :scary, защото старите бийтмапове са с много по-ниско качество от най-новите.',
                'scary' => 'изтеглите пакетите от най-новите към най-старите',
            ],
        ],
    ],

    'show' => [
        'download' => 'Изтегли',
        'item' => [
            'cleared' => 'преминат',
            'not_cleared' => 'не преминат',
        ],
        'no_diff_reduction' => [
            '_' => ':link не се използват, за да бъде обозначен пакетът като преминат.',
            'link' => 'Модове променящи трудност',
        ],
    ],

    'mode' => [
        'artist' => 'Артист/Албум',
        'chart' => 'Препоръчани',
        'standard' => 'Стандартен',
        'theme' => 'Тема',
    ],

    'require_login' => [
        '_' => 'Трябва да сте :link за да изтеглите',
        'link_text' => 'влезли в профила си',
    ],
];
