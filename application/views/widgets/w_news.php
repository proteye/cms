<? if ($news): ?>
<h4>Новости</h4>
<dl>
<? foreach ($news as $item): ?>
    <dt><?= $item['title'] ?><br/><small><?= $item['create_date'] ?></small></dt>
    <dd><?= $item['content'] ?></dd>
<? endforeach; ?>
</dl>
<? else: ?>
<?= null ?>
<? endif; ?>
