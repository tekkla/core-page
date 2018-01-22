<?php
namespace Core\Page\Head\Meta;

use Core\Page\BuildableInterface;
use Core\Page\Head\HeadElementInterface;

/**
 * MetaInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface MetaInterface extends HeadElementInterface, BuildableInterface
{

    /**
     * Sets attribute
     *
     * @param string $attribute
     */
    protected function setAttribute(string $attribute);

    /**
     * Returns attribute
     *
     * @return string
     */
    protected function getAttribute(): string;

    /**
     * Sets content
     *
     * @param string $content
     */
    public function setContent(string $content);

    /**
     * Returns set content
     *
     * @return string
     */
    public function getContent(): string;
}
