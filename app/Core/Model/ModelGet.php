<?php
namespace Core\Model;

use Model;
use Core\Enum;

/**
 * Model de GET do sistema
 * @author David Rusycki
 */
class ModelGet extends ModelBase
{
 
    private array $parameters;
    
    public function __construct() {
        $this->setParameters($_GET);
    }
    
    /**
     * Retorna os parametros da requisição
     * @return Array
     */
    public function getParametros() : array 
    {
        $sRotina = $this->getRotina();
        $iAcao = $this->getAcao();
        $iMetodo = $this->getMetodo();
        
        return [$sRotina, $iAcao, $iMetodo];
    }
    
    /**
     * Retorna a rotina da requisição.
     * @return string
     */
    private function getRotina() : string 
    {
        $sRetorno = 'rotinas';
        if (isset($this->getParameters()[Enum\EnumGlobal::ROTINA])) 
        {
            $sRetorno = $this->getParameters()[Enum\EnumGlobal::ROTINA];
        }
        
        return $sRetorno;
    }
    
    /**
     * Retorna a ação da requisição.
     * @return Integer
     */
    private function getAcao() : int 
    {
        $iRetorno = Enum\EnumAcoes::CONSULTAR;
        if (isset($this->getParameters()[Enum\EnumGlobal::ACAO])) 
        {
            $iRetorno = $this->getParameters()[Enum\EnumGlobal::ACAO];
        }
        
        return $iRetorno;
    }
    
    /**
     * Retorna o método da requisição.
     * Caso ele não existir considera como sendo uma requisição para montagem de tela.
     * @return string
     */
    private function getMetodo() : string 
    {
        $sRetorno = 'montaTela';
        if (isset($this->getParameters()[Enum\EnumGlobal::METODO])) 
        {
            $sRetorno = $this->getParameters()[Enum\EnumGlobal::METODO];
        }
        
        return $sRetorno;
    }
    
    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function setParameters(array $parameters): self 
    {
        $this->parameters = $parameters;
        
        return $this;
    }




}
