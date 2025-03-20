<?php
namespace App\Model;

/** 
 * Réprésentation de la table Car en objet PHP 
 */ 
class Car
{

    private ?int $id;
    private string $brand;
    private string $model;
    private string $horsePower;
    private string $image;

    public function __construct(int|null $id, string $brand, string $model, string $horsePower, string $image)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
        $this->image = $image;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getHorsePower()
    {
        return $this->horsePower;
    }

    public function setHorsePower($horsePower)
    {
        $this->horsePower = $horsePower;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}
