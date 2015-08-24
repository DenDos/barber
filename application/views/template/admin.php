<?php foreach($clients as $client): ?>
 
    <div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;">
        <strong><?php echo $client->id; ?></strong><br />
        <i>Дата: <?php echo $client->date; ?></i>
        <i>Время: <?php echo $client->time; ?></i>
       <form action="" method="post">
          <input type="text" name="id"  id="" style='display:none;'  value ="<?php echo $client->id;?>" placeholder="<?php $client->id;?>" >
           <button class="btn waves-effect waves-light" type="submit" name="delete">Удалить запись</button>
       </form>
    </div>
 
<?php endforeach; ?>