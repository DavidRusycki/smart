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
     * Inicia o sistema.
     * @return void
     */
    public static function iniciar() : void
    {
        $oController = self::getInstance();
        $oController->init();
    }
    
    /**
     * {@inheritDoc}
     */
    public function init() : void
    {
        $oSistema = new Model\ModelSistema();
//        $oSistema->setDb(Db:getInstance()); /*Não implementado*/
        $this->setModel($oSistema);
        $this->redirect();
    }
    
    /**
     * Responsável por iniciar o sistema
     * @return void
     */
    public function redirect() : bool
    {
        $this->validaRequisicao();
        return $this->callController();   
    }
    
    /**
     * Realiza a validação das informações da requisição.
     * @return bool
     */
    private function validaRequisicao() : bool
    {
        /* Não implementado */
        return true;
    }
    
    /**
     * Realiza a chamada para o controller em questão caso ele exista e os parametros estejam validos.
     * @return bool
     */
    public function callController() : bool
    {
        list($sRotina, $iAcao, $sMetodo) = $this->getModel()->getModelGet()->getParametros();
        $sController = '\Controller\Controller'.ucfirst($sRotina);
        $oController = new $sController;
        
        if (method_exists($oController, $sMetodo))
        {
            $oController->$sMetodo;
        }
        else {
            return false;
        }
        
        return true;
    }
    
}

