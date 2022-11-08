<?php

function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
}
// Visose užduotyse stenkitės naudoti array funkcijas

function exercise1(): void
{

    /*
    Išspausdinti visų krepšelio produktų pavadinimus vienoje eilutėje.
    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
    */
}

function exercise2(): float
{
    /*
    Suskaičiuokite pirkimų krepšelio bendrą sumą (price * quantity)
    Kaip matote, krepšelio duomenys, kuriuos gavome iš svetimos sistemos, yra netvarkingi.
    - Skaičiuojant reikėtų atsižvelgti tik į produktus, kurie turi laukus 'price' ir 'quantity'.
    Jeigu produkto laukai užvadinti kitais pavadinimais arba iš viso jų neturi, tą produktą reikia ignoruoti.

    */

    return 0;
}

function exercise3(): float
{

    /*
    Suskaičiuokite pirkinių krepšelio bendrą sumą.
    Galioja tos pačios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
    - Skaičiuojant bendrą sumą pritaikyti nuolaidas.
    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali būti ir prie produkto - 'discount'.
    Abi reikšmės yra išreikštos procentais.
    Nuolaidos sumuojasi.
    Krepšelio nuolaida taikoma bendrai krepšelio sumai.
    Naudojama tik viena, didžiausia su krepšeliu susieta nuolaida ('cartDiscounts').
    */

    return 0;
}

function exercise4(array $newIpList): array
{
    $existingIpList = [
        '1.17.2.1',
        '15.1.2.1',
        '1.9.2.1',
        '1.1.98.1',
        '1.1.2.12',
        '1.11.2.1',
        '122.1.2.1',
        '1.31.2.1',
        '33.12.2.1',
    ];

    /*
    Sukategorizuokite ip adresų sąrašą.
    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
    funkcija butu kviečiam taip:
    exercise4(
        ['15.1.2.1', '16.1.8.1', '15.1.8.1']
    );
    */
    $result = [
        'ipsNew' => [],
        'ipsOld' => [],
        'ipsRemaining' => [],
    ];

    return $result;
}

/*
    exercise 5
    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
*/
function array_map_custom(callable $callback, array $array): array
{
    return [];
}

/*
    exercise 6
    Parašykite savo array_filter funkcijos versiją nesinaudodami pačia array_filter funkcija
*/
function array_filter_custom(array $array, ?callable $callback): array
{
    return [];
}

/*
    exercise 7
    Parašykite funkciją, kuri apskaičiuotu, paduoto sveiko skaičiaus faktorialą.
    Pridėkite teisingą return tipą.

    Kaip apskaičiuojamas faktorialas:
    n! = n * (n-1) * (n-2) * ... * 3 * 2 * 1
    arba
    n! = 1 * 2 * 3 * ... * n

    2! = 1 * 2 = 2
    3! = 1 * 2 * 3 = 6
 */

function factorial()
{
    return 0;
}