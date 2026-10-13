# Día 2 — Constructor y promoción de propiedades
 
## Enunciado
 
**Parte 1: refactorizar `Producto`**
 
1. Cambiar el constructor a promoción de propiedades y borrar las declaraciones de arriba.
2. Hacer que `sku` sea `readonly`.
3. Hacer que `existencia` sea opcional, con 0 por defecto.
4. En el constructor, lanzar `InvalidArgumentException` si:
   - el `sku` o el `nombre` vienen vacíos (usando `trim()`),
   - el precio es negativo,
   - la existencia es negativa.
5. Agregar `precioConIva(float $tasa): float`, que devuelva el precio más IVA. Por ejemplo, `precioConIva(0.08)` con precio 100 devuelve 108.
**Parte 2: probar en `index.php`**
 
- Crear un producto válido sin pasar existencia y verificar que quedó en 0.
- Crear uno con precio negativo y otro con existencia negativa, y anotar qué pasa.
- Agregar temporalmente un método `cambiarSku(string $nuevo): void`, llamarlo, anotar el error y después borrarlo.
- Imprimir `precioConIva(0.08)` y `precioConIva(0.16)` de un producto.
**Pregunta:** ¿por qué en el constructor usamos `throw` y no `echo` como en `descontarExistencia`?