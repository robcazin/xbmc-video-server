<?php

/* @var $episode Episode */

?>
<p>
	<?php echo $episode->getEpisodeString().$episode->getWatchedIcon(); ?>
</p>

<?php 

// Omit URL credentials if browser is Internet Explorer
$this->widget('RetrieveTVShowWidget', array(
	'details'=>$episode,
));
