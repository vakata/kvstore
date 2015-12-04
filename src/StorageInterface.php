<?php

namespace vakata\kvstore;

interface StorageInterface
{
    public function get($key, $default = null, $separator = '.');
    public function set($key, $value, $separator = '.');
    public function del($key, $separator = '.');
}
