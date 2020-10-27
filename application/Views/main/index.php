<p><h2>Главная страница</h2></p>
<h3>Таблица</h3>
<div>
    <table class="pozisn_cente" border="1">
    	<tr>
    		<th class="c">№ п/п</th>
    		<th class="c">Имя</th>
    		<th class="c">Фамилия</th>
            <th class="c">Почта</th>
            <th class="c">Логин</th>
            <th class="c">Пароль</th>
            <th class="c">Доступ</th>
            <th class="c">Заполнено</th>
            <th class="c">Редактированно</th>
    	</tr>
    	<?php foreach ($news as $val): ?>
    	<tr>
    		<td><?php echo $val['id']; ?></td>
    		<td><?php echo $val['firstname']; ?></td>
    		<td><?php echo $val['secondname']; ?></td>
            <td><?php echo $val['email']; ?></td>
            <td><?php echo $val['login']; ?></td>
            <td><?php echo $val['password']; ?></td>
            <td><?php echo $val['userrol']; ?></td>
            <td><?php echo $val['datacreate']; ?></td>
            <td><?php echo $val['dataupdate']; ?></td>
    	</tr>
    	<?php endforeach; ?>
    	
    </table>