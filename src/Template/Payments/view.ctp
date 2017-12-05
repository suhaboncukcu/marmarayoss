<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $payment->has('user') ? $this->Html->link($payment->user->name, ['controller' => 'Users', 'action' => 'view', $payment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request Id') ?></th>
            <td><?= $this->Number->format($payment->request_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($payment->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Requests') ?></h4>
        <?php if (!empty($payment->requests)): ?>
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
            <?php foreach ($payment->requests as $requests): ?>
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
