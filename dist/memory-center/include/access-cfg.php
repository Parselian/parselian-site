<?

/////////////////////////////////////////////////////////////////////////////////////////
/* СПИСОК СТРАНИЦ

– – СВД                                 http://center-apple.ru/svd/
– – Отчеты СИ                           http://center-apple.ru/otcheti/
– – Запросы на изменение отчетов СИ     http://center-apple.ru/zaprosi_na_izmenenie_otchetov/
– – Откат заказа                        http://center-apple.ru/otkat_zakaza/
– – Создание продолжения                http://center-apple.ru/novoe_prodolzhenie/
– – Нет заказа в маршрутке              http://center-apple.ru/net_zakaza_v_marshrutke/
– – Проверка отчета                     http://center-apple.ru/kurator/ // у нас нет лога проверок?


– Админ, Куратор
– – Рассчетная касса                    http://center-apple.ru/kassa_raschetnaya/
                                        http://center-apple.ru/prinyatie_dengi_za_7_dnei/
                                        http://center-apple.ru/ot_za_7_dnei/
                                        http://center-apple.ru/rashodi_za_7_dnei/




ТЕКУЩЕЕ МЕНЮ

Учет отчетов СИ             /svd/
                            /otcheti/
                            /zaprosi_na_izmenenie_otchetov/
                            /zaprosi_na_udalenie_otcheta/
                            /istoriya_izmenenii_otchetov/

Сервис-инженеры             /limiti_zakazov_si/
                                /dobavlenie_novogo_si/                          - нет шапки
                                /spisok_si/                                     - нет развернутого меню
                            /urovni_injenerov/
                            /new_statistika_30/                                 - + много страниц без шапки и тд
                            /si-info/

Отдел кадров и обучения     /soiskateli/
                            /sobesedovaniya/
                            /obuchenie/

Инструменты куратора        /kurator/ – проверка отчетов
                            /vidannie_zakazi/
                                /zakazi_bez_deneg/
                                /aktualnie_sdelki/ (без отчета)
                            /otpravka_otchetov_za_si_aktualnie_zakazi/          - старая шапка
                                /otpravka_otcheta_za_si/                        - старая шапка
                                /otpravka_otcheta_za_si_vruchnuu/               - старая шапка

ОКК                         /okk/
                            /okk_view/
                            /okk_edit/

Инструменты логиста         /map.php
                            /net_zakaza_v_marshrutke/                           - старая шапка
                            /otkat_zakaza/                                      - старая шапка
                            /novoe_prodolzhenie/

Отдел гарантий              /garantii/

Сверка кассы                /sverka_kassi/
                            /otchet_kassira/
                            /dannie_kassi_za_nedelu/
                            /zaprosi_na_izmenenie_dannih_kassi/
                            /zaprosi_na_udalenie_dannih_kassi/
                            /istoriya_izmenenii_dannih_kassi/
                            /dannie_kassi/ (за все время)

Прием денег от СИ           /cashier/
                            /prinyatie_dengi_ot_si_za_nedelu/
                            /zaprosi_na_izmenenie_prinyatih_ot_si_deneg/
                            /zaprosi_na_udalenie_prinyatih_ot_si_deneg/
                            /istoriya_izmenenii_prinyatih_ot_si_deneg/
                            /prinyatie_dengi_ot_si/ (за все время)

Баланс оперативных трат     /balans_operativnih_trat/
                            /operativnie_trati_za_nedelu/
                            /forma_ucheta_operativnih_trat/
                            /zaprosi_na_izmenenie_operativnih_trat/
                            /zaprosi_na_udalenie_operativnih_trat/
                            /istoriya_izmenenii_operativnih_trat/
                            /operativnie_trati/ (за все время)

Расходы                     /rashodi_za_nedelu/
                            /forma_ucheta_rashodov/
                            /zaprosi_na_izmenenie_rashodov/
                            /zaprosi_na_udalenie_rashodov/
                            /istoriya_izmenenii_rashodov/
                            /rashodi/ (за все время)

Касса рассчетная            /kassa_raschetnaya/
                            /prinyatie_dengi_za_7_dnei/
                            /ot_za_7_dnei/
                            /rashodi_za_7_dnei/

*/
/////////////////////////////////////////////////////////////////////////////////////////

