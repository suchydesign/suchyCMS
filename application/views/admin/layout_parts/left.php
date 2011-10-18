<div id="left">
	<ul>
		<? if(!empty($submenu)) foreach($submenu as $key => $value): ?>
		<li><?=anchor($key, $value); ?></li>
		<? endforeach; ?>
	</ul>
</div>
<div id="content">
