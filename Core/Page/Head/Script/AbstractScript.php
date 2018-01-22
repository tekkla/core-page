<?php
namespace Core\Page\Head\Script;

use Core\Page\AbstractAttributeElement;

/**
 * AbstractScript
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
abstract class AbstractScript extends AbstractAttributeElement implements ScriptInterface
{
    
    /**
     * 
     * @var string
     */
    protected $tag = 'script';
    
    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::getAsync()
     */
    public function getAsync(): bool
    {
        return $this->getAttribute('async') == 'async' ? true : false;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::getCharset()
     */
    public function getCharset(): string
    {
        return $this->getAttribute('charset');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::getDefer()
     */
    public function getDefer(): bool
    {
        return $this->getAttribute('defer') == 'defer' ? true : false;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::getSrc()
     */
    public function getSrc(): string
    {
        return $this->getAttribute('src');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::getType()
     */
    public function getType(): string
    {
        return $this->getAttribute('type');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::setAsync()
     */
    public function setAsync()
    {
        $this->setAttribute('async', 'async');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::setCharset()
     */
    public function setCharset(string $charset)
    {
        $this->setAttribute('charset', $charset);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::setDefer()
     */
    public function setDefer()
    {
        $this->setAttribute('async', 'async');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::setSrc()
     */
    public function setSrc(string $src)
    {
        $this->setAttribute('src', $src);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Script\ScriptInterface::setType()
     */
    public function setType(string $type)
    {
        $this->setAttribute('type', $type);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\CrossoriginInterface::getCrossorigin()
     */
    public function getCrossorigin(): string
    {
        return $this->getAttribute('crossorigin');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\CrossoriginInterface::setCrossorigin()
     */
    public function setCrossorigin(string $crossorigin)
    {
        $this->setAttribute('crossorigin', $crossorigin);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\IntegrityInterface::getIntegrity()
     */
    public function getIntegrity(): string
    {
        return $this->getAttribute('integrity');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\IntegrityInterface::setIntegrity()
     */
    public function setIntegrity(string $integrity)
    {
        $this->setAttribute('integrity', $integrity);
    }
}
