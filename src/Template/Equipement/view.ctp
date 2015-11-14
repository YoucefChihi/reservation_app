<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipement'), ['action' => 'edit', $equipement->id_equipement]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipement'), ['action' => 'delete', $equipement->id_equipement], ['confirm' => __('Are you sure you want to delete # {0}?', $equipement->id_equipement)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipement'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotel'), ['controller' => 'Hotel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotel', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipement view large-9 medium-8 columns content">
    <h3><?= h($equipement->id_equipement) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Equipement') ?></th>
            <td><?= $this->Number->format($equipement->id_equipement) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nom Equipement') ?></h4>
        <?= $this->Text->autoParagraph(h($equipement->nom_equipement)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($equipement->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lien Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($equipement->lien_photo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotel') ?></h4>
        <?php if (!empty($equipement->hotel)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id Hotel') ?></th>
                <th><?= __('Nb Etoile') ?></th>
                <th><?= __('Nom Hotel') ?></th>
                <th><?= __('Adresse') ?></th>
                <th><?= __('Ville') ?></th>
                <th><?= __('Pays') ?></th>
                <th><?= __('Code Postal') ?></th>
                <th><?= __('Tel') ?></th>
                <th><?= __('Fax') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Description Cr') ?></th>
                <th><?= __('Description Lg') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipement->hotel as $hotel): ?>
            <tr>
                <td><?= h($hotel->id_hotel) ?></td>
                <td><?= h($hotel->nb_etoile) ?></td>
                <td><?= h($hotel->nom_hotel) ?></td>
                <td><?= h($hotel->adresse) ?></td>
                <td><?= h($hotel->ville) ?></td>
                <td><?= h($hotel->pays) ?></td>
                <td><?= h($hotel->code_postal) ?></td>
                <td><?= h($hotel->tel) ?></td>
                <td><?= h($hotel->fax) ?></td>
                <td><?= h($hotel->email) ?></td>
                <td><?= h($hotel->description_cr) ?></td>
                <td><?= h($hotel->description_lg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hotel', 'action' => 'view', $hotel->id_hotel]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hotel', 'action' => 'edit', $hotel->id_hotel]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotel', 'action' => 'delete', $hotel->id_hotel], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id_hotel)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
