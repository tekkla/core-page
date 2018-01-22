<?php
namespace Core\Page\Head;

/**
 * IntegrityInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface IntegrityInterface
{
    /**
     * Sets integrity attribute value
     * 
     * @param string $integrity
     */
    public function setIntegrity(string $integrity);
    
    /**
     * Returns set integritiy attribute value
     * 
     * @return string
     */
    public function getIntegrity(): string;
}
