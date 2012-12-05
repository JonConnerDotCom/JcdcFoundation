<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            'ZfmFoundation' => __DIR__ . '/../view'
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'Alert' => 'ZfmFoundation\View\Helper\Alert',
            'Label' => 'ZfmFoundation\View\Helper\Label',
            'Tooltip' => 'ZfmFoundation\View\Helper\Tooltip',
            'FoundationForm' => 'ZfmFoundation\Form\View\Helper\FoundationForm'
        )
    )
)
;
