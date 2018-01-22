<?php
namespace Core\Page\Head\Meta;

/**
 * Charset
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Charset extends AbstractMeta
{

    protected $attribute = 'charset';
    
    /**
     *
     * @var string
     */
    protected $content = 'UTF-8';
}
