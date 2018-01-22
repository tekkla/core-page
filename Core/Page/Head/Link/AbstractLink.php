<?php
namespace Core\Page\Head\Link;

use Core\Page\AbstractAttributeElement;

/**
 * AbstractLink
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class AbstractLink extends AbstractAttributeElement implements LinkInterface
{
    /**
     * 
     * @var string
     */
    protected $tag = 'link';
    
    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::getHref()
     */
    public function getHref(): string
    {
        return $this->getAttribute('href');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::setHref()
     */
    public function setHref(string $href)
    {
        $this->setAttribute('href', $href);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::getHreflang()
     */
    public function getHreflang(): string
    {
        return $this->getAttribute('hreflang');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::setHreflang()
     */
    public function setHreflang(string $hreflang)
    {
        $this->setAttribute('hreflang', $hreflang);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::getMedia()
     */
    public function getMedia(): string
    {
        return $this->getAttribute('media');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::setMedia()
     */
    public function setMedia(string $media)
    {
        $this->setAttribute('media', $media);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::getRel()
     */
    public function getRel(): string
    {
        return $this->getAttribute('rel');
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::setRel()
     */
    public function setRel(string $rel)
    {
        $this->setAttribute('rel', $rel);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::setType()
     */
    public function setType(string $type)
    {
        $this->setAttribute('type', $type);
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Link\LinkInterface::getType()
     */
    public function getType(): string
    {
        return $this->getAttribute('type');
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

    /**
     * 
     * {@inheritDoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        return '<' . $this->tag . $this->buildAttributes() . '>';
    }
}
