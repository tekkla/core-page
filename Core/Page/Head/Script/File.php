<?php
namespace Core\Page\Head\Script;

/**
 * File
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class File extends AbstractScript
{

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        if (empty($this->attributes['src'])) {
            Throw new ScriptException('This script object needs a set src-attribute.');
        }
        
        return '<' . $this->tag . $this->buildAttributes() . '>';
    }
}
