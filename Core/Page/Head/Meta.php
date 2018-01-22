<?php
namespace Core\Page\Head;

use Core\Page\Head\Meta\MetaInterface;
use Core\Page\BuildableInterface;

/**
 * Meta
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Meta implements BuildableInterface
{
    /**
     * 
     * @var array
     */
    private $data = [];
    
    /**
     * Adds meta object 
     * 
     * @param MetaInterface $meta
     */
    public function add(MetaInterface $meta) {
        $this->data[] =$meta;
    }
    /**
     * {@inheritDoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        $html = '';
        
        /* @var $meta \Core\Page\BuildableInterface */
        foreach ($this->data as $meta) {
            $html .= $meta->build();
        }
        
        
        return $html;
    }
}
