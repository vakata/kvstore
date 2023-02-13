<?php

namespace vakata\kvstore;

interface StorageInterface
{
    public function get(string $key, mixed $default = null, string $separator = '.'): mixed;
    public function set(string $key, mixed $value, string $separator = '.'): mixed;
    public function del(string $key, string $separator = '.'): mixed;
}
