<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prixAdulte->id_prix_adulte],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prixAdulte->id_prix_adulte)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prix Adulte'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prixAdulte form large-9 medium-8 columns content">
    <?= $this->Form->create($prixAdulte) ?>
    <fieldset>
        <legend><?= __('Edit Prix Adulte') ?></legend>
        <?php
            echo $this->Form->input('id_hotel');
            echo $this->Form->input('prix');
            echo $this->Form->input('du', ['empty' => true]);
            echo $this->Form->input('au', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
