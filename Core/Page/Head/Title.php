<?php
namespace Core\Page\Head;

use Core\Page\BuildableInterface;

/**
 * Title
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Title implements TitleInterface, BuildableInterface
{

    /**
     *
     * @var string
     */
    private $title = '';

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\TitleInterface::getTitle()
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\Head\TitleInterface::setTitle()
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        return sprintf('<title>%s</title>', $this->title);
    }
}
