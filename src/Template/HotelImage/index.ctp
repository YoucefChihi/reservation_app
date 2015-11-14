<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotelImage index large-9 medium-8 columns content">
    <h3><?= __('Hotel Image') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_image') ?></th>
                <th><?= $this->Paginator->sort('id_hotel') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotelImage as $hotelImage): ?>
            <tr>
                <td><?= $this->Number->format($hotelImage->id_image) ?></td>
                <td><?= $this->Number->format($hotelImage->id_hotel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotelImage->id_image]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotelImage->id_image]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotelImage->id_image], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImage->id_image)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
