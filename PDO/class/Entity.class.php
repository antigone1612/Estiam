<?php
abstract class Entity{
    protected $id;
    protected $name;
    
    public function getId()
    {
        return $this->id;
    }

    
    public function getName()
    {
        return $this->name;
    }

    public abstract static function getById($id);
    public abstract static function getAll();
    


   
}