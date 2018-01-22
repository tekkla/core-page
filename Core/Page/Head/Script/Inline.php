<?php
namespace Core\Page\Head\Script;

/**
 * Inline
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Inline extends AbstractScript
{

    /**
     *
     * @var string
     */
    private $content;
    
    /**
     * Sets content of inline script
     *
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * Returns content of inline script
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content ?? '';
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        $html = '<' . $this->tag . $this->buildAttributes() . '>' . $this->content . '</' . $this->tag . '>';
    }
}
