<?php

function exercise1(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];

    return 0;
}

function exercise2(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return [];
}

function exercise3(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];

    return [];
}

function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}
/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.
Masyvą gausite iškvietę funkciją 'getNumbers'
12. Raskite ir grąžinkite visų masyvo narių sumą
13. Raskite ir grąžinkite lyginių masyvo narių sumą
14. Raskite ir grąžinkite teigiamų masyvo narių sumą
15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
16. Į masyvą pridėkite naujų narių - skaičius nuo 255 iki 299 - ir išspausdinkite masyvą pasinaudodami funkcija 'printr'
*/

function exercise4(int $id)
{
    $prefix = 'product_';

    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    /*
    Sunaikinkitę visas $products masyve esančias reikšmes, kurių raktai yra prefikso ir ID junginys t.y. ($prefix . $id)
    Grąžinkite pamodifikuotą masyvą.
    Jeigu tokio rakto ($id) nėra, gražinkite null.
    Funkcijai pridėkite trūkstamą return tipą.
    Funkcijos kvietimas: exercise2(1)
    */

    return [];
}

function exercise5(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
    ];

    /*
    Sunaikinkite visus elementus, kurių 'status' reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $transactions masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */

    return [];
}

function exercise6(string $key)
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];
    /*
    Funkcija turi grąžinti reikšmę pagal paduotą raktą.
    Jeigu paduotas raktas neegzistuoja $products masyve, grąžinkite null.
    Pridėkite teisingą return tipą.
    Funkcijos kvietimas: exercise4('product_2')
    */
}
