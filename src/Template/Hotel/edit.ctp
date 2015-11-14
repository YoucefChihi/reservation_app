<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hotel->id_hotel],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id_hotel)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hotel'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipement'), ['controller' => 'Equipement', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipement'), ['controller' => 'Equipement', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotel form large-9 medium-8 columns content">
    <?= $this->Form->create($hotel) ?>
    <fieldset>
        <legend><?= __('Edit Hotel') ?></legend>
        <?php
            echo $this->Form->input('nb_etoile');
            echo $this->Form->input('nom_hotel');
            echo $this->Form->input('adresse');
            echo $this->Form->input('ville');
            echo $this->Form->input('pays');
            echo $this->Form->input('code_postal');
            echo $this->Form->input('tel');
            echo $this->Form->input('fax');
            echo $this->Form->input('email');
            echo $this->Form->input('description_cr');
            echo $this->Form->input('description_lg');
            echo $this->Form->input('equipement._ids', ['options' => $equipement]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
