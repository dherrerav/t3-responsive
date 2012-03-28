<?
defined('_JEXEC') or die;
$style = $this->getBlockStyle($block);

$topModuleLeft = $this->countModules('top-module-left');
$topModuleRight = $this->countModules('top-module-right');
$showModules = $topModuleLeft || $topModuleRight;
?>
<? if ($showModules) : ?>
<? if ($topModuleLeft) : ?>
	<?
	$modules = JModuleHelper::getModules('top-module-left');
	foreach ($modules as $module) :
	?>
	<div class="span3">
		<?= JModuleHelper::renderModule($module) ?>
	</div>
	<?
	endforeach;
	?>
<? endif ?>
<? if ($topModuleRight) : ?>
	<div class="span6">
		<jdoc:include type="modules" name="top-module-right" />
	</div>
<? endif ?>
<? endif ?>