<?php
namespace Core\Controller;

use \Core\Model;

/**
 * Controller do sistema
 * @author David Rusycki
 */
class ControllerSistema extends ControllerBase
{
    
    protected static self $instance;
    
    public static function getInstance()
    {
        if (empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Responsável por iniciar o sistema
     * @return void
     */
    public static function init() : void
    {
        $oController = self::getInstance();
        $oSistema = new ModelSistema();
        $oSistema->setDb(Db:getInstance());
        $oController->setModel($oSistema);
        $oController->redirect();
    }
    
    public function redirect() : bool
    {
        $this->validaRequisicao();
        return $this->callController();   
    }
    
    public function callController() : bool
    {
        
        
        
    }
    
}

