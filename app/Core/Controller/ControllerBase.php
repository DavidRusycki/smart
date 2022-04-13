<?php
namespace Controller;

/**
 * Controller Base do sistema.
 * @author David Rusycki
 */
abstract class ControllerBase 
{
    
    private Model $Model;
    
    public abstract function init();
    
    public function getModel() : Model 
    {
        return $this->Model;
    }

    public function setModel(Model $Model): self 
    {
        $this->Model = $Model;
        
        return $this;
    }
    
}
