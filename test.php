<?php $title='Colors testsite'; include(__DIR__ . '/header.php'); ?>
 
<div id='flash'>
<h1>Demonstration</h1>
<p id='text'>Hello and welcome. This site is intented to display a jQuery plugin I have made. Below you can find instructions on installing.</p>
<p>This plugin uses Javascript setInterval to randomize hex colors and apply the color with a nice CSS3 transform animation. </p>

	<?php include "colors.php"; ?>

<h2>Installation</h2>
<p>github osv</p>
<p>See example below, as used on this page.</p>
<h3>HTML</h3>
<p>
	<div class='code-container'><code>
	<?php 
		$fh = fopen("colors.php", 'r');
    	$pageText = fread($fh, 25000);
    	echo nl2br(htmlentities($pageText));
    	fclose($fh);
	?>
</code>
</div>
</p>
<h3>CSS</h3>
<p>
	<div class='code-container'>
		<code>
			.change-colors {<br />
			  height: 50px;<br />
			  width: 50px;<br />
			  margin: 8px;<br />
			  border: 1px solid #aaa;<br />
			  border-radius: 5px;<br />
			  transition: background-color ease-in-out 0.5s;<br />
			  float: left;<br />
			}<br />
		</code>
	</div>
</p>
<h3>jQuery</h3>
<p>You can then apply this code in order to start it up when you click on one of the boxes. </p>
<p>
	<div class='code-container'>
		<code>
			  $('.change-colors').click(function(){<br />
			    $(this).changeColor();<br />
			  });<br />
		</code>
	</div>
</p>
</div>
 
<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>