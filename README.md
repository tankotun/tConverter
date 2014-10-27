<h1>tConverter</h1>
<p>A simple PHP unit converter.</p>
<p>Supported Units: Weight, Length</p>
<br/>
<h3>First, require and start class.</h3>
<pre><code>// Require
require "tConverter.class.php";

// Then, start the class.
$tConverter = new tConverter();</code>
</pre>

<h3>How to convert?</h3>
<pre><code>
$result = $tConverter->convert(
  'length',    // This is unit type. We chose length.
  array('2', 'km'),    // From... 2 kilometers
  'm'   // To meters...
);

echo 'Result' . $result;
</code></pre>
