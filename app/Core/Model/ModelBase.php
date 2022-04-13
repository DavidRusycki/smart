<?php
namespace Model;

/**
 * Model Base do sistema
 * @author David Rusycki
 */
class ModelBase
{

    private Db $DataBase;
    
    public function getDataBase(): Db 
    {
        return $this->DataBase;
    }

    public function setDataBase(Db $DataBase): self 
    {
        $this->DataBase = $DataBase;
        
        return $this;
    }
    
}
