<?php
/**
 * ZfmFoundation View Helper
 * 
 * @author Jon Conner
 * @version 1.0.1
 */
namespace ZfmFoundation\View\Helper;
use Zend\View\Helper\AbstractHelper;

/**
 * Alert View Helper
 */
class Alert extends AbstractHelper
{

    protected $type = array('alert', 'success', 'secondary');
    
    public function __invoke ($msg, $type = null, $closeable = null)
    {
        $output = '';
        
        if (in_array($type, $this->type)) {
            
            $output .= '<div class="alert-box ' . $type . '">' . PHP_EOL;
        
        } else{
            
            $output .= '<div class="alert-box">' . PHP_EOL;
        
        }
        
        if ($msg) {
            
            $output .= $msg . PHP_EOL;
        
        }
        
        if($closeable) {
            
            $output .= '<a href="" class="close">&times;</a>' . PHP_EOL;
            $output .= '</div>' . PHP_EOL;
        
        }else{
            
            $output .= '</div>' . PHP_EOL;
        
        }
            
        echo $output;
    }

}
