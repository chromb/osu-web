<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'discussion-votes' => [
        'update' => [
            'error' => 'Не удалось обновить ответ',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'разрешить кудосу',
        'beatmap_information' => 'Страница карты',
        'delete' => 'удалить',
        'deleted' => 'Удалено :editor в :delete_time',
        'deny_kudosu' => 'запретить кудосу',
        'edit' => 'изменить',
        'edited' => 'Последний раз изменён :editor в :update_time',
        'guest' => 'Гостевая сложность от :user',
        'kudosu_denied' => 'Отказано в получении кудосу.',
        'message_placeholder_deleted_beatmap' => 'Эта сложность была удалена, и поэтому обсуждать её больше нельзя.',
        'message_placeholder_locked' => 'Обсуждение этой карты было отключено.',
        'message_placeholder_silenced' => "Запрещено публиковать обсуждение, пока вы заглушены.",
        'message_type_select' => 'Выбрать тип комментария',
        'reply_notice' => 'Нажмите Enter, чтобы ответить.',
        'reply_placeholder' => 'Введите тут ответ',
        'require-login' => 'Пожалуйста, войдите в аккаунт, чтобы оставить сообщение или ответить',
        'resolved' => 'Решено',
        'restore' => 'восстановить',
        'show_deleted' => 'Показать удалённые',
        'title' => 'Отзывы',

        'collapse' => [
            'all-collapse' => 'Скрыть всё',
            'all-expand' => 'Показать всё',
        ],

        'empty' => [
            'empty' => 'Нет отзывов!',
            'hidden' => 'Ни один отзыв не соответствует указанному фильтру.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Заблокировать возможность обсуждения',
                'unlock' => 'Разблокировать возможность обсуждения',
            ],

            'prompt' => [
                'lock' => 'Причина блокировки',
                'unlock' => 'Вы уверены, что хотите разблокировать обсуждение?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Этот пост пойдет в общую ветку отзывов. Чтобы изменить эту карту, начните своё сообщение с временной отметкой (к примеру 00:12:345).',
            'in_timeline' => 'Для модерирования нескольких временных отметок, опубликуйте несколько сообщений (по одному на отметку).',
        ],

        'message_placeholder' => [
            'general' => 'Введите здесь, чтобы запостить в Общий (:version)',
            'generalAll' => 'Введите здесь, чтобы запостить в Общий (Все сложности)',
            'review' => 'Введите здесь, чтобы оставить отзыв',
            'timeline' => 'Введите здесь, чтобы запостить в временную шкалу (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Дисквалифицировать',
            'hype' => 'Хайпануть!',
            'mapper_note' => 'Заметка',
            'nomination_reset' => 'Сбросить номинацию',
            'praise' => 'Похвала',
            'problem' => 'Проблема',
            'review' => 'Отзыв',
            'suggestion' => 'Предложение',
        ],

        'mode' => [
            'events' => 'История',
            'general' => 'Общее :scope',
            'reviews' => 'Отзывы',
            'timeline' => 'Временная шкала',
            'scopes' => [
                'general' => 'эта сложность',
                'generalAll' => 'все сложности',
            ],
        ],

        'new' => [
            'pin' => 'Закрепить',
            'timestamp' => 'Временная отметка',
            'timestamp_missing' => 'нажмите Ctrl + C в режиме редактирования, чтобы скопировать временную отметку и вставить в сообщение!',
            'title' => 'Новый отзыв',
            'unpin' => 'Открепить',
        ],

        'review' => [
            'new' => 'Новый отзыв',
            'embed' => [
                'delete' => 'Удалить',
                'missing' => '[ТЕМА УДАЛЕНА]',
                'unlink' => 'Отвязать',
                'unsaved' => 'Не сохранено',
                'timestamp' => [
                    'all-diff' => 'Записи для всех сложностей не могут иметь временных отметок.',
                    'diff' => 'Если :type начинается с временной отметки, оно будет показано в Временной шкале.',
                ],
            ],
            'insert-block' => [
                'paragraph' => 'вставить параграф',
                'praise' => 'вставить похвалу',
                'problem' => 'вставить проблему',
                'suggestion' => 'вставить предложение',
            ],
        ],

        'show' => [
            'title' => ':title от :mapper',
        ],

        'sort' => [
            'created_at' => 'Дате создания',
            'timeline' => 'Хронологии',
            'updated_at' => 'Дате изменения',
        ],

        'stats' => [
            'deleted' => 'Удалено',
            'mapper_notes' => 'Заметки',
            'mine' => 'Мои',
            'pending' => 'Ожидающий',
            'praises' => 'Похвалы',
            'resolved' => 'Решено',
            'total' => 'Все',
        ],

        'status-messages' => [
            'approved' => 'Эта карта была одобрена :date!',
            'graveyard' => "Эта карта не обновлялась с :date и похоже, что автор её забросил...",
            'loved' => 'Эта карта была добавлена в «Любимые» :date!',
            'ranked' => 'Эта карта стала рейтинговой :date!',
            'wip' => 'Заметьте: Эта карта была помечена создателем как незавершённая.',
        ],

        'votes' => [
            'none' => [
                'down' => 'Отрицательных оценок пока нет',
                'up' => 'Положительных оценок пока нет',
            ],
            'latest' => [
                'down' => 'Последние не одобрения',
                'up' => 'Последние одобрения',
            ],
        ],
    ],

    'hype' => [
        'button' => 'Хайпануть карту!',
        'button_done' => 'Уже хайпанута!',
        'confirm' => "Вы уверены? Это действие отберёт один из :n хайпов и не может быть отменено.",
        'explanation' => 'Хайпаните карту, чтобы сделать её доступной для номинирования и получения рейтинга!',
        'explanation_guest' => 'Войдите в аккаунт, чтобы сделать карту доступной для номинирования!',
        'new_time' => "Вы получите другой хайп :new_time.",
        'remaining' => 'У вас осталось :remaining хайпа.',
        'required_text' => 'Хайп: :current/:required',
        'section_title' => 'Прогресс хайпа',
        'title' => 'Хайпаните',
    ],

    'feedback' => [
        'button' => 'Оставить отзыв',
    ],

    'nominations' => [
        'delete' => 'Удалить',
        'delete_own_confirm' => 'Уверены? Карта будет удалена, и вы будете перенаправлены обратно в свой профиль.',
        'delete_other_confirm' => 'Уверены? Карта будет удалена, и вы будете перенаправлены в профиль пользователя.',
        'disqualification_prompt' => 'Причина для дисквалификации?',
        'disqualified_at' => 'Дисквалифицирована :time_ago (:reason).',
        'disqualified_no_reason' => 'причина не указана',
        'disqualify' => 'Дисквалифицировать',
        'incorrect_state' => 'Не удалось выполнить данную задачу, попробуйте перезагрузить страницу.',
        'love' => 'Любимое',
        'love_choose' => 'Выберите сложность для любимой карты',
        'love_confirm' => 'Отметить карту как любимую?',
        'nominate' => 'Номинировать',
        'nominate_confirm' => 'Номинировать эту карту?',
        'nominated_by' => 'номинирована :users',
        'not_enough_hype' => "Недостаточно хайпа.",
        'remove_from_loved' => 'Убрать из Loved',
        'remove_from_loved_prompt' => 'Причина удаления из Любимых:',
        'required_text' => 'Номинаций: :current/:required',
        'reset_message_deleted' => 'удалено',
        'title' => 'Статус номинации',
        'unresolved_issues' => 'Ещё остались нерешенные проблемы, которые необходимо решить в первую очередь.',

        'rank_estimate' => [
            '_' => 'Эта карта будет ранкнута :date, если не будет найдено проблем. Она #:position в :queue.',
            'queue' => 'очереди ранка',
            'soon' => 'скоро',
        ],

        'reset_at' => [
            'nomination_reset' => ':user сбросил прогресс номинаций :time_ago из-за новой проблемы :discussion (:message).',
            'disqualify' => ':user дисквалифицировал :time_ago из-за новой проблемы :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => 'Вы уверены? Сообщение о новой проблеме сбросит статус номинации.',
            'disqualify' => 'Уверены? Карта будет снята с квалификации и статус номинирования будет сброшен.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'введите ключевые слова...',
            'login_required' => 'Войдите, чтобы искать.',
            'options' => 'Больше настроек поиска',
            'supporter_filter' => 'Сортировка по :filters требует наличия osu!supporter',
            'not-found' => 'нет результатов',
            'not-found-quote' => '... увы, ничего не найдено.',
            'filters' => [
                'extra' => 'Дополнительно',
                'general' => 'Общее',
                'genre' => 'Жанр',
                'language' => 'Язык',
                'mode' => 'Режим игры',
                'nsfw' => 'С откровенным содержанием',
                'played' => 'Сыграно',
                'rank' => 'Достигнутый ранг',
                'status' => 'Категории',
            ],
            'sorting' => [
                'title' => 'Названию',
                'artist' => 'Исполнителю',
                'difficulty' => 'Сложности',
                'favourites' => 'Добавлениям в Избранные',
                'updated' => 'Дате обновления',
                'ranked' => 'Дате появления в рейтинговых',
                'rating' => 'Оценкам',
                'plays' => 'Количеству игр',
                'relevance' => 'Релевантности',
                'nominations' => 'Номинациям',
            ],
            'supporter_filter_quote' => [
                '_' => 'Сортировка по :filters требует :link',
                'link_text' => 'тег osu!supporter',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Включить конвертированные карты',
        'featured_artists' => '',
        'follows' => 'Авторизованные мапперы',
        'recommended' => 'Рекомендованная сложность',
    ],
    'mode' => [
        'all' => 'Все',
        'any' => 'Любой',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
    ],
    'status' => [
        'any' => 'Все',
        'approved' => 'Одобренные',
        'favourites' => 'Избранные',
        'graveyard' => 'Заброшенные',
        'leaderboard' => 'С таблицей рекордов',
        'loved' => 'Любимые',
        'mine' => 'Мои карты',
        'pending' => 'В процессе разработки',
        'qualified' => 'Квалифицированные',
        'ranked' => 'Рейтинговые',
    ],
    'genre' => [
        'any' => 'Все',
        'unspecified' => 'Не определён',
        'video-game' => 'Видеоигры',
        'anime' => 'Аниме',
        'rock' => 'Рок',
        'pop' => 'Поп',
        'other' => 'Другой',
        'novelty' => 'Мемный',
        'hip-hop' => 'Хип-хоп',
        'electronic' => 'Электроника',
        'metal' => 'Метал',
        'classical' => 'Классика',
        'folk' => 'Народная',
        'jazz' => 'Джаз',
    ],
    'mods' => [
        '4K' => '',
        '5K' => '',
        '6K' => '',
        '7K' => '',
        '8K' => '',
        '9K' => '',
        'AP' => '',
        'DT' => '',
        'EZ' => '',
        'FI' => '',
        'FL' => '',
        'HD' => '',
        'HR' => '',
        'HT' => '',
        'MR' => '',
        'NC' => '',
        'NF' => '',
        'NM' => '',
        'PF' => '',
        'RX' => '',
        'SD' => '',
        'SO' => '',
        'TD' => '',
        'V2' => '',
    ],
    'language' => [
        'any' => 'Все',
        'english' => 'Английский',
        'chinese' => 'Китайский',
        'french' => 'Французский',
        'german' => 'Немецкий',
        'italian' => 'Итальянский',
        'japanese' => 'Японский',
        'korean' => 'Корейский',
        'spanish' => 'Испанский',
        'swedish' => 'Шведский',
        'russian' => 'Русский',
        'polish' => 'Польский',
        'instrumental' => 'Инструментальный',
        'other' => 'Другой',
        'unspecified' => 'Не определён',
    ],

    'nsfw' => [
        'exclude' => 'Скрыть',
        'include' => 'Показать',
    ],

    'played' => [
        'any' => 'Все',
        'played' => 'Сыграно',
        'unplayed' => 'Не сыграно',
    ],
    'extra' => [
        'video' => 'Есть видео',
        'storyboard' => 'Есть сториборд',
    ],
    'rank' => [
        'any' => 'Все',
        'XH' => 'SS+',
        'X' => '',
        'SH' => 'S+',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Количество игр: :count',
        'favourites' => 'В избранном: :count',
    ],
    'variant' => [
        'mania' => [
            '4k' => '4K',
            '7k' => '7K',
            'all' => 'Все',
        ],
    ],
];
