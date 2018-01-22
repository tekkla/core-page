<?php
namespace Core\Page\Head;

use Core\Page\BuildableInterface;

/**
 * Head
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Head implements BuildableInterface
{

    /**
     *
     * @var array
     */
    private $data = [];

    /**
     * Adds html element
     *
     * @param HeadElementInterface $headelement
     */
    public function add(HeadElementInterface $headelement)
    {
        $this->data[] = $headelement;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        $html = '';
        
        /* @var $meta \Core\Page\BuildableInterface */
        foreach ($this->data as $buildable) {
            $html .= $buildable->build();
        }
        
        return $html;
    }
}
