# Día 1 — Clase vs objeto, propiedades, métodos y `$this`
 
## Enunciado
 
Crear una clase `Producto` con:
 
1. Propiedades **privadas** `sku`, `nombre`, `precio` y `existencia`.
2. Una forma de asignar las cuatro propiedades usando `$this` (método `configurar()` o constructor).
3. Getters para las cuatro propiedades.
4. `hayExistencia(int $cantidad): bool`, que devuelva `true` si alcanza la existencia.
5. `descontarExistencia(int $cantidad): void`, que solo descuente si hay suficiente y, si no, imprima un aviso.
En `index.php`:
 
- Crear **dos** productos distintos.
- Descontar existencia solo a uno e imprimir la existencia de ambos para comprobar que cada objeto tiene su propio estado.
- Intentar hacer `$producto->precio = 10;` desde fuera y anotar el error.
**Pregunta:** ¿qué diferencia hay entre la clase `Producto` y la variable `$producto1`?