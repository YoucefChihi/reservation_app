<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prixEnfant->id_prix_enfant],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prixEnfant->id_prix_enfant)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prix Enfant'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prixEnfant form large-9 medium-8 columns content">
    <?= $this->Form->create($prixEnfant) ?>
    <fieldset>
        <legend><?= __('Edit Prix Enfant') ?></legend>
        <?php
            echo $this->Form->input('id_hotel');
            echo $this->Form->input('reduction');
            echo $this->Form->input('du', ['empty' => true]);
            echo $this->Form->input('au', ['empty' => true]);
            echo $this->Form->input('age_du');
            echo $this->Form->input('age_au');
            echo $this->Form->input('index');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
