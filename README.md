# PHP Notice: A non well formed numeric value encountered
This example demonstrates a common PHP error related to type juggling and the `+=` operator. When a string value is encountered in the array passed to `calculateSum`, PHP attempts to convert it to a number. If the string is not a valid number (like '4a'), it issues a notice, and the conversion will result in 0. This notice can be avoided by strict type checking or better input validation.

## How to reproduce
1.  Save the code in `bug.php`.
2.  Run the script from the command line: `php bug.php`
3. Observe the warning message and the unexpected sum.