```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //Check if number is numeric
      $sum += $number; 
    } else {
      //Handle non-numeric values appropriately.  Log, throw an exception, or use 0.
      trigger_error('Non-numeric value encountered in array.');      
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```