<h1>This is the profile of <?=$user->first_name?></h1>

<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name'.'last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>
    <p>post_id: <?=$post['post_id']?></p>

    <p><a href='/posts/p_delete/<?=$post['post_id']?>'>
    	Delete</a>
    </p>

</article>

<?php endforeach; ?>