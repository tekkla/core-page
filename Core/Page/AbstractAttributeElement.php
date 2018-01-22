<?php
namespace Core\Page;

/**
 * AbstractAttributeElement
 *
 * @author Michael "Tekkla" Zorn <tekkla@tekkla.de>
 * @license MIT
 * @copyright 2018
 */
abstract class AbstractAttributeElement implements AttributeElementInterface
{

    /**
     *
     * @var array
     */
    protected $attributes = [];

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\AttributeElementInterface::setAttribute()
     */
    public function setAttribute(string $attribute, string $value)
    {
        $this->attributes[$attribute] = $value;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\AttributeElementInterface::getAttribute()
     */
    public function getAttribute(string $attribute): string
    {
        return $this->attributes[$attribute] ?? '';
    }

    /**
     *
     * {@inheritdoc}
     * @see \Core\Page\AttributeElementInterface::removeAttribute()
     */
    public function removeAttribute(string $attribute)
    {
        unset($this->attributes[$attribute]);
    }

    /**
     * Builds and returns a string from all set attributes
     * 
     * @return string
     */
    public function buildAttributes(): string
    {
        $html = '';
        
        foreach ($attributes as $attribute) {
            if (! empty($this->attributes[$attribute])) {
                
                if ($attribute == $this->attributes[$attribute]) {
                    
                    // single attribute without value
                    $html .= sprintf(' %s', $attribute);
                } else {
                    
                    // attribute with value
                    $html .= sprintf(' %s="%s"', $attribute, $this->attributes[$attribute]);
                }
            }
        }
        
        return $html;
    }
}
