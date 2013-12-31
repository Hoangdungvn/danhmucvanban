<div class="documents view">
<h2><?php echo __('Document'); ?></h2>
	<dl>
		<dt><?php echo __('Docment Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['docment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docment Name'); ?></dt>
		<dd>
			<?php echo h($document['Document']['docment_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Desc'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docment Created'); ?></dt>
		<dd>
			<?php echo h($document['Document']['docment_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docment Modifier'); ?></dt>
		<dd>
			<?php echo h($document['Document']['docment_modifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Signdate'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_signdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Signer'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_signer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Status'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document File'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document View'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Doctype']['doctype_id'], array('controller' => 'doctypes', 'action' => 'view', $document['Doctype']['doctype_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organ'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Organ']['organ_id'], array('controller' => 'organs', 'action' => 'view', $document['Organ']['organ_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Cat']['cat_id'], array('controller' => 'cats', 'action' => 'view', $document['Cat']['cat_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['docment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['docment_id']), null, __('Are you sure you want to delete # %s?', $document['Document']['docment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctypes'), array('controller' => 'doctypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctype'), array('controller' => 'doctypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organs'), array('controller' => 'organs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organ'), array('controller' => 'organs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cats'), array('controller' => 'cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cat'), array('controller' => 'cats', 'action' => 'add')); ?> </li>
	</ul>
</div>
