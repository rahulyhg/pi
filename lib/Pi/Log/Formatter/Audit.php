<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Pi\Log\Formatter;

use Zend\Log\Formatter\FormatterInterface;

/**
 * Audit formatter
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Audit implements FormatterInterface
{
    /**
     * Audit table map
     * {@see module/system/sql/mysql.system.sql}
     * @var array
     */
    protected $columns
        = [
            'timestamp'  => 'time',
            'user'       => 'user',
            'ip'         => 'ip',
            'section'    => 'section',
            'module'     => 'module',
            'controller' => 'controller',
            'action'     => 'action',
            'method'     => 'method',
            'message'    => 'message',
            'extra'      => 'extra',
        ];

    /** @var string DateTime forat */
    protected $dateTimeFormat = '';

    /**
     * Formats data into a single line to be written by the writer.
     *
     * @param array $event Event data
     * @return array Formatted data to write to the log
     */
    public function format($event)
    {
        $data  = [];
        $extra = [];
        foreach ($event as $key => $val) {
            if (isset($this->columns[$key])) {
                $data[$this->columns[$key]] = $val;
            } elseif ($key !== 'priority' && $key !== 'priorityName') {
                $extra[$key] = $val;
            }
        }
        if (!empty($event['extra'])) {
            $data['extra'] = array_merge($event['extra'], $extra);
        }
        if (isset($data['extra'])) {
            $data['extra'] = json_encode($data['extra']);
        }

        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTimeFormat()
    {
        return $this->dateTimeFormat;
    }

    /**
     * {@inheritDoc}
     * @return self
     */
    public function setDateTimeFormat($dateTimeFormat)
    {
        $this->dateTimeFormat = (string)$dateTimeFormat;

        return $this;
    }
}
