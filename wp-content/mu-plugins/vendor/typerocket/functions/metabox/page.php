<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// Meta Box: metabox-sample - متادیتای نمونه

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'pageInfo';
  
    // Create page options
    CSF::createMetabox( $prefix, array(
      'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
      'title'     => 'اطلاعات صفحه',
      'post_type' => 'page',
    ) );
  
    // Create a section
    CSF::createSection( $prefix, array(
        'fields' => array(

            array(
                'id'        => 'tables',
                'type'      => 'repeater',
                'title'     => 'جداول قیمت‌ها',
                'fields'    => array(
            
                    array(
                        'id'    => 'title',
                        'type'  => 'text',
                        'title' => 'عنوان جدول',
                    ),




                    // array(
                    //     'id'     => 'opt-group-6',
                    //     'type'   => 'group',
                    //     'title'  => 'Group with Repeater Field',
                    //     'fields' => array(
                    //       array(
                    //         'id'    => 'opt-text',
                    //         'type'  => 'text',
                    //         'title' => 'Text',
                    //       ),
                    //       array(
                    //         'id'     => 'opt-group-6-repeater',
                    //         'type'   => 'repeater',
                    //         'title'  => 'Repeater',
                    //         'fields' => array(
                    //           array(
                    //             'id'    => 'opt-text',
                    //             'type'  => 'text',
                    //             'title' => 'Text'
                    //           ),
                    //         ),
                    //       ),
                    //       array(
                    //         'id'    => 'opt-switcher',
                    //         'type'  => 'switcher',
                    //         'title' => 'Switcher',
                    //       ),
                    //       array(
                    //         'id'    => 'opt-textarea',
                    //         'type'  => 'textarea',
                    //         'title' => 'Textarea',
                    //       ),
                    //     ),
                    //     'default' => array(
                    //       array(
                    //         'opt-text' => 'Some text 1',
                    //         'opt-group-6-repeater' => array(
                    //           array(
                    //             'opt-text' => 'Some text 1',
                    //           ),
                    //             array(
                    //             'opt-text' => 'Some text 2',
                    //           ),
                    //         )
                    //       ),
                    //     )
                    // ),





                    array(
                        'id'    => 'plans',
                        'type'  => 'group',
                        // 'title' => 'پلن ها',
                        'max'   => 4,
                        'fields'    => array(

                            array(
                                'id'         => 'special',
                                'type'       => 'switcher',
                                'title'      => 'پلن پیشنهادی',
                                'text_on'    => 'بله',
                                'text_off'   => 'خیر',
                                'text_width' => 100
                            ),

                            array(
                                'id'    => 'title',
                                'type'  => 'text',
                                'title' => 'عنوان',
                            ),

                            array(
                                'id'    => 'subtitle',
                                'type'  => 'text',
                                'title' => 'زیرعنوان',
                            ),

                            array(
                                'id'          => 'price',
                                'type'        => 'number',
                                'title'       => 'قیمت',
                                'unit'        => 'تومان',
                            ),

                            array(
                                'id'    => 'desc',
                                'type'  => 'repeater',
                                'title' => 'توضیحات',
                                'fields'    => array(

                                    array(
                                        'id'    => 'feacher',
                                        'type'  => 'text',
                                        'title' => 'ویژگی',
                                    ),

                                    array(
                                        'id'         => 'type',
                                        'type'       => 'switcher',
                                        'title'      => 'نوع',
                                        'text_on'    => 'فعال',
                                        'text_off'   => 'غیرفعال',
                                        'text_width' => 100
                                    ),

                                ),
                            ),

                            array(
                                'id'    => 'link',
                                'type'  => 'link',
                                'title' => 'لینک',
                                'add_title'    => 'افزودن لینک',
                                'edit_title'   => 'ویرایش لینک',
                                'remove_title' => 'حذف لینک',
                            ),

                        )
                    ),
            
                ),
                // 'default'   => array(
                //     array(
                //         'opt-text-1' => 'Text 1 default value',
                //         'opt-text-2' => 'Text 2 default value',
                //     ),
                //     array(
                //         'opt-text-1' => 'Text 1 default value',
                //         'opt-text-2' => 'Text 2 default value',
                //     )
                // )
            ),

        )
    ) );
  
}