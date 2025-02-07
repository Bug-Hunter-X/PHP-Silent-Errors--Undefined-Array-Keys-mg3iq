The best way to prevent this type of error is to always check if a key exists before attempting to access it.  PHP provides several ways to do this:

1. **isset() function:** This function checks whether a variable is set and is not NULL.

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (isset($myArray["c"])) {
  $sum = $myArray["c"] + 5;
  echo $sum;
} else {
  echo "Key 'c' does not exist";
}
?>
```

2. **Null coalescing operator (??):**  This operator provides a default value if the variable is NULL.

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

$value = $myArray["c"] ?? 0; // Use 0 if the key doesn't exist
$sum = $value + 5;
echo $sum; // Outputs 5
?>
```

3. **array_key_exists() function:** This is the most explicit way to check whether a key exists in an array

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (array_key_exists("c", $myArray)){
  $sum = $myArray["c"] + 5;
  echo $sum;
} else {
  echo "Key 'c' does not exist";
}
?>
```
By using these techniques, you can write more robust and less error-prone PHP code.