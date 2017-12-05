<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organ $organ
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organ->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organ->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Organs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organs form large-9 medium-8 columns content">
    <?= $this->Form->create($organ) ?>
    <fieldset>
        <legend><?= __('Edit Organ') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('volume');
            echo $this->Form->control('dna_map');
            echo $this->Form->control('image');
            echo $this->Form->control('price');
            echo $this->Form->control('expire_date');
            echo $this->Form->control('category_id', ['options' => $categories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
