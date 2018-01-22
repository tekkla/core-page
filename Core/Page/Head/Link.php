<?php
namespace Core\Page\Head;

use Core\Page\Head\Link\LinkInterface;

/**
 * Link
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Link
{

    /**
     *
     * @var array
     */
    private $data = [];

    /**
     * Adds a link object
     *
     * @param LinkInterface $link
     */
    public function add(LinkInterface $link)
    {
        $this->data[] = $link;
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
