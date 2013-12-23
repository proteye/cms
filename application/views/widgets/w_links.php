<? if ($links): ?>
<h4>Ресурсы</h4>
<ul>
<? foreach ($links as $link): ?>
    <li><a target="_blank" href="<?= $link['url'] ?>"><?= $link['title'] ?></a></li>
<? endforeach; ?>
</ul>
<? else: ?>
<?= null ?>
<? endif; ?>
