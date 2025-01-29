```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number; 
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; //A string in the array
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //This will result in a Warning
```