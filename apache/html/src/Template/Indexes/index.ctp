<h1>TOP</h1>

<?php foreach ($movies as $movie): ?>
<tr>
    <td><?= $movie->id ?></td>
    <td><?= $this->Html->link($movie->name, ['action' => 'view', $movie->slug]) ?></td>
    <td><?= $movie->comment ?></td>
</tr>
<?php endforeach; ?>