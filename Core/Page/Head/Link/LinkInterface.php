<?php
namespace Core\Page\Head\Link;

use Core\Page\Head\CrossoriginInterface;
use Core\Page\Head\IntegrityInterface;
use Core\Page\BuildableInterface;
use Core\Page\Head\HeadElementInterface;

/**
 * LinkInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface LinkInterface extends CrossoriginInterface, IntegrityInterface, HeadElementInterface, BuildableInterface
{

    /**
     * Sets rel attribute
     *
     * @param string $rel
     */
    public function setRel(string $rel);

    /**
     * Returns rel attribute
     *
     * @return string
     */
    public function getRel(): string;

    /**
     * Sets typeattribute
     *
     * @param string $type
     */
    public function setType(string $type);

    /**
     * Returns type attribute
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets href attribute
     *
     * @param string $href
     */
    public function setHref(string $href);

    /**
     * Returns href attribute
     *
     * @return string
     */
    public function getHref(): string;

    /**
     * Sets hreflang attribute
     *
     * @param string $hreflang
     */
    public function setHreflang(string $hreflang);

    /**
     * Returns hreflang attribute
     *
     * @return string
     */
    public function getHreflang(): string;

    /**
     * Sets media attribute
     *
     * @param string $media
     */
    public function setMedia(string $media);

    /**
     * Returns media attribute
     *
     * @return string
     */
    public function getMedia(): string;
}
