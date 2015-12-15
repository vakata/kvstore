# vakata\kvstore\Storage


## Methods

| Name | Description |
|------|-------------|
|[__construct](#vakata\kvstore\storage__construct)|Create an instance.|
|[get](#vakata\kvstore\storageget)|Get a key from the storage by using a string locator.|
|[set](#vakata\kvstore\storageset)|Set an element in the storage to a specified value.|
|[del](#vakata\kvstore\storagedel)|Delete an element from the storage.|

---



### vakata\kvstore\Storage::__construct
Create an instance.  


```php
public function __construct (  
    array   
)   
```

|  | Type | Description |
|-----|-----|-----|
| `` | `array` | &$data optional initial data for the storage |

---


### vakata\kvstore\Storage::get
Get a key from the storage by using a string locator.  


```php
public function get (  
    string $key,  
    mixed $default,  
    string $separator  
) : mixed    
```

|  | Type | Description |
|-----|-----|-----|
| `$key` | `string` | the element to get (can be a deeply nested element of the data array) |
| `$default` | `mixed` | the default value to return if the key is not found in the data |
| `$separator` | `string` | the string used to separate levels of the array, defaults to "." |
|  |  |  |
| `return` | `mixed` | the value of that element in the data array (or the default value) |

---


### vakata\kvstore\Storage::set
Set an element in the storage to a specified value.  


```php
public function set (  
    string $key,  
    mixed $value,  
    string $separator  
) : mixed    
```

|  | Type | Description |
|-----|-----|-----|
| `$key` | `string` | the element to set (can be a deeply nested element of the data array) |
| `$value` | `mixed` | the value to assign the selected element to |
| `$separator` | `string` | the string used to separate levels of the array, defaults to "." |
|  |  |  |
| `return` | `mixed` | the stored value |

---


### vakata\kvstore\Storage::del
Delete an element from the storage.  


```php
public function del (  
    string $key,  
    string $separator  
) : boolean    
```

|  | Type | Description |
|-----|-----|-----|
| `$key` | `string` | the element to delete (can be a deeply nested element of the data array) |
| `$separator` | `string` | the string used to separate levels of the array, defaults to "." |
|  |  |  |
| `return` | `boolean` | the status of the del operation - true if successful, false otherwise |

---

