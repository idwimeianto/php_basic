<?php
echo "echo does not require parentheses.";
echo "<br>";

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n";
echo "<br>";
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";
echo "<br>";

// No newline or space is added; the below outputs "helloworld" all on one line
echo "hello";
echo "world";

// Same as above
echo "hello", "world";
echo "<br>";

echo "This string spans
multiple lines. The newlines will be
output as well";
echo "<br>";

echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";
echo "<br>";

// The argument can be any expression which produces a string
$foo = "example";
echo "foo is $foo"; // foo is example
echo "<br>";

$fruits = ["lemon", "orange", "banana"];
echo implode(" and ", $fruits); // lemon and orange and banana
echo "<br>";

// Non-string expressions are coerced to string, even if declare(strict_types=1) is used
echo 6 * 7; // 42
echo "<br>";

$some_var = 7 < 8;

// Because echo does not behave as an expression, the following code is invalid.
// ($some_var) ? echo 'true' : echo 'false';

// However, the following examples will work:
($some_var) ? print 'true' : print 'false'; // print is also a construct, but
                                            // it is a valid expression, returning 1,
                                            // so it may be used in this context.
echo "<br>";
echo $some_var ? 'true': 'false'; // evaluating the expression first and passing it to echo
?>