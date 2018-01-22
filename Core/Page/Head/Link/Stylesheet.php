<?php
namespace Core\Page\Head\Link;

/**
 * Stylesheet
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
class Stylesheet extends AbstractLink
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setRel('stylsheet');
        $this->setCrossorigin('anonymous');
    }
}
