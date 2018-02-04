<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 18/01/2018
 * Time: 17:06
 */
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_groups-news',
        'title' => 'groups news',
        'fields' => array (
            array (
                'key' => 'field_5a58d28a4f74f',
                'label' => 'Città',
                'name' => 'Città',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a5c725ec0077',
                'label' => 'Scuola',
                'name' => 'scuola',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a5c7271c0078',
                'label' => 'Partner Letteraio',
                'name' => 'partner_letteraio',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'news',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_gruppo-progetto',
        'title' => 'Gruppo progetto',
        'fields' => array (
            array (
                'key' => 'field_5a5b4836c7a12',
                'label' => 'Autore',
                'name' => 'autore',
                'type' => 'text',
                'required' => 1,
                'default_value' =>the_field('first_name'),
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a5b4883c7a13',
                'label' => 'Pdf del Progetto',
                'name' => 'pdf',
                'type' => 'file',
                'required' => 1,
                'save_format' => 'url',
                'library' => 'all',
            ),
            array (
                'key' => 'field_5a670a7ea7f09',
                'label' => 'Posizione',
                'name' => 'posizione',
                'type' => 'COUNTRY_FIELD',
                'required' => 1,
                'country_name' => '',
                'city_name' => '',
                'state_name' => '',
                'country_id' => 0,
                'city_id' => 0,
                'state_id' => 0,
            ),
            array (
                'key' => 'field_5a670ae2a7f0c',
                'label' => 'Tutta Italia',
                'name' => 'tutta_italia',
                'type' => 'checkbox',
                'choices' => array (
                    'si' => 'Si',
                ),
                'default_value' => '',
                'layout' => 'vertical',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_poesia',
        'title' => 'Poesia',
        'fields' => array (
            array (
                'key' => 'field_5a60b61944092',
                'label' => 'Autore',
                'name' => 'autore',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'quote',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_gruppo-giuria',
        'title' => 'gruppo giuria',
        'fields' => array (
            array (
                'key' => 'field_5a622ba7ec758',
                'label' => 'Qualifica',
                'name' => 'qualifica',
                'type' => 'text',
                'instructions' => 'Inserire la Qualifica del giurato',
                'required' => 1,
                'default_value' => '',
                'placeholder' => 'Poeta',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a622cba2ff28',
                'label' => 'Immagine',
                'name' => 'immagine',
                'type' => 'image',
                'required' => 1,
                'save_format' => 'url',
                'preview_size' => 'square_small',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'jury',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
