<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'JcdcFoundation' => __DIR__ . '/../view'
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'Alert' => 'JcdcFoundation\View\Helper\Alert',
            'Label' => 'JcdcFoundation\View\Helper\Label',
            'Tooltip' => 'JcdcFoundation\View\Helper\Tooltip',
            'FoundationForm' => 'JcdcFoundation\Form\View\Helper\FoundationForm'
        )
    )
)
;
