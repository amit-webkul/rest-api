<?php

return [
    'admin' => [
        'sales' => [
            'orders' => [
                'cancel-success' => 'Заказ успешно отменен.',

                'error' => [
                    'cancel-error' => 'Заказ не может быть отменен.',
                ],
            ],

            're-order' => [
                'address-create-success'  => 'Адрес успешно сохранен',
                'address-not-available'   => 'Нет доступных методов доставки.',
                'create'                  => 'Товар успешно добавлен в корзину',
                'error'                   => 'Что-то пошло не так!',
                'order-create-success'    => 'Заказ успешно размещен.',
                'payment-create-success'  => 'Метод оплаты успешно сохранен',
                'shipping-create-success' => 'Метод доставки успешно сохранен',
            ],

            'invoices' => [
                'create-success' => 'Счет успешно добавлен.',

                'error' => [
                    'creation-error'    => 'Создание счета для заказа запрещено.',
                    'invalid-qty-error' => 'Обнаружено недопустимое количество для выставления счета за товары.',
                    'product-error'     => 'Счет не может быть создан без товаров.',
                ],
            ],

            'shipments' => [
                'create-success' => 'Отправка успешно добавлена.',

                'error' => [
                    'creation-error'    => 'Отправка не может быть создана для этого заказа.',
                    'invalid-qty-error' => 'Обнаружено недопустимое количество товаров для отправки.',
                ],
            ],

            'refunds' => [
                'create-success' => 'Возврат успешно добавлен.',

                'error' => [
                    'creation-error'       => 'Возврат не может быть создан для этого заказа.',
                    'invalid-amount-error' => 'Сумма возврата должна быть ненулевой.',
                    'invalid-qty-error'    => 'Обнаружено недопустимое количество для возврата товаров.',
                    'limit-error'          => 'Максимальная сумма для возврата: :amount.',
                ],
            ],

            'transactions' => [
                'already-paid'               => 'Этот счет уже оплачен.',
                'invoice-missing'            => 'Этот идентификатор счета не существует.',
                'transaction-amount-exceeds' => 'Указанная сумма этой транзакции превышает общую сумму счета.',
                'transaction-saved'          => 'Транзакция сохранена.',
            ],
        ],

        'catalog' => [
            'products' => [
                'create-success' => 'Продукт успешно добавлен.',
                'delete-success' => 'Продукт успешно удален.',
                'update-success' => 'Продукт успешно обновлен.',

                'inventories' => [
                    'update-success' => 'Инвентарь успешно обновлен.',
                ],

                'mass-operations' => [
                    'delete-success'  => 'Выбранные продукты успешно удалены.',
                    'update-success'  => 'Выбранные продукты успешно обновлены.',
                ],

                'error' => [
                    'configurable-error' => 'Пожалуйста, выберите хотя бы один конфигурируемый атрибут.',
                ],
            ],

            'categories' => [
                'create-success' => 'Категория успешно добавлена.',
                'delete-success' => 'Категория успешно удалена.',
                'update-success' => 'Категория успешно обновлена.',
                'not-exist'      => 'Категория не найдена.',

                'mass-operations' => [
                    'delete-success'  => 'Выбранные категории успешно удалены.',
                    'update-success'  => 'Выбранные категории успешно обновлены.',
                ],
            ],

            'attributes' => [
                'create-success' => 'Атрибут успешно добавлен.',
                'delete-success' => 'Атрибут успешно удален.',
                'update-success' => 'Атрибут успешно обновлен.',

                'error' => [
                    'cannot-change-type'       => 'Невозможно изменить тип поля.',
                    'system-attributes-delete' => 'Невозможно удалить системные атрибуты.',

                    'mass-operations' => [
                        'resource-not-found' => 'Выбранные атрибуты не найдены.',
                    ],
                ],
            ],

            'families'   => [
                'create-success' => 'Семейство успешно добавлено.',
                'delete-success' => 'Семейство успешно удалено.',
                'update-success' => 'Семейство успешно обновлено.',

                'error' => [
                    'being-used'       => 'Это семейство используется в :source.',
                    'can-not-updated'  => 'Невозможно обновить код',
                    'last-item-delete' => 'Требуется как минимум одно семейство.',
                ],
            ],
        ],

        'customers' => [
            'customers' => [
                'create-success' => 'Покупатель успешно добавлен.',
                'delete-success' => 'Покупатель успешно удален.',
                'update-success' => 'Покупатель успешно обновлен.',

                'mass-operations' => [
                    'delete-success' => 'Выбранные покупатели успешно удалены.',
                    'update-success' => 'Выбранные покупатели успешно обновлены.',
                ],

                'error' => [
                    'order-pending-account-delete' => 'Невозможно удалить учетную запись покупателя, так как есть незавершенные или обрабатываемые заказы.',
                ],

                'notes' => [
                    'note-taken' => 'Заметка добавлена.',
                ],
            ],

            'addresses' => [
                'create-success' => 'Адрес успешно добавлен.',
                'delete-success' => 'Адрес успешно удален.',
                'update-success' => 'Адрес успешно обновлен.',

                'mass-operations' => [
                    'delete-success' => 'Выбранные адреса успешно удалены.',
                ],
            ],

            'groups' => [
                'create-success' => 'Группа покупателей успешно добавлена.',
                'delete-success' => 'Группа покупателей успешно удалена.',
                'update-success' => 'Группа покупателей успешно обновлена.',

                'error' => [
                    'being-used'           => 'Эта группа используется у покупателей.',
                    'default-group-delete' => 'Невозможно удалить группу по умолчанию.',
                ],
            ],

            'reviews' => [
                'delete-success' => 'Отзыв успешно удален.',
                'update-success' => 'Отзыв успешно обновлен.',

                'mass-operations' => [
                    'delete-success' => 'Выбранные отзывы успешно удалены.',
                    'update-success' => 'Выбранные отзывы успешно обновлены.',
                ],
            ],

            'news-letter' => [
                'create-success'  => 'Вы успешно подписались на нашу рассылку.',
                'warning-message' => 'Вы уже подписаны на нашу рассылку.',
            ],
        ],

        'cms' => [
            'create-success' => 'CMS успешно добавлен.',
            'delete-success' => 'CMS успешно удален.',
            'update-success' => 'CMS успешно обновлен.',

            'mass-operations' => [
                'delete-success' => 'Выбранные страницы успешно удалены.',
            ],

            'error' => [
                'already-taken' => 'Эта страница уже занята.',
            ],
        ],

        'marketing' => [
            'communications' => [
                'campaigns' => [
                    'create-success' => 'Кампания успешно добавлена.',
                    'delete-success' => 'Кампания успешно удалена.',
                    'update-success' => 'Кампания успешно обновлена.',
                ],

                'events' => [
                    'create-success' => 'Событие успешно добавлено.',
                    'delete-success' => 'Событие успешно удалено.',
                    'update-success' => 'Событие успешно обновлено.',
                ],

                'templates' => [
                    'create-success' => 'Шаблон электронного письма успешно добавлен.',
                    'delete-success' => 'Шаблон электронного письма успешно удален.',
                    'update-success' => 'Шаблон электронного письма успешно обновлен.',
                ],

                'subscribers' => [
                    'delete-success' => 'Подписка на рассылку успешно удалена',
                    'update-failed'  => 'Обновление подписки на рассылку не удалось',
                    'update-success' => 'Подписка на рассылку успешно обновлена',
                ],
            ],

            'promotions' => [
                'cart-rules' => [
                    'create-success' => 'Правило корзины успешно добавлено.',
                    'delete-success' => 'Правило корзины успешно удалено.',
                    'update-success' => 'Правило корзины успешно обновлено.',
                ],

                'catalog-rules' => [
                    'create-success' => 'Правило каталога успешно добавлено.',
                    'delete-success' => 'Правило каталога успешно удалено.',
                    'update-success' => 'Правило каталога успешно обновлено.',
                ],

                'cart-rule-coupons' => [
                    'create-success' => 'Купон для правила корзины успешно добавлен.',
                    'delete-success' => 'Купон для правила корзины успешно удален.',
                    'update-success' => 'Купон для правила корзины успешно обновлен.',

                    'mass-operations' => [
                        'delete-success' => 'Купоны правил корзины успешно удалены.'
                    ]
                ],
            ],

            'search-seo' => [
                'url-rewrites' => [
                    'create-success'  => 'Перенаправление URL успешно добавлено.',
                    'delete-success'  => 'Перенаправление URL успешно удалено.',
                    'update-success'  => 'Перенаправление URL успешно обновлено.',

                    'mass-operations' => [
                        'delete-success' => 'Перенаправление URL успешно удалено.',
                    ],
                ],

                'search-terms' => [
                    'create-success'  => 'Термины поиска успешно добавлены.',
                    'delete-success'  => 'Термины поиска успешно удалены.',
                    'update-success'  => 'Термины поиска успешно обновлены.',

                    'mass-operations' => [
                        'delete-success' => 'Термины поиска успешно удалены.',
                    ],
                ],

                'search-synonyms' => [
                    'create-success'  => 'Синонимы поиска успешно добавлены.',
                    'delete-success'  => 'Синонимы поиска успешно удалены.',
                    'update-success'  => 'Синонимы поиска успешно обновлены.',

                    'mass-operations' => [
                        'delete-success' => 'Синонимы поиска успешно удалены.',
                    ],
                ],

                'sitemaps' => [
                    'create-success' => 'Карты сайта успешно созданы.',
                    'delete-success' => 'Карты сайта успешно удалены.',
                    'update-success' => 'Карты сайта успешно обновлены.',
                ],
            ],
        ],

        'settings' => [
            'locales' => [
                'create-success' => 'Языковая версия успешно добавлена.',
                'delete-success' => 'Языковая версия успешно удалена.',
                'update-success' => 'Языковая версия успешно обновлена.',

                'error' => [
                    'last-item-delete' => 'Требуется как минимум одна языковая версия.',
                ],
            ],

            'currencies' => [
                'create-success' => 'Валюта успешно добавлена.',
                'delete-success' => 'Валюта успешно удалена.',
                'update-success' => 'Валюта успешно обновлена.',

                'error' => [
                    'last-item-delete' => 'Требуется как минимум одна валюта.',
                ],
            ],

            'exchange-rates' => [
                'create-success' => 'Обменный курс успешно добавлен.',
                'delete-success' => 'Обменный курс успешно удален.',
                'update-success' => 'Обменный курс успешно обновлен.',
            ],

            'inventory-sources' => [
                'create-success'   => 'Источник инвентаризации успешно добавлен.',
                'delete-success'   => 'Источник инвентаризации успешно удален.',
                'update-success'   => 'Источник инвентаризации успешно обновлен.',

                'error' => [
                    'last-item-delete' => 'Требуется как минимум один источник инвентаризации.',
                ],
            ],

            'taxes' => [
                'tax-rates' => [
                    'create-success' => 'Налоговая ставка успешно добавлена.',
                    'delete-success' => 'Налоговая ставка успешно удалена.',
                    'update-success' => 'Налоговая ставка успешно обновлена.',
                ],

                'tax-categories' => [
                    'create-success' => 'Налоговая категория успешно добавлена.',
                    'delete-success' => 'Налоговая категория успешно удалена.',
                    'update-success' => 'Налоговая категория успешно обновлена.',
                ],
            ],

            'channels' => [
                'create-success' => 'Канал успешно добавлен.',
                'delete-success' => 'Канал успешно удален.',
                'update-success' => 'Канал успешно обновлен.',

                'error' => [
                    'last-item-delete' => 'Требуется как минимум один канал.',
                ],
            ],

            'users' => [
                'create-success' => 'Пользователь успешно добавлен.',
                'delete-success' => 'Пользователь успешно удален.',
                'update-success' => 'Пользователь успешно обновлен.',

                'error' => [
                    'cannot-change-column' => 'Невозможно изменить пользователя.',
                    'last-item-delete'     => 'Требуется как минимум один пользователь.',
                ],
            ],

            'roles' => [
                'create-success' => 'Роль успешно добавлена.',
                'delete-success' => 'Роль успешно удалена.',
                'update-success' => 'Роль успешно обновлена.',

                'error' => [
                    'being-used'       => 'Эта роль используется в администраторском пользователе.',
                    'last-item-delete' => 'Требуется как минимум одна роль.',
                ],
            ],

            'themes' => [
                'create-success' => 'Тема успешно создана',
                'delete-success' => 'Тема успешно удалена',
                'update-success' => 'Тема успешно обновлена',
            ],
        ],

        'configuration' => [
            'create-success' => 'Конфигурация успешно добавлена.',
            'delete-success' => 'Конфигурация успешно удалена.',
            'update-success' => 'Конфигурация успешно обновлена.',
        ],

        'account' => [
            'create-success'     => 'Аккаунт успешно добавлен.',
            'delete-success'     => 'Аккаунт успешно удален.',
            'logged-in-success'  => 'Вход выполнен успешно.',
            'logged-out-success' => 'Выход выполнен успешно.',
            'update-success'     => 'Аккаунт успешно обновлен.',

            'error' => [
                'credential-error'  => 'Указанные учетные данные неверны.',
                'invalid'           => 'Неверный адрес электронной почты или пароль',
                'password-mismatch' => 'Текущий пароль не совпадает.',
            ],
        ],

        'errors' => [
            '404' => [
                'message' => 'Упс! Страница, которую вы ищете, находится на каникулах. Похоже, мы не смогли найти то, что вы искали.',
                'title'   => '404 Страница не найдена',
            ],

            '401' => [
                'message' => 'Упс! Похоже, у вас нет доступа к этой странице. Похоже, у вас отсутствуют необходимые учетные данные.',
                'title'   => '401 Не авторизован',
            ],

            '403' => [
                'message' => 'Упс! Эта страница закрыта для вас. Похоже, у вас нет необходимых прав для просмотра этого контента.',
                'title'   => '403 Доступ запрещен',
            ],

            '500' => [
                'message' => 'Упс! Что-то пошло не так. Похоже, у нас возникли проблемы с загрузкой страницы, которую вы ищете.',
                'title'   => '500 Внутренняя ошибка сервера',
            ],

            '503' => [
                'message' => 'Упс! Похоже, мы временно вышли из строя для технического обслуживания. Пожалуйста, проверьте позже.',
                'title'   => '503 Сервис недоступен',
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'addresses' => [
                'create-success' => 'Seu endereço foi criado com sucesso.',
                'delete-success' => 'Seu endereço foi excluído com sucesso.',
                'update-success' => 'Seu endereço foi atualizado com sucesso.',
            ],

            'accounts' => [
                'create-success'     => 'Sua conta foi criada com sucesso.',
                'delete-success'     => 'Sua conta foi excluída com sucesso.',
                'logged-in-success'  => 'Logado com sucesso.',
                'logged-out-success' => 'Deslogado com sucesso.',
                'update-success'     => 'Sua conta foi atualizada com sucesso.',

                'error' => [
                    'credential-error'  => 'Предоставленные учетные данные неверны.',
                    'invalid'           => 'Неверный адрес электронной почты или пароль',
                    'password-mismatch' => 'Текущий пароль не совпадает.',
                    'update-failed'     => 'Произошла ошибка при обновлении вашей учетной записи',
                ],
            ],
        ],

        'checkout' => [
            'billing-address-saved'   => 'Адрес успешно сохранен.',
            'check-billing-address'   => 'Пожалуйста, проверьте платежный адрес.',
            'check-shipping-address'  => 'Пожалуйста, проверьте адрес доставки.',
            'minimum-order-message'   => 'Минимальная сумма заказа составляет :amount.',
            'order-saved'             => 'Заказ успешно сохранен',
            'payment-method-saved'    => 'Способ оплаты успешно сохранен.',
            'shipping-method-saved'   => 'Способ доставки успешно сохранен.',
            'specify-payment-method'  => 'Пожалуйста, укажите способ оплаты.',
            'specify-shipping-method' => 'Пожалуйста, укажите способ доставки.',

            'cart' => [
                'item' => [
                    'empty'           => 'Ваша корзина пуста.',
                    'error'           => 'Товар в корзине не найден.',
                    'inactive-add'    => 'Неактивный товар нельзя добавить в корзину.',
                    'invalid-product' => 'Идентификатор продукта недействителен.',
                    'success'         => 'Товар успешно удален из корзины.',
                    'success-remove'  => 'Товар успешно добавлен в корзину.',
                ],

                'quantity' => [
                    'illegal' => 'Количество не может быть меньше единицы.',
                    'success' => 'Товар(ы) в корзине успешно обновлен(ы).',
                ],

                'coupon' => [
                    'apply-issue'    => 'Не удалось применить код купона.',
                    'invalid'        => 'Неверный код купона.',
                    'success-remove' => 'Купон успешно удален.',
                    'success'        => 'Код купона успешно применен.',
                ],

                'move-wishlist' => [
                    'success' => 'Товар успешно перемещен в список желаний.',
                ],
            ],
        ],

        'wishlist' => [
            'moved'          => 'Товар успешно перемещен в корзину.',
            'option-missing' => 'Отсутствуют параметры продукта, поэтому товар не может быть перемещен в список желаний.',
            'removed'        => 'Товар успешно удален из списка желаний.',
            'success'        => 'Товар успешно добавлен в список желаний.',

            'error' => [
                'security-warning' => 'Обнаружена подозрительная активность!',

                'mass-operations' => [
                    'resource-not-found' => 'Выбранный продукт в списке желаний не найден.',
                ],
            ],
        ],

        'sales' => [
            'orders' => [
                'cancel' => 'Заказ успешно отменен.',

                'error' => [
                    'cancel-error' => 'Заказ не может быть отменен.',
                ],
            ],
        ],

        'catalog' => [
            'products' => [
                'configurable-error' => 'Пожалуйста, выберите хотя бы один настраиваемый атрибут.',

                'reviews' => [
                    'create-success' => 'Ваш отзыв был успешно отправлен.',
                ],
            ],
        ],

        'errors' => [
            '404' => [
                'message' => 'Упс! Страница, которую вы ищете, находится на каникулах. Похоже, мы не смогли найти то, что вы искали.',
                'title'   => '404 Страница не найдена',
            ],

            '401' => [
                'message' => 'Упс! Похоже, у вас нет доступа к этой странице. Похоже, у вас отсутствуют необходимые учетные данные.',
                'title'   => '401 Не авторизован',
            ],

            '403' => [
                'message' => 'Упс! Эта страница закрыта для вас. Похоже, у вас нет необходимых прав для просмотра этого контента.',
                'title'   => '403 Доступ запрещен',
            ],

            '500' => [
                'message' => 'Упс! Что-то пошло не так. Похоже, у нас возникли проблемы с загрузкой страницы, которую вы ищете.',
                'title'   => '500 Внутренняя ошибка сервера',
            ],

            '503' => [
                'message' => 'Упс! Похоже, мы временно вышли из строя для технического обслуживания. Пожалуйста, проверьте позже.',
                'title'   => '503 Сервис недоступен',
            ],
        ],
    ],
];
