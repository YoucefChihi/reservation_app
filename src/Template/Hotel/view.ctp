<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel'), ['action' => 'edit', $hotel->id_hotel]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel'), ['action' => 'delete', $hotel->id_hotel], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id_hotel)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipement'), ['controller' => 'Equipement', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipement'), ['controller' => 'Equipement', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotel view large-9 medium-8 columns content">
    <h3><?= h($hotel->id_hotel) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($hotel->id_hotel) ?></td>
        </tr>
        <tr>
            <th><?= __('Nb Etoile') ?></th>
            <td><?= $this->Number->format($hotel->nb_etoile) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nom Hotel') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->nom_hotel)); ?>
    </div>
    <div class="row">
        <h4><?= __('Adresse') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->adresse)); ?>
    </div>
    <div class="row">
        <h4><?= __('Ville') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->ville)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pays') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->pays)); ?>
    </div>
    <div class="row">
        <h4><?= __('Code Postal') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->code_postal)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->tel)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->fax)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description Cr') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->description_cr)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description Lg') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->description_lg)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Equipement') ?></h4>
        <?php if (!empty($hotel->equipement)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Equipement') ?></th>
                <th><?= __('Nom Equipement') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Lien Photo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hotel->equipement as $equipement): ?>
            <tr>
                <td><?= h($equipement->id_equipement) ?></td>
                <td><?= h($equipement->nom_equipement) ?></td>
                <td><?= h($equipement->description) ?></td>
                <td><?= h($equipement->lien_photo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipement', 'action' => 'view', $equipement->id_equipement]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipement', 'action' => 'edit', $equipement->id_equipement]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipement', 'action' => 'delete', $equipement->id_equipement], ['confirm' => __('Are you sure you want to delete # {0}?', $equipement->id_equipement)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
