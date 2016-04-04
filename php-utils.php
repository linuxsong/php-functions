<?php
namespace Utils;

class Email 
{
    /**
     * Check if email is valid.
     * 
     * @param string $email
     * @return bool
     */
    public static function  checkEmail($email)
    {
        if (!preg_match("/^( [a-zA-Z0-9] )+( [a-zA-Z0-9._-] )*@( [a-zA-Z0-9_-] )+( [a-zA-Z0-9._-] +)+$/" , $email)) {
            return false;
        }
        return true;
    }
}

class Arr
{
    /**
     * Returns the first element in an array.
     *
     * @param  array $array
     * @return mixed
     */
    public static function first(array $array)
    {
        return reset($array);
    }
    /**
     * Returns the last element in an array.
     *
     * @param  array $array
     * @return mixed
     */
    public static function last(array $array)
    {
        return end($array);
    }
    /**
     * Returns the first key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    public static function firstKey(array $array)
    {
        reset($array);
        return key($array);
    }
    /**
     * Returns the last key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    public static function lastKey(array $array)
    {
        end($array);
        return key($array);
    }
}

class Str
{
    /**
     * Returns a substring that contains the n leftmost characters of the string.
     * The entire string is returned if n is greater than or equal to strlen($str), or less than zero.
     *
     * @param string $str
     * @param int $n
     * @return string
     */
    public static function left($str, $n)
    {
        if ($n < 0) return $str;
        return substr($str, 0, $n);   
    }
    
    /**
     * Returns a substring that contains the n rightmost characters of the string.
     * The entire string is returned if n is greater than or equal to strlen($str), or less than zero.
     * 
     * @param string $str
     * @param int $n
     * @return string
     */

    public static function right($str, $n)
    {
        if ($n < 0) {
            return $str;
        } elseif ($n === 0) {
            return '';
        }
        return substr($str, -$n);   
    }
}
