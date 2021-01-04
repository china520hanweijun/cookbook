<?php

/*
 * 自定义函数
 */

function array_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    /*
     * [ [1,'q',0], [2,'a',0], [3,'d',1] ]  =>  [ [1, q, 0, [3,'d',1]],  [2,a,0] ]
     */
    // 创建Tree
    $tree = array();
    if (is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $list[$key][$child] = [];
            $refer[$data[$pk]] =& $list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] =& $list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent =& $refer[$parentId];
                    $parent[$child][] =& $list[$key];
                }
            }
        }
    }
    return $tree;
}
