<?php

namespace vakata\kvstore;

class Storage implements StorageInterface
{
    protected $data;
    /**
     * Create an instance.
     * @param  array       &$data optional initial data for the storage
     */
    public function __construct(array &$data = [])
    {
        $this->data = &$data;
    }
    /**
     * Get a key from the storage by using a string locator.
     * @param  string $key       the element to get (can be a deeply nested element of the data array)
     * @param  mixed  $default   the default value to return if the key is not found in the data
     * @param  string $separator the string used to separate levels of the array, defaults to "."
     * @return mixed             the value of that element in the data array (or the default value)
     */
    public function get($key, $default = null, $separator = '.')
    {
        $key = array_filter(explode($separator, $key));
        $tmp = $this->data;
        foreach ($key as $k) {
            if (!isset($tmp[$k])) {
                return $default;
            }
            $tmp = $tmp[$k];
        }
        return $tmp;
    }
    /**
     * Set an element in the storage to a specified value.
     * @param  string $key       the element to set (can be a deeply nested element of the data array)
     * @param  mixed  $value     the value to assign the selected element to
     * @param  string $separator the string used to separate levels of the array, defaults to "."
     * @return mixed             the stored value
     */
    public function set($key, $value, $separator = '.')
    {
        $key = array_filter(explode($separator, $key));
        $tmp = &$this->data;
        foreach ($key as $k) {
            if (!isset($tmp[$k])) {
                $tmp[$k] = [];
            }
            $tmp = &$tmp[$k];
        }
        return $tmp = is_array($tmp) && is_array($value) && count($tmp) ? array_merge($tmp, $value) : $value;
    }
    /**
     * Delete an element from the storage.
     * @param  string $key       the element to delete (can be a deeply nested element of the data array)
     * @param  string $separator the string used to separate levels of the array, defaults to "."
     * @return mixed|null        the value that was just deleted or null
     */
    public function del($key, $separator = '.')
    {
        $key = explode($separator, $key);
        $lst = array_pop($key);
        $tmp = &$this->data;
        foreach ($key as $k) {
            if (!isset($tmp[$k])) {
                return null;
            }
            $tmp = &$tmp[$k];
        }
        if (!isset($tmp[$lst])) {
            return null;
        }
        $val = $tmp[$lst];
        unset($tmp[$lst]);
        return $val;
    }
}
