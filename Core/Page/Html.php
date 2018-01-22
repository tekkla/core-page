<?php
namespace Core\Page;

use Core\Page\Body\Body;
use Core\Page\Head\Head;

/**
 * Html
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Html extends AbstractAttributeElement implements BuildableInterface
{

    /**
     *
     * @var Head
     */
    public $head;

    /**
     *
     * @var Body
     */
    public $body;

    /**
     *
     * @var string
     */
    private $tag = 'html';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->head = new Head();
        $this->body = new Body();
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build()
    {
        return '<' . $this->tag . $this->buildAttributes() . '>' . "\n" . $this->head->build() . "\n" . $this->body->build() . "\n</" . $this->tag . '>';
    }
}
