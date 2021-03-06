<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 * @package         Form
 * @package         Form
 */

namespace Pi\Form\Element;

use Pi;
use Zend\Form\Element\Select;

/**
 * Theme select element
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Theme extends Select
{
    /**
     * Get options of value select
     *
     * @return array
     */
    public function getValueOptions()
    {
        $type               = $this->getOption('section');
        $this->valueOptions = Pi::service('theme')->getThemes($type);
        $allowAuto          = $this->getOption('allow_auto');
        if ($allowAuto) {
            $this->valueOptions = ['' => __('Use system theme')] + $this->valueOptions;
        }

        return $this->valueOptions;
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {
        if (null === $this->label) {
            $this->label = __('Theme');
        }

        return parent::getLabel();
    }
}
