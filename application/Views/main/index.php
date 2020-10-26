<p><h2>Главная страница</h2></p>
<h3>Таблица</h3>
<div>
    <table class="pozisn_cente" border="1">
    	<tr>
    		<th class="cell1">№ п/п</th>
    		<th class="cell23">Логин</th>
    		<th class="cell23">Пароль</th>
    	</tr>
    	<?php foreach ($news as $val): ?>
    	<tr>
    		<td><?php echo $val['id']; ?></td>
    		<td><?php echo $val['login']; ?></td>
    		<td><?php echo $val['password']; ?></td>
    	</tr>
    	<?php endforeach; ?>
    	
    </table>

