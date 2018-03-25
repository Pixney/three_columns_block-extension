<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionThreeColumnsBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => false,
        'trashable'    => false,
        'searchable'   => false,
        'sortable'     => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'headline' => [
            'required'     => true,
        ],
         // Column 1 fields
        'column_1_name' => [
            'required'     => false,
        ],
        'column_1_image' => [
        ],
        'column_1_content' => [
        ],
          // Column 2 fields
        'column_2_name' => [
            'required'     => false,
        ],
        'column_2_image' => [
        ],
        'column_2_content' => [
        ],
           // Column 3 fields
        'column_3_name' => [
            'required'     => false,
        ],
        'column_3_image' => [
        ],
        'column_3_content' => [
        ],
    ];
}
