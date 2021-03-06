<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\User\Controller\Front;

use Pi;
use Pi\Mvc\Controller\ActionController;

/**
 * Test cases controller
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class TestController extends ActionController
{
    /**
     * Default action if none provided
     *
     * @return string
     */
    public function indexAction()
    {
        return false;
        /*
        $this->view()->setTemplate(false);

        $fields = Pi::registry('field', 'user')->read('compound');
        vd($fields);
        $fields = Pi::registry('compound_field', 'user')->read('education');
        vd($fields);

        vd(Pi::user()->hasIdentity());
        vd(Pi::user()->getUrl('register'));
        vd(Pi::user()->avatar(1));
        vd(Pi::user()->avatar()->getAdapter('select')->getMeta());
        vd(Pi::avatar()->getAdapter('upload')->getMeta(Pi::user()->id));
        vd(Pi::avatar()->canonizeSize('l'));
        vd(Pi::user()->getUids(array('bio' => '')));

        $where = Pi::db()->where(array(
            'uid > ?' => 1,
            'active > ?' => 0,
        ));
        $uids = Pi::api('user', 'user')->getUids($where, 3, 1, 'id desc');
        $count = Pi::api('user', 'user')->getCount($where);
        vd($uids);
        vd($count);
        */
    }

    protected function flushUsers()
    {
        return false;

        /*
        Pi::model('account', 'user')->delete(['id > ?' => 10]);
        Pi::model('profile', 'user')->delete(['uid > ?' => 10]);
        Pi::model('compound', 'user')->delete(['uid > ?' => 10]);
        */
    }

    public function addAction()
    {
        return false;

        /*
        $this->view()->setTemplate(false);

        $this->flushUsers();

        $users = [];

        $prefix = _get('prefix') ?: 'pi';
        $count  = (int)_get('count') ?: 1;

        vd($count);


        $genderMap   = ['male', 'female', 'unknown'];
        $languageMap = ['en', 'fa', 'fr', 'zh-cn'];
        $countryMap  = ['China', 'England', 'France', 'Iran'];
        $degreeMap   = ['Ph.D', 'Master', 'Bachelor', 'College',
                        'High school', 'Middle school',
                        'Preliminary school'];

        $start = 11;
        $end   = $count + $start;
        for ($i = $start; $i <= $end; $i++) {
            $user = [
                'identity'   => $prefix . '_' . $i,
                'credential' => $prefix . '_' . $i,
                'name'       => ucfirst($prefix) . ' ' . $i,
                'email'      => $prefix . '_' . $i . '@piengine.org',

                'fullname'  => ucfirst($prefix) . ' User ' . $i,
                'gender'    => $genderMap[$i % 3],
                'birthdate' => (1900 + $i % 100) . '-'
                    . ($i % 12 + 1) . '-' . ($i % 30 + 1),
                'location'  => 'From ' . $i,
                'signature' => 'Signature of user ' . $i,
                'bio'       => 'User bio: ' . $i,

                'language'    => $languageMap[$i % 4],
                'demo_sample' => 'Demo Sample: ' . $i,

                'address' => [
                    'country'  => $countryMap[$i % 4],
                    'province' => 'Province ' . $i,
                    'city'     => 'City ' . $i,
                    'street'   => 'Street ' . $i,
                    'room'     => 'Room ' . $i,
                    'postcode' => 'Code ' . $i,
                ],

                'tool' => [
                    [
                        'title'      => 'Google+',
                        'identifier' => rand(),
                    ],
                    [
                        'title'      => 'Twitter',
                        'identifier' => 'twitter_' . $i,
                    ],
                    [
                        'title'      => 'QQ',
                        'identifier' => '88' . $i,
                    ],
                ],

                'education' => [
                    [
                        'school' => 'School 1 ' . $i,
                        'major'  => 'Major 1 ' . $i,
                        'degree' => $degreeMap[$i % 7],
                        'class'  => 'Class 1 ' . $i,
                        'start'  => rand(1900, 2013),
                        'end'    => rand(1900, 2013),
                    ],
                    [
                        'school' => 'School 2 ' . $i,
                        'major'  => 'Major 2  ' . $i,
                        'degree' => $degreeMap[$i % 7],
                        'class'  => 'Class 2 ' . $i,
                        'start'  => rand(1900, 2013),
                        'end'    => rand(1900, 2013),
                    ],
                    [
                        'school' => 'School 3 ' . $i,
                        'major'  => 'Major 3 ' . $i,
                        'degree' => $degreeMap[$i % 7],
                        'class'  => 'Class 3 ' . $i,
                        'start'  => rand(1900, 2013),
                        'end'    => rand(1900, 2013),
                    ],

                ],

                'work' => [
                    [
                        'company'     => 'Company 1 ' . $i,
                        'department'  => 'Dept 1  ' . $i,
                        'title'       => 'Title 1 ' . $i,
                        'description' => 'Desc 1 ' . $i,
                        'start'       => rand(1900, 2013),
                        'end'         => rand(1900, 2013),
                    ],
                    [
                        'company'     => 'Company 2 ' . $i,
                        'department'  => 'Dept 2  ' . $i,
                        'title'       => 'Title 2 ' . $i,
                        'description' => 'Desc 2 ' . $i,
                        'start'       => rand(1900, 2013),
                        'end'         => rand(1900, 2013),
                    ],
                ],
            ];
            $uid  = Pi::api('user', 'user')->addUser($user);
            if (is_int($uid)) {
                $users[$uid] = $user;
            }
        }

        vd($users); */
    }

    public function getAction()
    {
        return false;

        /*
        $this->view()->setTemplate(false);

        $field = explode(',', _get('field'));
        $uid   = explode(',', _get('uid'));


        $conditions = [
            'active'    => 0,
            'birthdate' => '1901-2-2',
        ];
        $uids       = Pi::user()->getUids($conditions);
        vd($uids);
        //$conditions = array('active' => 0);
        $count = Pi::user()->getCount($conditions);
        vd($count);


        $field[] = 'birthdate';
        //$field = Pi::user()->getMeta();
        vd($field);
        $fields = Pi::user()->get($uid, $field, true);
        d($fields);
        */
    }

    public function activateAction()
    {
        return false;

        /*
        $this->view()->setTemplate(false);

        $uid = _get('uid');
        Pi::user()->activateUser($uid);

        $row = Pi::model('account', 'user')->find($uid);
        //vd($row);
        //vd($row->active);
        $fields = Pi::user()->get($uid, ['active', 'time_activated']);
        d($fields);
        */
    }

    // enableAction
    // disableAction
    // deleteAction
}