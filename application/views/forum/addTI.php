<?php 
//$messg = 'coucou';
$messg = $leTI[0]->ti_contents;
?>

<a href='<?php echo base_url(); ?>index.php/forum/forum/forums'>retour</a> - 
Forum <?php //echo $lesThreads[0]->f_name; ?>
&nbsp;
Vue groupée par sujet
-
chrono - 
<a href='<?php echo base_url(); ?>index.php/forum/forum/forumQuick/<?php //echo $lesThreads[0]->fid; ?> '>quick</a>
 - 
<a href='<?php echo base_url(); ?>index.php/forum/forum/forumSubject/<?php //echo $lesThreads[0]->fid; ?> '>sujet</a> 
 - 
<a href='<?php echo base_url(); ?>index.php/forum/forum/new'>new</a> 
<br/>
<hr/>
	<fieldset>
	<legend>New Forum</legend>

	<?php
	echo form_open('forum/forum/new');
	$data = array(
		'name'        => 'messg',
		'id'          => 'messg',
		'value'       => $messg,
		'cols'   	  => '57',
		'rows'        => '10',
		'style'       => 'width:50%'
            );
	echo form_textarea($data);
	echo form_submit('submit', 'Envoyer');
	?>

	</fieldset>
</div>