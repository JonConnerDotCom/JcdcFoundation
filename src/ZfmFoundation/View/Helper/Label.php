<?php
/**
 * ZfmFoundationViewHelper
 * 
 * @author
 * @version 
 */
namespace ZfmFoundation\View\Helper;
use Zend\View\Helper\AbstractHelper;

/**
 * View Helper
 */
class Label extends AbstractHelper
{

    protected $types = array(
            'alert',
            'success',
            'secondary'
    );

    protected $styles = array(
            'round',
            'radius'
    );

    public function __invoke ($text, $type = null, $style = null)
    {
        $output = '<span class="';
        
        //Set minimum class to label
        $class = 'label';
        
        //Check for valid type
        if (in_array($type, $this->types)) {
            $class .= ' '.$type;
        }
        
        //Check for valid style
        if (in_array($style, $this->styles)) {
            $class .= ' '.$style;
        }
        
        $output .= $class . '">';
        
        //Set label text
        if ($text) {
            $output .= $text;
        }
        
        $output .= '</span>';
        
        echo $output;
    }
}
