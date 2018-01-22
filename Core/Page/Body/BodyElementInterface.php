<?php
namespace Core\Page\Body;

/**
 * BodyElementInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface BodyElementInterface
{

    /**
     * Sets element content
     *
     * @param string $content
     */
    public function setContent(string $content);

    /**
     * Returns element content
     *
     * @return string
     */
    public function getContent(): string;
}
