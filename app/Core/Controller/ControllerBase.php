<?php
namespace Core\Controller;

use Core\Model;

/**
 * Controller Base do sistema.
 * @author David Rusycki
 */
abstract class ControllerBase 
{
    
    private object $Model;
    
    /**
     * Método padrão para todo controller.
     */
    public abstract function init();
    
    public function getModel() : object 
    {
        return $this->Model;
    }

    public function setModel(object $Model): self 
    {
        if ($Model instanceof Model\ModelBase) {
            $this->Model = $Model;
        }
        else 
        {
            throw new \Exception('Os modelos do sistema devem extender de \Core\Model\ModelBase.');
        }
        
        return $this;
    }
    
}
