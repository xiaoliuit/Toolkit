<?php
namespace GameTookit;

class ArrayToolkit
{
    /**
     * �������л�ȡָ������ֵ
     * @param array $array
     * @param $keys
     * @return array
     */
    public static function pluck(array $array, $keys)
    {
        $result = [];
        $keys = (array)($keys);

        foreach ($keys as $key){
            if (isset($array[$key])){
                $result[$key] = $array[$key];
            }
        }

        return $result;
    }

    /**
     * ���������Ƴ�ָ����
     * @param array $array ��������
     * @param $keys
     * @return array
     */
    public static function except(array $array, $keys)
    {
        $keys = (array) $keys;

        foreach ($keys as $key){
            unset($array[$key]);
        }

        return $array;
    }

    public static function flatten(array $array)
    {
        $result = [];
        array_walk_recursive($array, function ($val) use (&$result){
            $result[] = $val;
        });

        return $result;
    }

    public static function groupBy(array $array, string $key)
    {
        $result = [];
        foreach ($array as $item){
            if (isset($item[$key])){
                $result[$item[$key]][] = $item;
            }
        }

        return $result;
    }
}