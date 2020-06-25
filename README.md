# ejercicio-valles
Gary es un ávido excursionista. Hace un seguimiento meticuloso de sus caminatas, prestando especial atención a pequeños detalles como la topografía. Durante su última caminata, dio exactamente los pasos. Por cada paso que daba, observaba si era un paso cuesta arriba, U, o cuesta abajo, D. Las caminatas de Gary comienzan y terminan al nivel del mar y cada paso hacia arriba o hacia abajo representa una (1) unidad de cambio en altitud. Definimos los siguientes términos:

- Una montaña es una secuencia de pasos consecutivos sobre el nivel del mar, comenzando con un paso desde el nivel del mar y terminando con un paso hacia el nivel del mar.
- Un valle es una secuencia de pasos consecutivos debajo del nivel del mar, comenzando con un paso hacia abajo desde el nivel del mar y terminando con un paso hacia el nivel del mar.

Dada la secuencia de Gary de subir y bajar escalones durante su última caminata, encuentre e imprima la cantidad de valles por los que caminó. Por ejemplo, si el camino de Gary es s=[DDUUUUDD], primero entra en un valle de 2 unidades de profundidad. Luego sube a una montaña de 2 unidades altas. Finalmente, regresa al nivel del mar y termina su caminata.

Función descriptiva
Debe devolver un número entero que denote la cantidad de valles que atravesó Gary.

Formato de entrada
La primera línea contiene un número entero, el número de pasos en la caminata de Gary.
La segunda línea contiene una sola cadena s, de n caracteres que describen su camino.

Restricciones
2<=n<=10^6
s[i] pertenece {UD}

Formato de salida
Imprima un número entero que denote la cantidad de valles que Gary atravesó durante su caminata.

Explicación
Si representamos _ como el nivel del mar, un paso hacia arriba como / y un paso hacia abajo como \, la caminata de Gary se puede dibujar como:
_/\      _
   \    /
    \/\/