<?php
namespace Core\Page\Body;

use Core\Page\BuildableInterface;
use Core\Page\AbstractAttributeElement;
use Core\Page\Head\Script\ScriptInterface;

/**
 * Body
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Body extends AbstractAttributeElement implements BuildableInterface
{

    /**
     * 
     * @var string
     */
    private $tag = 'body';
    
    /**
     * 
     * @var array
     */
    private $data = [];
    
    /**
     * 
     * @var array
     */
    private $scripts = [];
    
    /**
     * Adds body element
     * 
     * @param BodyElementInterface $bodyelement
     */
    public function add(BodyElementInterface $bodyelement)
    {
        $this->data[] = $bodyelement;
    }

    /**
     * Adds a script element to be placed before closing tag
     * 
     * @param ScriptInterface $script
     */
    public function addScript(ScriptInterface $script) {
        $this->scripts[] = $script;
    }
    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        $html = '<' . $this->tag . $this->buildAttributes() . '>';
        
        /* @var $buildable \Core\Page\BuildableInterface */
        foreach ($this->data as $buildable) {
            $html .= $buildable->build();
        }
        
        /* @var $buildable \Core\Page\BuildableInterface */
        foreach ($this->scripts as $buildable) {
            $html .= $buildable->build();
        }
        
        return $html . '</' . $this->tag . '>';
    }
}
