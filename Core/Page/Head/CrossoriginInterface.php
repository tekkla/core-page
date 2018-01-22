<?php
namespace Core\Page\Head;

/**
 * CrossoriginInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface CrossoriginInterface
{
    /**
     * Sets crossorigin attribute value
     *
     * @param string $crossorigin
     */
    public function setCrossorigin(string $crossorigin);
    
    /**
     * Returns set integritiy attribute value
     *
     * @return string
     */
    public function getCrossorigin(): string;
}
