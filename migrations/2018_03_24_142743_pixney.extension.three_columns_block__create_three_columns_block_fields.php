<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionThreeColumnsBlockCreateThreeColumnsBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'headline' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options'       => ['1'=>'h1', '2'=>'h2', '3'=>'h3', '4'=>'h4', '5'=>'h5', '6'=>'h6'],
                'default_value' => 2,
                'mode'          => 'dropdown'
            ]
            ],
        // Column 1 fields
        'column_1_name'  => 'anomaly.field_type.text',
        'column_1_image' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '16:9',
            ]
        ],
        'column_1_content' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 6,
                'min'           => null,
                'max'           => null,
                'show_counter'  => true,
                'default_value' => null
            ]
        ],

        // Column 2 Fields
        'column_2_name'  => 'anomaly.field_type.text',
        'column_2_image' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '16:9',
            ]
        ],
        'column_2_content' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 6,
                'min'           => null,
                'max'           => null,
                'show_counter'  => true,
                'default_value' => null
            ]
        ],

        // Column three fields
        'column_3_name'  => 'anomaly.field_type.text',
        'column_3_image' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '16:9',
            ]
        ],
        'column_3_content' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 6,
                'min'           => null,
                'max'           => null,
                'show_counter'  => true,
                'default_value' => null
            ]
        ],
    ];
}
