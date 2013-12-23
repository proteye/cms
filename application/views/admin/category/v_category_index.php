<?
// Выводим дерево наших разделов сайта.
HTML::print_map($categories);
?>
<a href="<?= URL::site('admin/categories/add') ?>" class="btn btn-primary">Добавить</a>