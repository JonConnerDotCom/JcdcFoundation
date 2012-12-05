<?php
/**
 * ZfmFoundationFormViewHelper
 * 
 * @author
 * @version 
 */
namespace ZfmFoundation\Form\View\Helper;
use Zend\View\Helper\AbstractHelper;
use Zend\Form\Form;
/**
 * View Helper
 */
class FoundationForm extends AbstractHelper
{

    public function __invoke(Form $form, $action, $method, $width = 'six')
    {
        $form->prepare();

        $form->setAttribute('action', $action);
        $form->setAttribute('method', $method);
        
        $output = $this->view->form()->openTag($form) . PHP_EOL;

        $elements = $form->getElements();
        
        foreach($elements as $e){
            $output .= $this->view->formElement($e);
            $output .= $this->view->formElementErrors()
                            ->setMessageOpenFormat('<small class="error">')
                            ->setMessageSeparatorString('</small><small class="error">')
                            ->setMessageCloseString('</small>')
                            ->render($e).PHP_EOL;
        }
        
        $output .= $this->view->form()->closeTag($form) . PHP_EOL;
        
        return $output;
    }
}
