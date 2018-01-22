<?php
namespace Core\Page\Head\Meta;

/**
 * AbstractMeta
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
abstract class AbstractMeta implements MetaInterface
{
    
    /**
     *
     * @var string
     */
    protected $attribute = '';

    /**
     *
     * @var string
     */
    protected $content = '';

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Meta\MetaInterface::setAttribute()
     */
    public function setAttribute(string $attribute)
    {
        if (empty($attribute)) {
            Throw new MetaException('Empty attribute names are not allowed.');
        }
        
        $this->attribute = $attribute;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Meta\MetaInterface::getAttribute()
     */
    public function getAttribute(): string
    {
        return $this->attribute;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Meta\MetaInterface::getContent()
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\Meta\MetaInterface::setContent()
     */
    public function setContent(string $content)
    {
        if (empty($content)) {
            Throw new MetaException('Empty attribute contents are not allowed.');
        }
        
        $this->content = $content;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        return sprintf('<meta attribute="%s" content="%s">', $this->attribute, $this->content);
    }
}
