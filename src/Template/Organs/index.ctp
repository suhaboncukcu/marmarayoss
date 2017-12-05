<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organ[]|\Cake\Collection\CollectionInterface $organs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Organ'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organs index large-9 medium-8 columns content">
    <h3><?= __('Organs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('volume') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dna_map') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expire_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organs as $organ): ?>
            <tr>
                <td><?= $this->Number->format($organ->id) ?></td>
                <td><?= h($organ->name) ?></td>
                <td><?= $this->Number->format($organ->volume) ?></td>
                <td><?= h($organ->dna_map) ?></td>
                <td><?= h($organ->image) ?></td>
                <td><?= $this->Number->format($organ->price) ?></td>
                <td><?= h($organ->expire_date) ?></td>
                <td><?= $organ->has('category') ? $this->Html->link($organ->category->name, ['controller' => 'Categories', 'action' => 'view', $organ->category->id]) : '' ?></td>
                <td><?= h($organ->created) ?></td>
                <td><?= h($organ->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $organ->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organ->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organ->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organ->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
