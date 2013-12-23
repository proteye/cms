<?= $breadcrumbs ?>
<div><?= $category['content'] ?></div>
<hr/>
<? if ($submenu): ?>
    <?= $submenu ?>
<? endif; ?>
<div class="pagination pagination-right"><?= $pagination ?></div>
<? if ($articles): ?>
<ol>
<? foreach ($articles as $article): ?>
    <li><a href="<?= URL::base().$url.'/'.$article['id'] ?>"><?= $article['title'] ?></a><br/><?= $article['content'] ?></li><br/>
<? endforeach; ?>
</ol>
<? endif; ?>
<div class="pagination pagination-right"><?= $pagination ?></div>