<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>

<p><a href="/posts/add">Add a post</a><br>

<a href="/posts/users">Browse/follow users</a><br>

<a href="/posts">Posts by users you follow</a> 
</p>
