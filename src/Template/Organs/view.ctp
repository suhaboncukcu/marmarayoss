<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organ $organ
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Organ'), ['action' => 'edit', $organ->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organ'), ['action' => 'delete', $organ->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organ->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Organs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Organ'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organs view large-9 medium-8 columns content">
    <h3><?= h($organ->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($organ->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dna Map') ?></th>
            <td><?= h($organ->dna_map) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($organ->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $organ->has('category') ? $this->Html->link($organ->category->name, ['controller' => 'Categories', 'action' => 'view', $organ->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organ->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Volume') ?></th>
            <td><?= $this->Number->format($organ->volume) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($organ->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expire Date') ?></th>
            <td><?= h($organ->expire_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($organ->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($organ->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Requests') ?></h4>
        <?php if (!empty($organ->requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Organ Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($organ->requests as $requests): ?>
            <tr>
                <td><?= h($requests->id) ?></td>
                <td><?= h($requests->amount) ?></td>
                <td><?= h($requests->user_id) ?></td>
                <td><?= h($requests->organ_id) ?></td>
                <td><?= h($requests->status_id) ?></td>
                <td><?= h($requests->payment_id) ?></td>
                <td><?= h($requests->created) ?></td>
                <td><?= h($requests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requests', 'action' => 'view', $requests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requests', 'action' => 'edit', $requests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requests', 'action' => 'delete', $requests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
