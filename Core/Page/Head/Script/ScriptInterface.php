<?php
namespace Core\Page\Head\Script;

use Core\Page\Head\CrossoriginInterface;
use Core\Page\Head\IntegrityInterface;
use Core\Page\BuildableInterface;
use Core\Page\Head\HeadElementInterface;

/**
 * ScriptInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface ScriptInterface extends CrossoriginInterface, IntegrityInterface, HeadElementInterface, BuildableInterface
{

    /**
     * Sets optional script type
     *
     * @param string $type
     */
    public function setType(string $type);

    /**
     * Returns set script type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets src of script
     *
     * @param string $src
     */
    public function setSrc(string $src);

    /**
     * Returns set script src
     *
     * @return string
     */
    public function getSrc(): string;

    /**
     * Sets defer flag for external scripts
     *
     * @param bool $defer
     */
    public function setDefer(bool $defer);

    /**
     * Returns set defer flag
     *
     * @return bool
     */
    public function getDefer(): bool;

    /**
     * Sets async flag for external scripts
     *
     * @param bool $async
     */
    public function setAsync(bool $async);

    /**
     * Returns set async flag
     *
     * @return bool
     */
    public function getAsync(): bool;

    /**
     * Sets scripts charset
     *
     * @param string $charset
     */
    public function setCharset(string $charset);

    /**
     * Returns scripts charset
     *
     * @return string
     */
    public function getCharset(): string;
}
