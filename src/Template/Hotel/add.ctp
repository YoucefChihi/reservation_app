<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="nav nav-tabs">

        <li class="dropdown active">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hotels
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('View'), ['controller' => 'Hotel', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Add'), ['controller' => 'Hotel', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Edit'), ['controller' => 'Hotel', 'action' => 'edit']) ?></li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Equipements
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('View'), ['controller' => 'Equipement', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Add'), ['controller' => 'Equipement', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Edit'), ['controller' => 'Equipement', 'action' => 'edit']) ?></li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Images
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('View'), ['controller' => 'Image', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Add'), ['controller' => 'Image', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Edit'), ['controller' => 'Image', 'action' => 'edit']) ?></li>
            </ul>
        </li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adults pricing
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('View'), ['controller' => 'PrixAdulte', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Add'), ['controller' => 'PrixAdulte', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Edit'), ['controller' => 'PrixAdulte', 'action' => 'edit']) ?></li>
            </ul>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Children pricing
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><?= $this->Html->link(__('View'), ['controller' => 'PrixEnfant', 'action' => 'index']) ?></li>
              <li><?= $this->Html->link(__('Add'), ['controller' => 'PrixEnfant', 'action' => 'add']) ?></li>
              <li><?= $this->Html->link(__('Edit'), ['controller' => 'PrixEnfant', 'action' => 'edit']) ?></li>
            </ul>
        </li>
    </ul>
</nav>
 
<div class="hotel content col-lg-6">
    <?= $this->Form->create($hotel) ?>
    <fieldset>
        <legend><?= __('Add Hotel') ?></legend>
        <?php
            echo $this->Form->input('nb_etoile', ['class' => 'form-control']);
            echo $this->Form->input('nom_hotel', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('adresse', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('ville', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('pays', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('code_postal', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('tel', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('fax', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email']);
            echo $this->Form->input('description_cr', ['class' => 'form-control', 'type' => 'text']);
            echo $this->Form->input('description_lg', ['class' => 'form-control']);
            echo $this->Form->input('equipement._ids', ['class' => 'form-control', 'options' => $equipement]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-outline']) ?>
    <?= $this->Form->end() ?>
</div>
