<h1>titre</h1>
<pre>
<?php

	foreach ($articles as $a) {
		echo "<h1>".$a['Post']['titre']."</h1>";
		echo "<p>".$a['Post']['contenu']."</p>";
		
	}
?>
</pre>