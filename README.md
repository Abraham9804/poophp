# POO en PHP

Repositorio de práctica para practicar Programación Orientada a Objetos en PHP moderno (PHP 8), con la mira puesta en entender mejor cómo funciona Laravel por dentro.

Cada semana cubre un bloque de conceptos y se divide en días. Cada día tiene su propio ejercicio, su código y un README con el enunciado, mis notas y los errores que encontré en el camino.

## Requisitos

- PHP **8.1 o superior** (algunos ejercicios usan `readonly`, que no existe en PHP 8.0)
- Para verificar la versión: `php -v` o `echo PHP_VERSION;`

## Cómo ejecutar los ejercicios

Desde la terminal, dentro de la carpeta del día:

```bash
php index.php
```

O con el servidor embebido de PHP:

```bash
php -S localhost:8000
```

y abrir `http://localhost:8000` en el navegador. También funciona desde `htdocs` en XAMPP.

## Estructura

```
poo-php/
├── README.md
└── semana1/
    ├── README.md        ← temario de la semana
    ├── dia1/
    │   ├── README.md    ← enunciado + notas del día
    │   ├── Producto.php
    │   └── index.php
    └── dia2/
        └── ...
```

## Avance

| Semana | Tema | Estado |
|---|---|---|
| [Semana 1](semana1/) | Clases, objetos y tipos | 🟡 En curso |

Las siguientes semanas se agregan conforme avanzo.
