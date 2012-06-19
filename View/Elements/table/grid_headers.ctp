
<tr class="<?php echo $options['class_header'] ?>">
	<?php foreach($headers as $header): ?>
    <? $width = (isset( $header['options']['width'] ))?  'width="'.$header['options']['width'].'"' : "" ;?>
    <? $header['valuePath'] = str_replace('/','.',substr($header['valuePath'],1,-1)); ?>
	<th <? echo $width ?> ><?php echo $header['title'] == 'Actions' ? 'عملیات' :  $this->Paginator->sort($header['valuePath'],$header['title']) ?></th>
	<?php endforeach; ?>
</tr>