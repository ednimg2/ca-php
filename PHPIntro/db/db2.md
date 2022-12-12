### DB

1. Panaudojant ANY arba ALL operatoriu sujungti `order_products` ir `products` lentas pagal `product_id`

2. Prie products lentos prideti papildoma colums'a quantity, uzpildyti atsitiktiniais skaiciais nuo 0 iki 20

3. Panaudojant CASE salyga isvesti is products lentos rezultatus.
    - name
    - price
    - jei quantity maziau nei 5 tekstas: paskutines prekes
    - jei quantity nuo 5 iki 10 tekstas: pakankamas prekiu kiekis
    - jei quantity daugiau nei 10 tekstas: daugiau nei 10
   
4. Isveskite tik tais tuos orderius, kuriu prekiu quantity daugiau nei 5, panaudokite sub-query (sub-select'a)
