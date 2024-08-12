<?php

return [
    'admin' => [
        'sales' => [
            'orders' => [
                'cancel-success' => 'आदेश सफलतापूर्वक रद्द किया गया।',

                'error' => [
                    'cancel-error' => 'आदेश को रद्द नहीं किया जा सकता।',
                ],
            ],

            're-order' => [
                'address-create-success'  => 'पता सफलतापूर्वक सहेजा गया',
                'address-not-available'   => 'कोई शिपिंग विधियाँ उपलब्ध नहीं हैं।',
                'create'                  => 'वस्तु सफलतापूर्वक कार्ट में जोड़ी गई',
                'error'                   => 'कुछ गलत हो गया!',
                'order-create-success'    => 'आर्डर सफलतापूर्वक स्थानित किया गया।',
                'payment-create-success'  => 'भुगतान विधि सफलतापूर्वक सहेजी गई',
                'shipping-create-success' => 'शिपिंग विधि सफलतापूर्वक सहेजी गई',
            ],

            'invoices' => [
                'create-success' => 'चालान सफलतापूर्वक जोड़ा गया है।',

                'error' => [
                    'creation-error'    => 'आदेश चालान निर्माण की अनुमति नहीं है।',
                    'invalid-qty-error' => 'हमें मात्रा को चालान आइटम के लिए अमान्य पाया।',
                    'product-error'     => 'उत्पाद के बिना चालान नहीं बनाया जा सकता।',
                ],
            ],

            'shipments' => [
                'create-success' => 'शिपमेंट सफलतापूर्वक जोड़ा गया है।',

                'error' => [
                    'creation-error'    => 'इस आदेश के लिए शिपमेंट नहीं बनाई जा सकती।',
                    'invalid-qty-error' => 'हमें शिपमेंट आइटम के लिए अमान्य मात्रा मिली।',
                ],
            ],

            'refunds' => [
                'create-success' => 'रिफंड सफलतापूर्वक जोड़ा गया है।',

                'error' => [
                    'creation-error'       => 'इस आदेश के लिए रिफंड नहीं बनाया जा सकता।',
                    'invalid-amount-error' => 'रिफंड राशि शून्य होनी चाहिए।',
                    'invalid-qty-error'    => 'हमें रिफंड आइटम के लिए अमान्य मात्रा मिली।',
                    'limit-error'          => 'रिफंड के लिए उपलब्ध सबसे अधिक धन :amount है।',
                ],
            ],

            'transactions' => [
                'already-paid'               => 'इस चालान को पहले ही भुगतान किया गया है।',
                'invoice-missing'            => 'यह चालान आईडी मौजूद नहीं है।',
                'transaction-amount-exceeds' => 'इस लेनदेन की निर्दिष्ट राशि चालान की कुल राशि से अधिक है।',
                'transaction-saved'          => 'लेनदेन को सहेजा गया है।',
            ],
        ],

        'catalog' => [
            'products' => [
                'create-success' => 'उत्पाद सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'उत्पाद सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'उत्पाद सफलतापूर्वक अपडेट किया गया है।',

                'inventories' => [
                    'update-success' => 'इन्वेंटरी सफलतापूर्वक अपडेट की गई।',
                ],

                'mass-operations' => [
                    'delete-success'  => 'चयनित उत्पाद सफलतापूर्वक हटाए गए।',
                    'update-success'  => 'चयनित उत्पाद सफलतापूर्वक अपडेट किए गए।',
                ],

                'error' => [
                    'configurable-error' => 'कृपया कम से कम एक विन्यासनीय गुणधर्म का चयन करें।',
                ],
            ],

            'categories' => [
                'create-success' => 'श्रेणी सफलतापूर्वक जोड़ी गई है।',
                'delete-success' => 'श्रेणी सफलतापूर्वक हटा दी गई है।',
                'update-success' => 'श्रेणी सफलतापूर्वक अपडेट की गई है।',
                'not-exist'      => 'श्रेणी नहीं मिली।',

                'mass-operations' => [
                    'delete-success'  => 'चयनित श्रेणियाँ सफलतापूर्वक हटाई गईं।',
                    'update-success'  => 'चयनित श्रेणियाँ सफलतापूर्वक अपडेट की गईं।',
                ],
            ],

            'attributes' => [
                'create-success' => 'गुणधर्म सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'गुणधर्म सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'गुणधर्म सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'cannot-change-type'       => 'प्रकार फ़ील्ड को बदला नहीं जा सकता',
                    'system-attributes-delete' => 'सिस्टम गुणधर्मों को हटाया नहीं जा सकता।',

                    'mass-operations' => [
                        'resource-not-found' => 'चयनित गुणधर्म नहीं मिले।',
                    ],
                ],
            ],

            'families'   => [
                'create-success' => 'परिवार सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'परिवार सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'परिवार सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'being-used'       => 'इस संसाधन परिवार का उपयोग :source में हो रहा है।',
                    'can-not-updated'  => 'कोड को अपडेट नहीं किया जा सकता',
                    'last-item-delete' => 'कम से कम एक परिवार आवश्यक है।',
                ],
            ],
        ],

        'customers' => [
            'customers' => [
                'create-success' => 'ग्राहक सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'ग्राहक सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'ग्राहक सफलतापूर्वक अपडेट किया गया है।',

                'mass-operations' => [
                    'delete-success' => 'चयनित ग्राहक सफलतापूर्वक हटाए गए हैं।',
                    'update-success' => 'चयनित ग्राहक सफलतापूर्वक अपडेट किए गए हैं।',
                ],

                'error' => [
                    'order-pending-account-delete' => 'क्योंकि कुछ आदेश लंबित हैं या प्रोसेसिंग स्थिति में हैं, इसलिए ग्राहक का खाता हटाया नहीं जा सकता है।',
                ],

                'notes' => [
                    'note-taken' => 'टिप्पणी ली गई।',
                ],
            ],

            'addresses' => [
                'create-success' => 'पता सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'पता सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'पता सफलतापूर्वक अपडेट किया गया है।',

                'mass-operations' => [
                    'delete-success' => 'चयनित पते सफलतापूर्वक हटाए गए हैं।',
                ],
            ],

            'groups' => [
                'create-success' => 'ग्राहक समूह सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'ग्राहक समूह सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'ग्राहक समूह सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'being-used'           => 'इस संसाधन समूह का उपयोग ग्राहकों में हो रहा है।',
                    'default-group-delete' => 'डिफ़ॉल्ट समूह को हटाया नहीं जा सकता।',
                ],
            ],

            'reviews' => [
                'delete-success' => 'समीक्षा सफलतापूर्वक हटा दी गई है।',
                'update-success' => 'समीक्षा सफलतापूर्वक अपडेट की गई है।',

                'mass-operations' => [
                    'delete-success' => 'चयनित समीक्षाएँ सफलतापूर्वक हटाई गईं हैं।',
                    'update-success' => 'चयनित समीक्षाएँ सफलतापूर्वक अपडेट की गईं हैं।',
                ],
            ],

            'news-letter' => [
                'create-success'  => 'आपने सफलतापूर्वक हमारे समाचार पत्र की सदस्यता ले ली है।',
                'warning-message' => 'आप पहले ही हमारे समाचार पत्र की सदस्यता ले चुके हैं।',
            ],
        ],

        'cms' => [
            'create-success' => 'सीएमएस सफलतापूर्वक जोड़ा गया है।',
            'delete-success' => 'सीएमएस सफलतापूर्वक हटा दिया गया है।',
            'update-success' => 'सीएमएस सफलतापूर्वक अपडेट किया गया है।',

            'mass-operations' => [
                'delete-success' => 'चयनित पृष्ठ सफलतापूर्वक हटाए गए हैं।',
            ],

            'error' => [
                'already-taken' => 'पृष्ठों को पहले से ही लिया गया है।',
            ],
        ],

        'marketing' => [
            'communications' => [
                'campaigns' => [
                    'create-success' => 'अभियान सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'अभियान सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'अभियान सफलतापूर्वक अपडेट किया गया है।',
                ],

                'events' => [
                    'create-success' => 'ईवेंट सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'ईवेंट सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'ईवेंट सफलतापूर्वक अपडेट किया गया है।',
                ],

                'templates' => [
                    'create-success' => 'ईमेल टेम्पलेट सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'ईमेल टेम्पलेट सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'ईमेल टेम्पलेट सफलतापूर्वक अपडेट किया गया है।',
                ],

                'subscribers' => [
                    'delete-success' => 'न्यूजलेटर सब्सक्राइब को सफलतापूर्वक हटा दिया गया',
                    'update-failed'  => 'न्यूजलेटर सब्सक्राइब अपडेट विफल रहा',
                    'update-success' => 'न्यूजलेटर सब्सक्राइब को सफलतापूर्वक अपडेट किया गया',
                ],
            ],

            'promotions' => [
                'cart-rules' => [
                    'create-success' => 'कार्ट नियम सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'कार्ट नियम सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'कार्ट नियम सफलतापूर्वक अपडेट किया गया है।',
                ],

                'catalog-rules' => [
                    'create-success' => 'कैटलॉग नियम सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'कैटलॉग नियम सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'कैटलॉग नियम सफलतापूर्वक अपडेट किया गया है।',
                ],

                'cart-rule-coupons' => [
                    'create-success' => 'कार्ट नियम कूपन सफलतापूर्वक जोड़ा गया है।',
                    'delete-success' => 'कार्ट नियम कूपन सफलतापूर्वक हटा दिया गया है।',
                    'update-success' => 'कार्ट नियम कूपन सफलतापूर्वक अपडेट किया गया है।',

                    'mass-operations' => [
                        'delete-success' => 'कार्ट नियम कूपन सफलतापूर्वक हटा दिए गए'
                    ]
                ],
            ],

            'search-seo' => [
                'url-rewrites' => [
                    'create-success'  => 'URL पुनरलेखन को सफलतापूर्वक जोड़ा गया।',
                    'delete-success'  => 'URL पुनरलेखन को सफलतापूर्वक हटा दिया गया।',
                    'update-success'  => 'URL पुनरलेखन को सफलतापूर्वक अपडेट किया गया।',

                    'mass-operations' => [
                        'delete-success' => 'URL पुनरलेखन को सफलतापूर्वक हटा दिया गया।',
                    ],
                ],

                'search-terms' => [
                    'create-success'  => 'खोज शब्दों को सफलतापूर्वक जोड़ा गया।',
                    'delete-success'  => 'खोज शब्दों को सफलतापूर्वक हटा दिया गया।',
                    'update-success'  => 'खोज शब्दों को सफलतापूर्वक अपडेट किया गया।',

                    'mass-operations' => [
                        'delete-success' => 'खोज शब्दों को सफलतापूर्वक हटा दिया गया।',
                    ],
                ],

                'search-synonyms' => [
                    'create-success'  => 'खोज समानार्थकों को सफलतापूर्वक जोड़ा गया।',
                    'delete-success'  => 'खोज समानार्थकों को सफलतापूर्वक हटा दिया गया।',
                    'update-success'  => 'खोज समानार्थकों को सफलतापूर्वक अपडेट किया गया।',

                    'mass-operations' => [
                        'delete-success' => 'खोज समानार्थकों को सफलतापूर्वक हटा दिया गया।',
                    ],
                ],

                'sitemaps' => [
                    'create-success' => 'साइटमैप्स सफलतापूर्वक बनाए गए।',
                    'delete-success' => 'साइटमैप्स सफलतापूर्वक हटाए गए।',
                    'update-success' => 'साइटमैप्स सफलतापूर्वक अपडेट किए गए।',
                ],
            ],
        ],

        'settings' => [
            'locales' => [
                'create-success' => 'लोकेल सफलतापूर्वक जोड़ी गई है।',
                'delete-success' => 'लोकेल सफलतापूर्वक हटाई गई है',
                'update-success' => 'लोकेल सफलतापूर्वक अपडेट की गई है।',

                'error' => [
                    'last-item-delete' => 'कम से कम एक लोकेल की आवश्यकता है।',
                ],
            ],

            'currencies' => [
                'create-success' => 'मुद्रा सफलतापूर्वक जोड़ी गई है।',
                'delete-success' => 'मुद्रा सफलतापूर्वक हटाई गई है',
                'update-success' => 'मुद्रा सफलतापूर्वक अपडेट की गई है।',

                'error' => [
                    'last-item-delete' => 'कम से कम एक मुद्रा की आवश्यकता है।',
                ],
            ],

            'exchange-rates' => [
                'create-success' => 'विनिमय दर सफलतापूर्वक जोड़ी गई है।',
                'delete-success' => 'विनिमय दर सफलतापूर्वक हटाई गई है',
                'update-success' => 'विनिमय दर सफलतापूर्वक अपडेट की गई है।',
            ],

            'inventory-sources' => [
                'create-success'   => 'इन्वेंटरी स्रोत सफलतापूर्वक जोड़ा गया है।',
                'delete-success'   => 'इन्वेंटरी स्रोत सफलतापूर्वक हटा दिया गया है।',
                'update-success'   => 'इन्वेंटरी स्रोत सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'last-item-delete' => 'कम से कम एक इन्वेंटरी स्रोत की आवश्यकता है।',
                ],
            ],

            'taxes' => [
                'tax-rates' => [
                    'create-success' => 'कर दर सफलतापूर्वक जोड़ी गई है।',
                    'delete-success' => 'कर दर सफलतापूर्वक हटाई गई है',
                    'update-success' => 'कर दर सफलतापूर्वक अपडेट की गई है।',
                ],

                'tax-categories' => [
                    'create-success' => 'कर श्रेणी सफलतापूर्वक जोड़ी गई है।',
                    'delete-success' => 'कर श्रेणी सफलतापूर्वक हटाई गई है',
                    'update-success' => 'कर श्रेणी सफलतापूर्वक अपडेट की गई है।',
                ],
            ],

            'channels' => [
                'create-success' => 'चैनल सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'चैनल सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'चैनल सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'last-item-delete' => 'कम से कम एक चैनल की आवश्यकता है।',
                ],
            ],

            'users' => [
                'create-success' => 'उपयोगकर्ता सफलतापूर्वक जोड़ा गया है।',
                'delete-success' => 'उपयोगकर्ता सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'उपयोगकर्ता सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'cannot-change-column' => 'उपयोगकर्ता को बदला नहीं जा सकता।',
                    'last-item-delete'     => 'कम से कम एक उपयोगकर्ता की आवश्यकता है।',
                ],
            ],

            'roles' => [
                'create-success' => 'भूमिका सफलतापूर्वक जोड़ी गई है।',
                'delete-success' => 'भूमिका सफलतापूर्वक हटाई गई है।',
                'update-success' => 'भूमिका सफलतापूर्वक अपडेट की गई है।',

                'error' => [
                    'being-used'       => 'यह संसाधन भूमिकाएँ प्रशासन उपयोगकर्ता में उपयोग हो रही है।',
                    'last-item-delete' => 'कम से कम एक भूमिका की आवश्यकता है।',
                ],
            ],

            'themes' => [
                'create-success' => 'थीम सफलतापूर्वक बनाई गई',
                'delete-success' => 'थीम सफलतापूर्वक हटा दी गई',
                'update-success' => 'थीम सफलतापूर्वक अपडेट की गई',
            ],
        ],

        'configuration' => [
            'create-success' => 'कॉन्फ़िगरेशन सफलतापूर्वक जोड़ा गया है।',
            'delete-success' => 'कॉन्फ़िगरेशन सफलतापूर्वक हटा दिया गया है।',
            'update-success' => 'कॉन्फ़िगरेशन सफलतापूर्वक अपडेट किया गया है।',
        ],

        'account' => [
            'create-success'     => 'खाता सफलतापूर्वक जोड़ा गया है।',
            'delete-success'     => 'खाता सफलतापूर्वक हटा दिया गया है।',
            'logged-in-success'  => 'सफलतापूर्वक लॉगिन किया गया।',
            'logged-out-success' => 'सफलतापूर्वक लॉगआउट किया गया।',
            'update-success'     => 'खाता सफलतापूर्वक अपडेट किया गया है।',

            'error' => [
                'credential-error'  => 'प्रदत्त क्रेडेंशियल गलत हैं।',
                'invalid'           => 'अमान्य ईमेल या पासवर्ड',
                'password-mismatch' => 'वर्तमान पासवर्ड मेल नहीं खाता।',
            ],
        ],

        'errors' => [
            '404' => [
                'message' => 'ओह! वह पृष्ठ जिसे आप खोज रहे हैं अब अवकेश में है। ऐसा लगता है कि हम नहीं मिल सकते वह क्या आप खोज रहे थे।',
                'title'   => '404 पेज नहीं मिला',
            ],

            '401' => [
                'message' => 'ओह! ऐसा लगता है कि आपको इस पेज तक पहुँचने की अनुमति नहीं है। ऐसा लगता है कि आपके पास आवश्यक प्रमाणपत्र गुम हैं।',
                'title'   => '401 अनधिकृत',
            ],

            '403' => [
                'message' => 'ओह! यह पृष्ठ प्रतिबंधित है। ऐसा लगता है कि आपको इस सामग्री को देखने के लिए आवश्यक अनुमति नहीं है।',
                'title'   => '403 प्रतिबंधित',
            ],

            '500' => [
                'message' => 'ओह! कुछ गलत हो गया। ऐसा लगता है कि हमें वह पृष्ठ जो आप देख रहे हैं को लोड करने में कुछ समस्या है।',
                'title'   => '500 आंतरिक सर्वर त्रुटि',
            ],

            '503' => [
                'message' => 'ओह! ऐसा लगता है कि हम अस्थायी रूप से नीचे हैं ताकि बकायदा जांच सकें। कृपया थोड़ी देर में जांचें।',
                'title'   => '503 सेवा अनुपलब्ध है',
            ],
        ],
    ],

    'shop' => [
        'customer' => [
            'addresses' => [
                'create-success' => 'आपका पता सफलतापूर्वक बनाया गया है।',
                'delete-success' => 'आपका पता सफलतापूर्वक हटा दिया गया है।',
                'update-success' => 'आपका पता सफलतापूर्वक अपडेट किया गया है।',
            ],

            'accounts' => [
                'create-success'     => 'आपका खाता सफलतापूर्वक बनाया गया है।',
                'delete-success'     => 'आपका खाता सफलतापूर्वक हटा दिया गया है।',
                'logged-in-success'  => 'सफलतापूर्वक लॉग इन किया गया।',
                'logged-out-success' => 'सफलतापूर्वक लॉग आउट किया गया।',
                'update-success'     => 'आपका खाता सफलतापूर्वक अपडेट किया गया है।',

                'error' => [
                    'credential-error'  => 'प्रदत्त प्रमाणपत्र गलत हैं।',
                    'invalid'           => 'अमान्य ईमेल या पासवर्ड',
                    'password-mismatch' => 'वर्तमान पासवर्ड मेल नहीं खाता।',
                    'update-failed'     => 'आपके खाते को अपडेट करते समय एक त्रुटि हुई है',
                ],
            ],
        ],

        'checkout' => [
            'billing-address-saved'   => 'पता सफलतापूर्वक सहेजा गया।',
            'check-billing-address'   => 'कृपया बिलिंग पता जांचें।',
            'check-shipping-address'  => 'कृपया शिपिंग पता जांचें।',
            'minimum-order-message'   => 'न्यूनतम आदेश राशि :amount है।',
            'order-saved'             => 'आदेश सफलतापूर्वक सहेजा गया।',
            'payment-method-saved'    => 'भुगतान विधि सफलतापूर्वक सहेजी गई।',
            'shipping-method-saved'   => 'शिपिंग विधि सफलतापूर्वक सहेजी गई।',
            'specify-payment-method'  => 'कृपया भुगतान विधि निर्दिष्ट करें।',
            'specify-shipping-method' => 'कृपया शिपिंग विधि निर्दिष्ट करें।',

            'cart' => [
                'item' => [
                    'inactive-add'   => 'निष्क्रिय आइटम को कार्ट में नहीं जोड़ा जा सकता।',
                    'success'        => 'आइटम कार्ट में सफलतापूर्वक जोड़ा गया है।',
                    'success-remove' => 'आइटम कार्ट से सफलतापूर्वक हटा दिया गया है।',
                ],

                'quantity' => [
                    'illegal' => 'मात्रा एक से कम नहीं हो सकती।',
                    'success' => 'कार्ट आइटम (इस) सफलतापूर्वक अपडेट किए गए हैं।',
                ],

                'coupon' => [
                    'apply-issue'    => 'कूपन कोड लागू नहीं किया जा सकता।',
                    'invalid'        => 'कूपन कोड अमान्य है।',
                    'success-remove' => 'कूपन सफलतापूर्वक हटा दिया गया है।',
                    'success'        => 'कूपन कोड सफलतापूर्वक लागू किया गया है।',
                ],

                'move-wishlist' => [
                    'success' => 'आइटम सफलतापूर्वक विशलिस्ट में स्थानांतरित किया गया है।',
                ],
            ],
        ],

        'wishlist' => [
            'moved'          => 'आइटम सफलतापूर्वक कार्ट में स्थानांतरित किया गया।',
            'option-missing' => 'उत्पाद विकल्प अनुपस्थित हैं, इसलिए आइटम को विशलिस्ट में स्थानांतरित नहीं किया जा सकता है।',
            'removed'        => 'आइटम सफलतापूर्वक विशलिस्ट से हटा दिया गया।',
            'success'        => 'आइटम सफलतापूर्वक विशलिस्ट में जोड़ा गया।',

            'error' => [
                'security-warning' => 'संदिग्ध गतिविधि पाई गई है!',

                'mass-operations' => [
                    'resource-not-found' => 'चयनित विशलिस्ट उत्पाद नहीं मिला।',
                ],
            ],
        ],

        'sales' => [
            'orders' => [
                'cancel' => 'आदेश सफलतापूर्वक रद्द किया गया।',

                'error' => [
                    'cancel-error' => 'आदेश को रद्द नहीं किया जा सकता है।',
                ],
            ],
        ],

        'catalog' => [
            'products' => [
                'configurable-error' => 'कृपया कम से कम एक कन्फ़िगरेबल गुणधर्म का चयन करें।',

                'reviews' => [
                    'create-success' => 'आपकी समीक्षा सफलतापूर्वक प्रस्तुत की गई है।',
                ],
            ],
        ],

        'errors' => [
            '404' => [
                'message' => 'ओह! वह पृष्ठ जिसे आप खोज रहे हैं अब अवकेश में है। ऐसा लगता है कि हम नहीं मिल सकते वह क्या आप खोज रहे थे।',
                'title'   => '404 पेज नहीं मिला',
            ],

            '401' => [
                'message' => 'ओह! ऐसा लगता है कि आपको इस पेज तक पहुँचने की अनुमति नहीं है। ऐसा लगता है कि आपके पास आवश्यक प्रमाणपत्र गुम हैं।',
                'title'   => '401 अनधिकृत',
            ],

            '403' => [
                'message' => 'ओह! यह पृष्ठ प्रतिबंधित है। ऐसा लगता है कि आपको इस सामग्री को देखने के लिए आवश्यक अनुमति नहीं है।',
                'title'   => '403 प्रतिबंधित',
            ],

            '500' => [
                'message' => 'ओह! कुछ गलत हो गया। ऐसा लगता है कि हमें वह पृष्ठ जो आप देख रहे हैं को लोड करने में कुछ समस्या है।',
                'title'   => '500 आंतरिक सर्वर त्रुटि',
            ],

            '503' => [
                'message' => 'ओह! ऐसा लगता है कि हम अस्थायी रूप से नीचे हैं ताकि बकायदा जांच सकें। कृपया थोड़ी देर में जांचें।',
                'title'   => '503 सेवा अनुपलब्ध है',
            ],
        ],
    ],
];
