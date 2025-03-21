<?php

$forms = array(
    'name' => 'form1',
    'method' => 'post',
    'fields' => array(
        'name' => array(
            'type' => 'text',
            'label' => 'Name',
            'required' => true
        ),
        'email' => array(
            'type' => 'text',
            'label' => 'Email',
            'required' => true
        ),
        'message' => array(
            'type' => 'textarea',
            'label' => 'Message',
            'required' => true
        ),
        'how_did_you_hear' => array(
            'type' => 'radio',
            'label' => 'How did you hear from us',
            'options' => array(
                'google' => 'Google',
                'friend' => 'Friend',
                'other' => 'Other'
            )
        ),
        'multiple_select' => array(
            'type' => 'checkbox',
            'label' => 'Multiple select',
            'options' => array(
                'option1' => 'Option 1',
                'option2' => 'Option 2',
                'option3' => 'Option 3'
            )
            ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Submit'
        )
    )
)

?>