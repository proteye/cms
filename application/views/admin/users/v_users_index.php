<table class="table table-striped">
    <thead>
        <tr>
            <th>#id</th>
            <th>E-mail</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>Роли</th>
            <th></th>
        </tr>
    </thead>
<? foreach ($users as $user): ?>
<tr>
    <td><?= $user->id ?></td>
    <td><?= $user->email ?></td>
    <td><?= $user->username ?></td>
    <td><?= $user->first_name ?></td>
    <td>
        <? foreach($user->roles->find_all() as $role): ?>
            <?= $role->description ?><br/>
        <? endforeach; ?>
    </td>
    <td>
        <?= HTML::anchor('admin/users/edit/'. $user->id, '<i class="icon-pencil"></i>') ?>
        <?= HTML::anchor('admin/users/delete/'. $user->id, '<i class="icon-remove"></i>', 
                array('onclick' => 'return confirm(\'Вы действительно хотите удалить пользователя?\') ? true : false;')) ?>
    </td>
</tr>
<? endforeach; ?>
</table>
<a href="<?= URL::site('admin/users/add') ?>" class="btn btn-primary">Добавить</a>