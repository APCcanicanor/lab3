<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h2><?= esc($guest_item['name']) ?></h2>

    <p><?= esc($guest_item['comment']) ?></p>

    <?= anchor("~canicanor/lab3/ci4/public/guest/" . esc($guest_item['id'], 'url'), "View guest details") ?>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>
<br>
<br>
<p>You can register here! <?= anchor("~canicanor/lab3/ci4/public/guest/create", "Register here!") ?></p>
