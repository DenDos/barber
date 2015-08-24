<h3>Это главная страница</h3>
<br />
 
<?php foreach($articles as $article): ?>
 
    <div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;">
        <strong><?php echo $article['id']; ?></strong><br />
        <i>Автор: <?php echo $article['text']; ?></i>
    </div>
 
<?php endforeach; ?>