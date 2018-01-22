<?php
namespace Core\Page;

/**
 * Inline
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Page implements PageInterface
{

    private $doctype;

    /**
     *
     * @var Html
     */
    public $html;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->html = new Html();
    }

    public function setDoctype(string $doctype)
    {
        $this->doctype = $doctype;
    }

    public function getDoctype(): string
    {
        return $this->doctype ?? '';
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build()
    {
        return '<!DOCTYPE html>' . $this->html->build();
    }
}
