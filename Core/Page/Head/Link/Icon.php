<?php
namespace Core\Page\Head\Link;

/**
 * Icon
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Icon extends AbstractLink
{

    /**
     * Constructor
     *
     * Inits links rel attribute as icon
     */
    public function __construct()
    {
        $this->setRel('icon');
    }

    /**
     * Sets sizes attribute
     *
     * @param string $sizes
     */
    public function setSizes(string $sizes)
    {
        $this->setAttribute('sizes', $sizes);
    }

    /**
     * Returns sizes attribute
     *
     * @return string
     */
    public function getSizes(): string
    {
        return $this->getAttribute('sizes');
    }
}
