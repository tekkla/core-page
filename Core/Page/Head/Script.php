<?php
namespace Core\Page\Head;

use Core\Page\BuildableInterface;
use Core\Page\Head\Script\ScriptInterface;

class Script implements BuildableInterface
{

    /**
     *
     * @var array
     */
    private $data = [];

    /**
     * Adds script object
     *
     * @param ScriptInterface $script
     */
    public function add(ScriptInterface $script)
    {
        $this->data[] = $script;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\BuildableInterface::build()
     */
    public function build(): string
    {
        $html = '';
        
        /* @var $meta \Core\Page\BuildableInterface */
        foreach ($this->data as $buildable) {
            $html .= $buildable->build();
        }
        
        return $html;
    }
}
