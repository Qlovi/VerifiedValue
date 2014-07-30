<?php

/**
 * Copyright 2012 - 2014, Acias, Inc. (http://qlovi.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright Copyright 2012 - 2014, Acias, Inc. (http://qlovi.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * VerifiedValue Behavior
 *
 * @package utils
 * @subpackage utils.models.behaviors
 */
class VerifiedValueBehavior extends ModelBehavior {

    /**
     * Settings to configure the behavior
     *
     * @var array
     */
    protected $_settings = array();

    /**
     * Default settings
     * 
     * @var array
     */
    protected $_defaults = array(
        'states_enabled' => false,
    );

    /**
     * Setup this behavior with the specified configuration settings.
     *
     * @param Model $Model Model using this behavior
     * @param array $settings Configuration settings for $Model
     * @return void
     */
    public function setup(&$Model, array $settings = array()) {
        parent::setup($model, $settings);
        
        if (!isset($this->_settings[$Model->alias])) {
            $this->_settings[$Model->alias] = $this->_defaults;
        }
        $this->_settings[$Model->alias] = array_merge($this->_settings[$Model->alias], $settings);
    }

}
