<? if ($auth->logged_in('admin')): ?>
    <?= HTML::anchor('admin', 'Панель администратора') ?><br/>
<? endif; ?>
<? foreach ($ind_content as $cont): ?>
<div>
    <?// $cont->title ?>
    <?= $cont->content ?>
</div>
<? endforeach; ?>
<hr/>
<? foreach ($articles as $article): ?>
<div>
    <h4>
        <small><?= $article->category->title ?></small><br/>
        <?= $article->title ?>
    </h4>
    <?= $article->content ?>
</div>
<hr/>
<? endforeach; ?>
