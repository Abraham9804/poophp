<?php 

class Producto {
    private string $sku;
    private string $nombre;
    private float $precio;
    private int $existencia;

    public function __construct( string $sku, string $nombre, float $precio, int $existencia )
    {
        $this->sku = $sku;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->existencia = $existencia;
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
}