<?php
namespace Core\Page\Body;

use Core\Page\BuildableInterface;

class Content implements BodyElementInterface, BuildableInterface
{
    private $content;

    /**
     * 
     * {@inheritDoc}
     * @see \Core\Page\Body\BodyElementInterface::setContent()
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }
    /**
     * 
     * {@inheritDoc}
     * @see \Core\Page\Body\BodyElementInterface::getContent()
     */
    public function getContent(): string
    {
        return $this->content ?? '';
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build()
    {
        return $this->getContent();
    }
}
