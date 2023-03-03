<h1>TOP</h1>


<table>
  <tr>
    <td>動画ID</td>
    <td>詳細ページリンク</td>
    <td>タイトル</td>
    <td>comment</td>
    <td>作成者</td>
  </tr>
  <?php foreach ($movies as $movie): ?>
    <tr>
        <td><?= $movie->id ?></td>
        <td><?= $this->Html->link("詳細へ", ['controller' => 'Movies', 'action' => 'view', $movie->slug]) ?></td>
        <td><?= $movie->name ?></td>
        <td><?= $movie->comment ?></td>
         <td>作成者：<?= $movie->user->name ?></td>
    </tr>
  <?php endforeach; ?>
</table>