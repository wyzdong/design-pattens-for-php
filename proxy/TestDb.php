<?php
/**
 * Created by PhpStorm.
 * User: sundongdong
 * Date: 2018/1/2
 * Time: 11:05
 */
class TestDb {
    public static $depts = [
        [
            'id' => '01',
            'name' => '总公司',
        ],
        [
            'id' => '0101',
            'name' => '一分公司',
        ],
        [
            'id' => '0102',
            'name' => '二分公司',
        ],
        [
            'id' => '010101',
            'name' => '开发部',
        ],
        [
            'id' => '010102',
            'name' => '测试部',
        ],
        [
            'id' => '010201',
            'name' => '开发部',
        ],
        [
            'id' => '010202',
            'name' => '客服部',
        ],
    ];

    public static $users = [
        [
            'userId' => 'user0001',
            'name' => '张三1',
            'deptId' => '010101',
            'sex' => '男',
        ],
        [
            'userId' => 'user0002',
            'name' => '张三2',
            'deptId' => '010101',
            'sex' => '男',
        ],
        [
            'userId' => 'user0003',
            'name' => '张三3',
            'deptId' => '010102',
            'sex' => '男',
        ],
        [
            'userId' => 'user0004',
            'name' => '张三4',
            'deptId' => '010201',
            'sex' => '男',
        ],
        [
            'userId' => 'user0005',
            'name' => '张三5',
            'deptId' => '010201',
            'sex' => '男',
        ],
        [
            'userId' => 'user0006',
            'name' => '张三6',
            'deptId' => '010202',
            'sex' => '男',
        ],
    ];
}