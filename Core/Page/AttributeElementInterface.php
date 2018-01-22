<?php
namespace Core\Page;

/**
 * AttributeElementInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface AttributeElementInterface
{

    /**
     * Sets an attribute
     *
     * @param string $attribute
     * @param string $value
     */
    public function setAttribute(string $attribute, string $value);

    /**
     * Returns a set attribute
     *
     * Will be emty string when attribute is not set.
     *
     * @param string $attribute
     *
     * @return string
     */
    public function getAttribute(string $attribute): string;

    /**
     * Removes an attribute
     *
     * @param string $attribute
     */
    public function removeAttribute(string $attribute);
}
