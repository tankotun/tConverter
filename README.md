<h1>tConverter</h1>
<p>A simple PHP unit converter.</p>
<p>Developed by @tankotun</p>
<p><strong>Supported Units:</strong> Weight, Length.<br/>
<em>But if you want to add another units, you can it by $units array in tConverter class.</em></p>
<br/>
<h3>First, require and start class.</h3>
<pre><code>// Require
require "tConverter.class.php";

// Then, start the class.
$tConverter = new tConverter();</code>
</pre>

<h3>How to convert?</h3>
<div class="highlight highlight-js">
<pre><code>
$result = $tConverter->convert(
  'length',    // This is unit type. We chose length. (or you can choose 'weight')
  array('2', 'km'),    // From... 2 kilometers
  'm'   // To meters...
);

echo 'Result: ' . $result;
</code></pre></div>
Print:
<pre>Result: 2000</pre>

<h3>Use with Exception</h3>
<pre><code>
try {

  $result = $tConverter->convert(
    'length',    // This is unit type. We chose length.
    array('2', 'km'),    // From... 2 kilometers
    'm'   // To meters...
  );
  
  echo 'Result: ' . $result;

} catch (tConverterException $e) {

  echo $e->getMessage();
  
}
</code></pre>
<i>Exception catches posted empty units and invalid numerics.</i>

<h3>Units List</h3>

Length        | Weight
------------- | -------------
pikometre     |miligram
nanometre     |gram
milimetre     |kilogram
santimetre    |ton
desimetre     |
metre         |
dekametre     |
hektometre    |
kilometre     |
gigametre     |
terametre     |


<br/>
God bless open source programmers.
