In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this scenario:

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

//Attempt to access a non-existent key
echo $myArray["c"]; // This will output nothing, not an error

// However, attempting to use this value in a calculation
//can lead to unexpected results 
$sum = $myArray["c"] + 5;
echo $sum; // Outputs 5, not an error, but unexpected
?>
```

PHP's loose typing allows this to run without a warning, but it leads to a silent error where a value is unexpectedly treated as 0.

Another example:
```php
<?PHP
  $arr = [];
  $arr[0] = 10;
  $arr[1] = 20;

  echo $arr[2] ?? 'Key not found'; // Outputs 'Key not found'
  //However, the following will give a warning:
  echo $arr[2] + 5; //Warning: Undefined array key 2

?>
```