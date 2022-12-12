### DB

1. Panaudojant ANY arba ALL surasti lentoje number1 ir number2
   - skaicius is number1 lentos kurie yra lygus number2 lentoje esantiems skaiciams
   - skaicius is number1 lentos kurie yra didesni uz number2 lentoje esancius skaicius
   - skaicius is number1 lentos kurie yra nelygus number2 lentoje esantiems skaiciams

2. Prie products lentos prideti papildoma colums'a quantity, uzpildyti atsitiktiniais skaiciais nuo 0 iki 20

3. Panaudojant CASE salyga isvesti is products lentos rezultatus.
    - name
    - price
    - jei quantity maziau nei 5 tekstas: paskutines prekes
    - jei quantity nuo 5 iki 10 tekstas: pakankamas prekiu kiekis
    - jei quantity daugiau nei 10 tekstas: daugiau nei 10
   
4. Isveskite tik tuos product'us, kuriu product kaina didesne nei bendras vidurkis, panaudokite sub-query (sub-select'a)
5. Isveskite tik tuos product'us, kuriu product kaina lygi max product'o kainai , panaudokite sub-query (sub-select'a)

6. Panaudojant lentas number1 ir number2 sujunkite su union ir:
   - isveskite visus irasus is abieju lentu
   - isveskite unikalius (distinct) irasus is abieju lentu


