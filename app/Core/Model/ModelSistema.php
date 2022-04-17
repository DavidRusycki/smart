<?php
namespace Core\Model;

/**
 * Model do sistema
 * @author David Rusycki
 */
class ModelSistema extends ModelBase
{
    
    private ModelUrl $ModelUrl;
    private ModelPost $ModelPost;
    private ModelGet $ModelGet;
    
    public function __construct() {
        $this->getModelUrl();
        $this->getModelPost();
        $this->getModelGet();
    }
    
    public function getModelUrl(): ModelUrl 
    {
        if (empty($this->ModelUrl)) 
        {
            $this->ModelUrl = new ModelUrl();
        }
        return $this->ModelUrl;
    }

    public function setModelUrl(ModelUrl $ModelUrl): self 
    {
        $this->ModelUrl = $ModelUrl;
        
        return $this;
    }

    public function getModelPost(): ModelPost 
    {
        if (empty($this->ModelPost)) 
        {
            $this->ModelPost = new ModelPost();
        }
        return $this->ModelPost;
    }

    public function setModelPost(ModelPost $ModelPost): self 
    {
        $this->ModelPost = $ModelPost;
        
        return $this;
    }

    public function getModelGet(): ModelGet 
    {
        if (empty($this->ModelGet)) 
        {
            $this->ModelGet = new ModelGet();
        }
        return $this->ModelGet;
    }

    public function setModelGet(ModelGet $ModelGet): self 
    {
        $this->ModelGet = $ModelGet;
        
        return $this;
    }
    
}
