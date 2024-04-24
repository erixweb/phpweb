# Functions

## Ejemplos básico

Este ejemplo hace un echo de **Hola**

```php
function diHola () {
    echo "Hola";
}

diHola();
```

Si queremos por ejemplo, almazenar el valor de la función en una variable usamos `return`

```php
function devuelveHola () {
    return "Hola";
}

$mensaje = devuelveHola();

if ($mensaje === "Hola") {
    echo "El mensaje es Hola";
}
```

También podemos devolver operaciones

```php
function multiplicar () {
    return 4 * 4;
}
function dividir () {
    return 4 / 4;
}
function sumar () {
    return 4 + 4;
}
function restar () {
    return 4 - 4;
}
function combinacion () {
    return 4 * 4 / 4 + 4 - 4 + (2 + 1);
}
```

Otra opción es usar la función de php `rand()` para generar números aleatorios.

```php
function numRandom () {
    return rand();
}
```

## Pasar argumentos a las funciones

Ejemplo básico de sumar dos números

```php
function sumar($a, $b) {
    return $a + $b;
}
$suma = sumar(992, 100); // 1092
```

Generar números aleatorios con un rango, por ejemplo del 1 al 15.

```php
function random_range($a, $b) {
    return rand($a, $b);
}
$suma = sumar(1, 15); // Genera número aleatorio del 1 al 15
```

## Pasar arrays

Este ejemplo devuelve el primer elemento del array sumándole +5.

```php
function sumArray ($amount, $numbersList) {
    return $numbersList[0] + 1
}

$listaDeNumeros = [0, 1, 2, 3];

$sumarAlPrimerElemento = sumArray(5, $numbersList); 
```

## Mutar un valor

```php
function sumar($cantidad, $variable) {
    return $variable + $cantidad;
}
$numero = 10;
$sumado = sumar(45, $numero); 

echo $sumado; // 55 (10 + 45)
echo $numero; // 10
```

En este ejemplo, la variable `$numero` no ha cambiado, solo se ha creado otra variable en base al valor de la variable. Si quieres cambiar el valor de `$número`:

```php
function sumar($cantidad, &$variable) {
    $variable = $variable + $cantidad;
}
$numero = 10;
sumar(45, $numero); 

echo $numero; // 55
```

## Tipos opcionales

- string: cadenas de texto
- float: números decimales (2.42, 1.640)
- int: números enteros (1, 1714)
- bool: verdadero o falso (true | false)
- array: listas de elementos (`[0, 2, 4]`, `["Erik", "Alex"]`)

```php
function sumar(int $a, float $b) {
    return $a + $b
}
echo sumar(1, 2.5); // 3.5
```