$authPositionAccessCfg = [
    'Админ' => [                            // АДМИН
        // Учет отчетов СИ
        '/svd/' => true,
        '/otcheti/' => true,
        '/zaprosi_na_izmenenie_otchetov/' => true,
        '/zaprosi_na_udalenie_otcheta/' => true,
        '/istoriya_izmenenii_otchetov/' => true,

        // Сервис-инженеры
        '/limiti_zakazov_si/' => true,
        '/dobavlenie_novogo_si/' => true,
        '/spisok_si/' => true,
        '/urovni_injenerov/' => true,
        '/new_statistika_30/' => true,
        '/si-info/' => true,

        // Отдел кадров и обучения
        '/soiskateli/' => true,
        '/sobesedovaniya/' => true,
        '/obuchenie/' => true,

        // Инструменты куратора
        '/kurator/' => true,                                 
        '/vidannie_zakazi/' => true,
        '/zakazi_bez_deneg/' => true,
        '/aktualnie_sdelki/' => true,
        '/otpravka_otchetov_za_si_aktualnie_zakazi/' => true,
        '/otpravka_otcheta_za_si/' => true,
        '/otpravka_otcheta_za_si_vruchnuu/' => true,

        // ОКК
        '/okk/' => true,
        '/okk_view/' => true,
        '/okk_edit/' => true,

        // Инструменты логиста
        '/map.php' => true,
        '/net_zakaza_v_marshrutke/' => true,
        '/otkat_zakaza/' => true,
        '/novoe_prodolzhenie/' => true,

        // Отдел гарантий
        '/garantii/' => true,

        // Сверка кассы
        '/sverka_kassi/' => true,
        '/otchet_kassira/' => true,
        '/dannie_kassi_za_nedelu/' => true,
        '/zaprosi_na_izmenenie_dannih_kassi/' => true,
        '/zaprosi_na_udalenie_dannih_kassi/' => true,
        '/istoriya_izmenenii_dannih_kassi/' => true,
        '/dannie_kassi/' => true,

        // Прием денег от СИ
        '/cashier/' => true,
        '/prinyatie_dengi_ot_si_za_nedelu/' => true,
        '/zaprosi_na_izmenenie_prinyatih_ot_si_deneg/' => true,
        '/zaprosi_na_udalenie_prinyatih_ot_si_deneg/' => true,
        '/istoriya_izmenenii_prinyatih_ot_si_deneg/' => true,
        '/prinyatie_dengi_ot_si/' => true,

        // Баланс оперативных трат
        '/balans_operativnih_trat/' => true,
        '/operativnie_trati_za_nedelu/' => true,
        '/forma_ucheta_operativnih_trat/' => true,
        '/zaprosi_na_izmenenie_operativnih_trat/' => true,
        '/zaprosi_na_udalenie_operativnih_trat/' => true,
        '/istoriya_izmenenii_operativnih_trat/' => true,
        '/operativnie_trati/' => true,

        // Расходы
        '/rashodi_za_nedelu/' => true,
        '/forma_ucheta_rashodov/' => true,
        '/zaprosi_na_izmenenie_rashodov/' => true,
        '/zaprosi_na_udalenie_rashodov/' => true,
        '/istoriya_izmenenii_rashodov/' => true,
        '/rashodi/' => true,

        // Касса рассчетная            
        '/kassa_raschetnaya/' => true,
        '/prinyatie_dengi_za_7_dnei/' => true,
        '/ot_za_7_dnei/' => true,
        '/rashodi_za_7_dnei/' => true
    ],
    'Куратор' => [                          // КУРАТОР
        // Учет отчетов СИ
        '/svd/' => true,
        '/otcheti/' => true,
        '/zaprosi_na_izmenenie_otchetov/' => true,
        '/zaprosi_na_udalenie_otcheta/' => true,
        '/istoriya_izmenenii_otchetov/' => true,

        // Сервис-инженеры
        '/limiti_zakazov_si/' => true,
        '/dobavlenie_novogo_si/' => true,
        '/spisok_si/' => true,
        '/urovni_injenerov/' => true,
        '/new_statistika_30/' => true,
        '/si-info/' => true,

        // Отдел кадров и обучения
        '/soiskateli/' => true,
        '/sobesedovaniya/' => true,
        '/obuchenie/' => true,

        // Инструменты куратора
        '/kurator/' => true,                                 
        '/vidannie_zakazi/' => true,
        '/zakazi_bez_deneg/' => true,
        '/aktualnie_sdelki/' => true,
        '/otpravka_otchetov_za_si_aktualnie_zakazi/' => true,
        '/otpravka_otcheta_za_si/' => true,
        '/otpravka_otcheta_za_si_vruchnuu/' => true,

        // ОКК
        '/okk/' => true,
        '/okk_view/' => true,
        '/okk_edit/' => true,

        // Инструменты логиста
        '/map.php' => true,
        '/net_zakaza_v_marshrutke/' => true,
        '/otkat_zakaza/' => true,
        '/novoe_prodolzhenie/' => true,

        // Отдел гарантий
        '/garantii/' => true,

        // Сверка кассы
        '/sverka_kassi/' => true,
        '/otchet_kassira/' => true,
        '/dannie_kassi_za_nedelu/' => true,
        '/zaprosi_na_izmenenie_dannih_kassi/' => true,
        '/zaprosi_na_udalenie_dannih_kassi/' => true,
        '/istoriya_izmenenii_dannih_kassi/' => true,
        '/dannie_kassi/' => true,

        // Прием денег от СИ
        '/cashier/' => true,
        '/prinyatie_dengi_ot_si_za_nedelu/' => true,
        '/zaprosi_na_izmenenie_prinyatih_ot_si_deneg/' => true,
        '/zaprosi_na_udalenie_prinyatih_ot_si_deneg/' => true,
        '/istoriya_izmenenii_prinyatih_ot_si_deneg/' => true,
        '/prinyatie_dengi_ot_si/' => true,

        // Баланс оперативных трат
        '/balans_operativnih_trat/' => true,
        '/operativnie_trati_za_nedelu/' => true,
        '/forma_ucheta_operativnih_trat/' => true,
        '/zaprosi_na_izmenenie_operativnih_trat/' => true,
        '/zaprosi_na_udalenie_operativnih_trat/' => true,
        '/istoriya_izmenenii_operativnih_trat/' => true,
        '/operativnie_trati/' => true,

        // Расходы
        '/rashodi_za_nedelu/' => true,
        '/forma_ucheta_rashodov/' => true,
        '/zaprosi_na_izmenenie_rashodov/' => true,
        '/zaprosi_na_udalenie_rashodov/' => true,
        '/istoriya_izmenenii_rashodov/' => true,
        '/rashodi/' => true,

        // Касса рассчетная            
        '/kassa_raschetnaya/' => true,
        '/prinyatie_dengi_za_7_dnei/' => true,
        '/ot_za_7_dnei/' => true,
        '/rashodi_za_7_dnei/' => true
    ],
    'Отдел гарантий' => [
        // Учет отчетов СИ
        '/svd/' => true,
        '/otcheti/' => true,
        '/zaprosi_na_izmenenie_otchetov/' => false,
        '/zaprosi_na_udalenie_otcheta/' => false,
        '/istoriya_izmenenii_otchetov/' => false,

        // Сервис-инженеры
        '/limiti_zakazov_si/' => false,
        '/dobavlenie_novogo_si/' => false,
        '/spisok_si/' => false,
        '/urovni_injenerov/' => false,
        '/new_statistika_30/' => false,
        '/si-info/' => true,

        // Отдел кадров и обучения
        '/soiskateli/' => false,
        '/sobesedovaniya/' => false,
        '/obuchenie/' => false,

        // Инструменты куратора
        '/kurator/' => false,                                 
        '/vidannie_zakazi/' => false,
        '/zakazi_bez_deneg/' => false,
        '/aktualnie_sdelki/' => false,
        '/otpravka_otchetov_za_si_aktualnie_zakazi/' => false,
        '/otpravka_otcheta_za_si/' => false,
        '/otpravka_otcheta_za_si_vruchnuu/' => false,

        // ОКК
        '/okk/' => false,
        '/okk_view/' => false,
        '/okk_edit/' => false,

        // Инструменты логиста
        '/map.php' => true,
        '/net_zakaza_v_marshrutke/' => false,
        '/otkat_zakaza/' => false,
        '/novoe_prodolzhenie/' => true,

        // Отдел гарантий
        '/garantii/' => true,

        // Сверка кассы
        '/sverka_kassi/' => false,
        '/otchet_kassira/' => false,
        '/dannie_kassi_za_nedelu/' => false,
        '/zaprosi_na_izmenenie_dannih_kassi/' => false,
        '/zaprosi_na_udalenie_dannih_kassi/' => false,
        '/istoriya_izmenenii_dannih_kassi/' => false,
        '/dannie_kassi/' => false,

        // Прием денег от СИ
        '/cashier/' => false,
        '/prinyatie_dengi_ot_si_za_nedelu/' => false,
        '/zaprosi_na_izmenenie_prinyatih_ot_si_deneg/' => false,
        '/zaprosi_na_udalenie_prinyatih_ot_si_deneg/' => false,
        '/istoriya_izmenenii_prinyatih_ot_si_deneg/' => false,
        '/prinyatie_dengi_ot_si/' => false,

        // Баланс оперативных трат
        '/balans_operativnih_trat/' => false,
        '/operativnie_trati_za_nedelu/' => false,
        '/forma_ucheta_operativnih_trat/' => false,
        '/zaprosi_na_izmenenie_operativnih_trat/' => false,
        '/zaprosi_na_udalenie_operativnih_trat/' => false,
        '/istoriya_izmenenii_operativnih_trat/' => false,
        '/operativnie_trati/' => false,

        // Расходы
        '/rashodi_za_nedelu/' => false,
        '/forma_ucheta_rashodov/' => false,
        '/zaprosi_na_izmenenie_rashodov/' => false,
        '/zaprosi_na_udalenie_rashodov/' => false,
        '/istoriya_izmenenii_rashodov/' => false,
        '/rashodi/' => false,

        // Касса рассчетная            
        '/kassa_raschetnaya/' => false,
        '/prinyatie_dengi_za_7_dnei/' => false,
        '/ot_za_7_dnei/' => false,
        '/rashodi_za_7_dnei/' => false
    ]
];


