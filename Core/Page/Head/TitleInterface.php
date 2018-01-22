<?php
namespace Core\Page\Head;

use Core\Page\BuildableInterface;

/**
 * TitleInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface TitleInterface extends HeadElementInterface, BuildableInterface
{

    /**
     * Sets title
     *
     * @param string $title
     */
    public function setTitle(string $title);

    /**
     * Returns set title
     *
     * @return string
     */
    public function getTitle(): string;
}
