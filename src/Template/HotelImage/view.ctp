<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel Image'), ['action' => 'edit', $hotelImage->id_image]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel Image'), ['action' => 'delete', $hotelImage->id_image], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImage->id_image)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotel Image'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel Image'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotelImage view large-9 medium-8 columns content">
    <h3><?= h($hotelImage->id_image) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Image') ?></th>
            <td><?= $this->Number->format($hotelImage->id_image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($hotelImage->id_hotel) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nom Image') ?></h4>
        <?= $this->Text->autoParagraph(h($hotelImage->nom_image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lien Image') ?></h4>
        <?= $this->Text->autoParagraph(h($hotelImage->lien_image)); ?>
    </div>
</div>
