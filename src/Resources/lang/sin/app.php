<?php

return [
    'admin' => [
        'sales' => [
            'orders' => [
                'cancel-success' => 'ඇණවුම සාර්ථකයි ලබා ගත්තා.',

                'error' => [
                    'cancel-error' => 'ඇණවුම අවලංගු කළ නොහැක.',
                ],
            ],

            'invoices' => [
                'create-success' => 'ක්ෂේත්‍රය සාර්ථකව එකතු වී ඇත.',

                'error' => [
                    'creation-error'    => 'ඇණවුම් ක්ෂේත්‍රයක් නිර්නායක කිරීම අසල නොවේ.',
                    'invalid-qty-error' => 'ක්ෂේත්‍ර අයිතම සඳහා අවලංගු ප්‍රමාණයක් සඳහා ක්ෂේත්‍රයක් නිවැරීමක් වැලිපිලි විය.',
                    'product-error'     => 'ක්ෂේත්‍රය නොමැති සිටින්නේ කාණ්ඩයම් නොමැතියි.',
                ],
            ],

            'shipments' => [
                'create-success' => 'වෙහෙසුම සාර්ථකව එකතු වී ඇත.',

                'error' => [
                    'creation-error'    => 'මෙම ඇණවුම සඳහා වෙහෙසුමක් නිර්නායක කළ නොහැක.',
                    'invalid-qty-error' => 'වෙහෙසුම් අයිතම සඳහා අවලංගු ප්‍රමාණයක් සඳහා වෙහෙසුමක් නිවැරීමක් වැලිපිලි විය.',
                ],
            ],

            'refunds' => [
                'create-success' => 'ආපසු සාර්ථකව එකතු වී ඇත.',

                'error' => [
                    'creation-error'       => 'මෙම ඇණවුම සඳහා ආපසු නිර්නායක කළ නොහැක.',
                    'invalid-amount-error' => 'ආපසු මුදල නොමැතියි.',
                    'invalid-qty-error'    => 'වෙහෙසුම් අයිතම සඳහා අවලංගු ප්‍රමාණයක් සඳහා වෙහෙසුමක් නිවැරීමක් වැලිපිලි විය.',
                    'limit-error'          => 'ආපසු මුදලේ ලකුණ ලබා ගත යුතු මුදල :amount ය.',
                ],
            ],

            'transactions' => [
                'already-paid'               => 'මේ ක්ෂේත්‍රයක් දැනටමත් ගෙවා ඇත.',
                'invoice-missing'            => 'මෙම ක්ෂේත්‍රයේ ඉන්සුර් හමු නැත.',
                'transaction-amount-exceeds' => 'මෙම ක්ෂේත්‍රයේ මුදලේ වියදම සීමා කරන ලදි මුදල මුදල ප්‍රමාණයට වඩා වැඩි වේ.',
                'transaction-saved'          => 'ක්ෂේත්‍රය සුරකින ලදි.',
            ],
        ],

        'catalog' => [
            'products' => [
                'create-success' => 'නිෂ්පාදනය සාර්ථකව එකතු වී ඇත.',
                'delete-success' => 'නිෂ්පාදනය සාර්ථකව මකා දමන ලදි',
                'update-success' => 'නිෂ්පාදනය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'inventories' => [
                    'update-success' => 'අනුවාදය සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'mass-operations' => [
                    'delete-success'  => 'තෝරාගත් නිෂ්පාදන සාර්ථකව මකා දමා ඇත.',
                    'update-success'  => 'තෝරාගත් නිෂ්පාදන සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'error' => [
                    'configurable-error' => 'කර්මාන්තශාලාව එකතු කිරීමට කරුණාකර එකතු වන්න.',
                ],
            ],

            'categories' => [
                'create-success' => 'ප්‍රවර්ගය සාර්ථකව එකතු වී ඇත.',
                'delete-success' => 'ප්‍රවර්ගය සාර්ථකව මකා දමන ලදි',
                'update-success' => 'ප්‍රවර්ගය සාර්ථකව යාවත්කාලීන කරන ලදි.',
                'not-exist'      => 'ප්‍රවර්ගය හමු නොවීය.',

                'mass-operations' => [
                    'delete-success'  => 'තෝරාගත් ප්‍රවර්ග සාර්ථකව මකා දමා ඇත.',
                    'update-success'  => 'තෝරාගත් ප්‍රවර්ග සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],
            ],

            'attributes' => [
                'create-success' => 'සෘජුව සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'සෘජු සාර්ථකව මකා දමා ඇත',
                'update-success' => 'සෘජුව සාර්ථකව යාවත්කාලීන කර ඇත.',

                'error' => [
                    'cannot-change-type'       => 'වර්ගය ක්‍රියා කල නොහැක',
                    'system-attributes-delete' => 'පද්ධති ගුණාංග මකා දමා නොහැක.',

                    'mass-operations' => [
                        'resource-not-found' => 'තෝරාගත් සංඛ්‍යාවන් හමු නොවී ඇත.',
                    ],
                ],
            ],

            'families'   => [
                'create-success' => 'පවුලේ සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'පවුල් සාර්ථකව මකා දමා ඇත',
                'update-success' => 'පවුල් සාර්ථකව යාවත්කාලීන කර ඇත.',

                'error' => [
                    'being-used'       => 'මෙම සම්පූර්ණ පවුල් :source හි භාවිතා කර ඇත.',
                    'can-not-updated'  => 'කේතය යාවත්කාලීන කළ නොහැක',
                    'last-item-delete' => 'අවශ්‍යතාවයේ පවුල් එකක් අවශ්‍ය වේ.',
                ],
            ],
        ],

        'customers' => [
            'customers' => [
                'create-success' => 'ක්ෂෙත්කරු සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ක්ෂෙත්කරු සාර්ථකව මකා දමා ඇත',
                'update-success' => 'ක්ෂෙත්කරු සාර්ථකව යාවත්කාලීන කර ඇත.',

                'mass-operations' => [
                    'delete-success' => 'තෝරාගත් ක්ෂෙත්කරුගයන් සාර්ථකව මකා දමා ඇත.',
                    'update-success' => 'තෝරාගත් ක්ෂෙත්කරුගයන් සාර්ථකව යාවත්කාලීන කර ඇත.',
                ],

                'error' => [
                    'order-pending-account-delete' => 'කිසිදු ඇණවුමක් අනුමත හෝ සංස්කරණ තත්ත්වයක් හෝ සේවාදායකයෙකු වෙත සැකසුම් ගත නොහැකි සත්කාරකයක් ගැනීමට අවශ්‍ය විය.',
                ],

                'notes' => [
                    'note-taken' => 'සටහන ගත කරන ලදි.',
                ],
            ],

            'addresses' => [
                'create-success' => 'ලිපිනය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ලිපිනය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'ලිපිනය සාර්ථකව යාවත්කාලීන කර ඇත.',

                'mass-operations' => [
                    'delete-success' => 'තෝරාගත් ලිපිනයන් සාර්ථකව මකා දමා ඇත.',
                ],
            ],

            'groups' => [
                'create-success' => 'ප්‍රජාතන්ති කණ්ඩායම සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ප්‍රජාතන්ති කණ්ඩායම සාර්ථකව මකා දමන ලදි',
                'update-success' => 'ප්‍රජාතන්ති කණ්ඩායම සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'being-used'           => 'මෙම ගරු කණ්ඩායම ප්‍රභේදයේ භාවිතා කරමින් විසින් භාවිතා වේ.',
                    'default-group-delete' => 'පෙරනිමි කණ්ඩායම ඉවත් කළ නොහැක.',
                ],
            ],

            'reviews' => [
                'delete-success' => 'ප්‍රජාතන්ති සාර්ථකව මකා දමා ඇත',
                'update-success' => 'ප්‍රජාතන්ති සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'mass-operations' => [
                    'delete-success' => 'තෝරා ගන්නා ප්‍රස්තාරු සාර්ථකව මකා දමා ඇත.',
                    'update-success' => 'තෝරා ගන්නා ප්‍රස්තාරු සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],
            ],
        ],

        'cms' => [
            'create-success' => 'CMS සාර්ථකව එකතු කර ඇත.',
            'delete-success' => 'CMS සාර්ථකව මකා දමා ඇත',
            'update-success' => 'CMS සාර්ථකව යාවත්කාලීන කරන ලදි.',

            'mass-operations' => [
                'delete-success' => 'තෝරා ගන්නා පිටු සාර්ථකව මකා දමා ඇත.',
            ],

            'error' => [
                'already-taken' => 'පිටු දැනටමත් ලබා ඇත.',
            ],
        ],

        'marketing' => [
            'communications' => [
                'campaigns' => [
                    'create-success' => 'කැම්පේන් සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'කැම්පේන් සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'කැම්පේන් සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'events' => [
                    'create-success' => 'ස්වාධීනව සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'ස්වාධීනව සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'ස්වාධීනව සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'templates' => [
                    'create-success' => 'එමේල් අඩවිය සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'එමේල් අඩවිය සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'එමේල් අඩවිය සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'subscribers' => [
                    'delete-success' => 'පුද්ගලික පත්‍රය සාර්ථකව මකා දමන ලදි',
                    'update-failed'  => 'නිවැරදි නිර්යාත්මක සාර්ථකව යාවත්කාලීන කිරීමේ අසාර්ථකයි',
                    'update-success' => 'නිවැරදි නිර්යාත්මක සාර්ථකව යාවත්කාලීන කරන ලදි',
                ],
            ],

            'promotions' => [
                'cart-rules' => [
                    'create-success' => 'කට් රූල් සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'කට් රූල් සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'කට් රූල් සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'catalog-rules' => [
                    'create-success' => 'කැටලොග් රූල් සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'කැටලොග් රූල් සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'කැටලොග් රූල් සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'cart-rule-coupons' => [
                    'create-success' => 'කාට් රූල් කූපනය සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'කාට් රූල් කූපනය සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'කාට් රූල් කූපනය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                    'mass-operations' => [
                        'delete-success' => 'කරත්ත රීති කූපන් පත් සාර්ථකව මකා ඇත'
                    ]
                ],
            ],

            'search-seo' => [
                'url-rewrites' => [
                    'create-success'  => 'URL පුරක්ෂාව සාර්ථකයි.',
                    'delete-success'  => 'URL පුරක්ෂාව සාර්ථකව ඉවත් කරන ලදි.',
                    'update-success'  => 'URL පුරක්ෂාව සාර්ථකව යාවත් කරන ලදි.',

                    'mass-operations' => [
                        'delete-success' => 'URL පුරක්ෂාව සාර්ථකව ඉවත් කරන ලදි.',
                    ],
                ],

                'search-terms' => [
                    'create-success'  => 'සෙවුම් අදහස් සාර්ථකව එකතු කරන ලදි.',
                    'delete-success'  => 'සෙවුම් අදහස් සාර්ථකව ඉවත් කරන ලදි.',
                    'update-success'  => 'සෙවුම් අදහස් සාර්ථකව යාවත් කරන ලදි.',

                    'mass-operations' => [
                        'delete-success' => 'සෙවුම් අදහස් සාර්ථකව ඉවත් කරන ලදි.',
                    ],
                ],

                'search-synonyms' => [
                    'create-success'  => 'සෙවුම් සමාලෝචනයන් සාර්ථකව එකතු කරන ලදි.',
                    'delete-success'  => 'සෙවුම් සමාලෝචනයන් සාර්ථකව ඉවත් කරන ලදි.',
                    'update-success'  => 'සෙවුම් සමාලෝචනයන් සාර්ථකව යාවත් කරන ලදි.',

                    'mass-operations' => [
                        'delete-success' => 'සෙවුම් සමාලෝචනයන් සාර්ථකව ඉවත් කරන ලදි.',
                    ],
                ],

                'sitemaps' => [
                    'create-success'  => 'සරුපය සාර්ථකව එකතු කරන ලදි.',
                    'delete-success'  => 'සරුපය සාර්ථකව ඉවත් කරන ලදි.',
                    'update-success'  => 'සරුපය සාර්ථකව යාවත් කරන ලදි.',

                    'mass-operations' => [
                        'delete-success' => 'සරුපය සාර්ථකව ඉවත් කරන ලදි.',
                    ],
                ],
            ],
        ],

        'settings' => [
            'locales' => [
                'create-success' => 'ප්‍රාදේශිකය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ප්‍රාදේශිකය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'ප්‍රාදේශිකය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'last-item-delete' => 'අවසන් අයිතම් ප්‍රාදේශියක් අවශ්‍ය වේ.',
                ],
            ],

            'currencies' => [
                'create-success' => 'ව්‍යාප්තිය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ව්‍යාප්තිය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'ව්‍යාප්තිය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'last-item-delete' => 'අවසන් මුදල් අයිතම් වෙනස් ප්‍රමානයක් අවශ්‍ය වේ.',
                ],
            ],

            'exchange-rates' => [
                'create-success' => 'මුදල් පරාසය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'මුදල් පරාසය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'මුදල් පරාසය සාර්ථකව යාවත්කාලීන කරන ලදි.',
            ],

            'inventory-sources' => [
                'create-success' => 'හැඳුනුම්පත් ගබඩා මූලාශ්රය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'හැඳුනුම්පත් ගබඩා මූලාශ්රය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'හැඳුනුම්පත් ගබඩා මූලාශ්රය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'last-item-delete' => 'අවසන් තහවුරු මූලාශ්රයක් අවශ්‍ය වේ.',
                ],
            ],

            'taxes' => [
                'tax-rates' => [
                    'create-success' => 'වගු අනු ශාලාව සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'වගු අනු ශාලාව සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'වගු අනු ශාලාව සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'tax-categories' => [
                    'create-success' => 'වගු කාණ්ඩය සාර්ථකව එකතු කර ඇත.',
                    'delete-success' => 'වගු කාණ්ඩය සාර්ථකව මකා දමා ඇත',
                    'update-success' => 'වගු කාණ්ඩය සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],
            ],

            'channels' => [
                'create-success' => 'සංස්කාරකය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'සංස්කාරකය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'සංස්කාරකය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'last-item-delete' => 'අවසන් සංස්කාරකයක් අවශ්‍ය වේ.',
                ],
            ],

            'users' => [
                'create-success' => 'පරිශීලකයා සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'පරිශීලකයා සාර්ථකව මකා දමා ඇත',
                'update-success' => 'පරිශීලකයා සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'cannot-change-column' => 'පරිශීලකයන් වෙනස් කළ නොහැක.',
                    'last-item-delete'     => 'අවසන් පරිශීලකයක් අවශ්‍ය වේ.',
                ],
            ],

            'roles' => [
                'create-success' => 'භාවිතා කරන්නා භාරය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'භාවිතා කරන්නා භාරය සාර්ථකව මකා දමා ඇත',
                'update-success' => 'භාවිතා කරන්නා භාරය සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'being-used'       => 'මෙම සම්බන්ධතා වෙනස් කරන ලදි අඩවියට භාවිතා කරමින්.',
                    'last-item-delete' => 'අවසන් භාවිතා කළ යුතු අයිතම් එකක් අවශ්‍ය වේ.',
                ],
            ],

            'themes' => [
                'create-success' => 'තේමාව සාර්ථකව නිර්මාණය කර ඇත',
                'delete-success' => 'තේමාව සාර්ථකව මකා ඇත',
                'update-success' => 'තේමාව සාර්ථකව යාවත්කාලීන කර ඇත',
            ],
        ],

        'configuration' => [
            'create-success' => 'වින්යාසය සාර්ථකව එකතු කර ඇත.',
            'delete-success' => 'වින්යාසය සාර්ථකව මකා දමා ඇත',
            'update-success' => 'වින්යාසය සාර්ථකව යාවත්කාලීන කරන ලදි.',
        ],

        'account' => [
            'create-success'     => 'ගිණුම සාර්ථකව එකතු කර ඇත.',
            'delete-success'     => 'ගිණුම සාර්ථකව මකා දමා ඇත',
            'logged-in-success'  => 'සාර්ථකව ලොගින් වීම.',
            'logged-out-success' => 'සාර්ථකව ඉවත් වීම.',
            'update-success'     => 'ගිණුම සාර්ථකව යාවත්කාලීන කරන ලදි.',

            'error' => [
                'credential-error'  => 'ලබා දුන් දත්ත සහිතයන් වැරදිය.',
                'invalid'           => 'වලංගු ඊමේල් හෝ මුරපදය',
                'password-mismatch' => 'වත්මන් මුරපදය ගැලපෙන්නේ නැත.',
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'addresses' => [
                'create-success' => 'ඔබගේ ලිපිනය සාර්ථකව එකතු කර ඇත.',
                'delete-success' => 'ඔබගේ ලිපිනය සාර්ථකව මකා දමා ඇත.',
                'update-success' => 'ඔබගේ ලිපිනය සාර්ථකව යාවත්කාලීන කරන ලදි.',
            ],

            'accounts' => [
                'create-success'     => 'ඔබගේ ගිණුම සාර්ථකව එකතු කර ඇත.',
                'delete-success'     => 'ඔබගේ ගිණුම සාර්ථකව මකා දමා ඇත.',
                'logged-in-success'  => 'සාර්ථකව ලොගින් වීම.',
                'logged-out-success' => 'සාර්ථකව ඉවත් වීම.',
                'update-success'     => 'ඔබගේ ගිණුම සාර්ථකව යාවත්කාලීන කරන ලදි.',

                'error' => [
                    'credential-error'  => 'ලබා දීමෙන් තෝරා ගන්නා අත්තිකාර වලංගු නොවේ.',
                    'invalid'           => 'අවලංගු ඊමේල් හෝ මුරපදය',
                    'password-mismatch' => 'වත්මන් මුරපදය ගැළපෙන්නේ නැත.',
                    'update-failed'     => 'ඔබගේ ගිණුම යාවත්කාලීන කිරීමේ වියදමට දෝෂයක් සිදු විය',
                ],
            ],
        ],

        'checkout' => [
            'billing-address-saved'   => 'ලිපිනය සාර්ථකව සුරකින ලදි.',
            'check-billing-address'   => 'කරුණාකර සියලු ලිපිනය පරික්ෂා කරන්න.',
            'check-shipping-address'  => 'කරුණාකර නැවුම් ලිපිනය පරික්ෂා කරන්න.',
            'minimum-order-message'   => 'අවට :amount යෙදුම් මිල අවශ්‍ය වේ.',
            'order-saved'             => 'ඇණවුම සාර්ථකව සුරකින ලදි',
            'payment-method-saved'    => 'ගෙවීම් ක්‍රමය සාර්ථකව සුරකින ලදි.',
            'shipping-method-saved'   => 'වෙළඳ ප්‍රමාණය සාර්ථකව සුරකින ලදි.',
            'specify-payment-method'  => 'කරුණාකර ගෙවීම් ක්‍රමය සඳහා ප්‍රකාශක්රමය දක්වන්න.',
            'specify-shipping-method' => 'කරුණාකර වෙළඳ ප්‍රමාණය සඳහා ප්‍රකාශක්රමය දක්වන්න.',

            'cart' => [
                'item' => [
                    'success'        => 'අයිතම සාර්ථකව කරන ලදි.',
                    'success-remove' => 'අයිතම ගමනානුකරන ලදි.',
                ],

                'quantity' => [
                    'illegal' => 'ප්‍රමාණය එකතු කළ නොහැක.',
                    'success' => 'කාට් අයිතම(්) සාර්ථකව යාවත්කාලීන කරන ලදි.',
                ],

                'coupon' => [
                    'apply-issue'    => 'කූපන් ප්‍රතිස්ථාපනය කළ නොහැක.',
                    'invalid'        => 'කූපන් ප්‍රතිස්ථාපනය සඳහා අවලංගු කේතයකි.',
                    'success-remove' => 'කූපන් ඉවත් කිරීම සාර්ථකව යාම.',
                    'success'        => 'කූපන් ප්‍රතිස්ථාපනය සාර්ථකව යාම.',
                ],

                'move-wishlist' => [
                    'success' => 'අයිතම සාර්ථකව හැඳුනු ලදි.',
                ],
            ],
        ],

        'wishlist' => [
            'moved'          => 'අයිතම සාර්ථකව කරන්නා වෙළඳපොලට ගෙන යන ලදි.',
            'option-missing' => 'නිර්දේශිත තේරීම් අවශ්‍ය වේ, එය විශ්වාසනයට ගෙන දන්නේ නැත.',
            'removed'        => 'අයිතම සාර්ථකව විශ්වාසනයේ සිට ඉවත් කර ඇත',
            'success'        => 'අයිතම සාර්ථකව විශ්වාසනයට එකතු කර ඇත',

            'error' => [
                'security-warning' => 'සම්බන්ධ ක්‍රියාකාරකම් සොයාගත හැකිය!',

                'mass-operations' => [
                    'resource-not-found' => 'තෝරාගත් විශ්වාසනයේ නොමැත.',
                ],
            ],
        ],

        'sales' => [
            'orders' => [
                'cancel' => 'ඇණවුම සාර්ථකව අවලංගු කරන ලදි.',

                'error' => [
                    'cancel-error' => 'ඇණවුම අවලංගු කළ නොහැක.',
                ],
            ],
        ],

        'catalog' => [
            'products' => [
                'configurable-error' => 'කරුණාකර අවසන් සංස්කරණයක් එකතු කරන්න.',

                'reviews' => [
                    'create-success' => 'ඔබගේ විශ්වාසය සාර්ථකව යොමු කර ඇත.',
                ],
            ],
        ],
    ],
];
