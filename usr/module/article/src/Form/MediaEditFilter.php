<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link         http://code.pialog.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://pialog.org
 * @license      http://pialog.org/license.txt BSD 3-Clause License
 */

namespace Module\Article\Form;

use Pi;
use Zend\InputFilter\InputFilter;

/**
 * Validate and filer form class
 * 
 * @author Zongshu Lin <lin40553024@163.com>
 */
class MediaEditFilter extends InputFilter
{
    /**
     * Initializing validator and filter 
     */
    public function __construct()
    {
        $this->add(array(
            'name'     => 'title',
            'required' => true,
            'filters'  => array(
                array(
                    'name' => 'StringTrim',
                ),
            ),
        ));

        $this->add(array(
            'name'     => 'description',
            'required' => false,
        ));

        $this->add(array(
            'name'     => 'url',
            'required' => true,
        ));
        
        $this->add(array(
            'name'     => 'type',
            'required' => false,
        ));

        $this->add(array(
            'name'     => 'id',
            'required' => false,
        ));
    }
}
