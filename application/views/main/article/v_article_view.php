<?= $breadcrumbs ?>
<hr/>
<h4><?= $article['title'] ?></h4><br/>
<?= $article['content'] ?>
<a href="<?= URL::site($article['category_full_url']) ?>" class="pull-right">Вернуться к списку</a>