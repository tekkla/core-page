<?php
namespace Core\Page;

/**
 * BuildableInterface
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
interface BuildableInterface
{

    /**
     * Build element to be displayed in page
     *
     * @return string
     */
    public function build(): string;
}