/*
        // Учет отчетов СИ
        '/svd/' => false,
        '/otcheti/' => false,
        '/zaprosi_na_izmenenie_otchetov/' => false,
        '/zaprosi_na_udalenie_otcheta/' => false,
        '/istoriya_izmenenii_otchetov/' => false,

        // Сервис-инженеры
        '/limiti_zakazov_si/' => false,
        '/dobavlenie_novogo_si/' => false,
        '/spisok_si/' => false,
        '/urovni_injenerov/' => false,
        '/new_statistika_30/' => false,
        '/si-info/' => true,

        // Отдел кадров и обучения
        '/soiskateli/' => false,
        '/sobesedovaniya/' => false,
        '/obuchenie/' => false,

        // Инструменты куратора
        '/kurator/' => false,                                 
        '/vidannie_zakazi/' => false,
        '/zakazi_bez_deneg/' => false,
        '/aktualnie_sdelki/' => false,
        '/otpravka_otchetov_za_si_aktualnie_zakazi/' => false,
        '/otpravka_otcheta_za_si/' => false,
        '/otpravka_otcheta_za_si_vruchnuu/' => false,

        // ОКК
        '/okk/' => false,
        '/okk_view/' => false,
        '/okk_edit/' => false,

        // Инструменты логиста
        '/map.php' => false,
        '/net_zakaza_v_marshrutke/' => false,
        '/otkat_zakaza/' => false,
        '/novoe_prodolzhenie/' => false,

        // Отдел гарантий
        '/garantii/' => false,

        // Сверка кассы
        '/sverka_kassi/' => false,
        '/otchet_kassira/' => false,
        '/dannie_kassi_za_nedelu/' => false,
        '/zaprosi_na_izmenenie_dannih_kassi/' => false,
        '/zaprosi_na_udalenie_dannih_kassi/' => false,
        '/istoriya_izmenenii_dannih_kassi/' => false,
        '/dannie_kassi/' => false,

        // Прием денег от СИ
        '/cashier/' => false,
        '/prinyatie_dengi_ot_si_za_nedelu/' => false,
        '/zaprosi_na_izmenenie_prinyatih_ot_si_deneg/' => false,
        '/zaprosi_na_udalenie_prinyatih_ot_si_deneg/' => false,
        '/istoriya_izmenenii_prinyatih_ot_si_deneg/' => false,
        '/prinyatie_dengi_ot_si/' => false,

        // Баланс оперативных трат
        '/balans_operativnih_trat/' => false,
        '/operativnie_trati_za_nedelu/' => false,
        '/forma_ucheta_operativnih_trat/' => false,
        '/zaprosi_na_izmenenie_operativnih_trat/' => false,
        '/zaprosi_na_udalenie_operativnih_trat/' => false,
        '/istoriya_izmenenii_operativnih_trat/' => false,
        '/operativnie_trati/' => false,

        // Расходы
        '/rashodi_za_nedelu/' => false,
        '/forma_ucheta_rashodov/' => false,
        '/zaprosi_na_izmenenie_rashodov/' => false,
        '/zaprosi_na_udalenie_rashodov/' => false,
        '/istoriya_izmenenii_rashodov/' => false,
        '/rashodi/' => false,

        // Касса рассчетная            
        '/kassa_raschetnaya/' => false,
        '/prinyatie_dengi_za_7_dnei/' => false,
        '/ot_za_7_dnei/' => false,
        '/rashodi_za_7_dnei/' => false
                        
*/


//    if ($authUsers['dimaneva']['username'] == 'dimaneva') {
//        echo 'ok';
//    }

//    foreach ($authUsers as $user) {
//        echo $user['username'] . ' ' . $user['password'] . '<br>';
//    }

?>