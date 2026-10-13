<?php 

class Producto {
    private readonly string $sku;

    public function __construct( 
        string $sku, 
        private string $nombre, 
        private float $precio, 
        private int $existencia = 0)
    {
        $this->sku = trim($sku);

        if($sku === '' || trim($nombre) === ''){
            throw new InvalidArgumentException('No puede haber campos vacios');
        }

        if($precio < 0){
            throw new InvalidArgumentException('El precio no puede ser menor a 0');
        }

        if($existencia < 0){
            throw new InvalidArgumentException('La existencia no puede ser negativa');
        }
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getExistencia(): int
    {
        return $this->existencia;
    }

    public function hayExistencia(int $cantidad): bool
    {
        return $cantidad > 0 && $this->existencia >= $cantidad;
    }

    public function descontarExistencia(int $cantidad): void 
    {
        if(!$this->hayExistencia($cantidad)){
            echo 'No hay existencia suficiente o la cantidad es inválida';
            return;
        }
        
        $this->existencia -= $cantidad;
    }

    public function precioConIva(float $tasa): float
    {
        $precioConIva = $this->precio * (1 + $tasa);

        return $precioConIva;
    }

}