<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 * @package         View
 */

namespace Pi\View\Helper;

use Pi;
use Zend\View\Helper\AbstractHelper;

/**
 * Helper for loading Intl resource
 *
 * Usage inside a phtml template
 *
 * ```
 *  $this->i18n('theme/default', 'default');
 *  $this->i18n('module/demo', 'block');
 * ```
 *
 * @see Pi\Application\Service\I18n
 * @see Pi\Application\Service\Asset
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class I18n extends AbstractHelper
{
    /**
     * Load an i18n resource
     *
     * @param   string $component
     * @param   string $file
     * @return  self
     */
    public function __invoke($component, $file)
    {
        Pi::service('i18n')->load($component, $file);

        return $this;
    }
}
