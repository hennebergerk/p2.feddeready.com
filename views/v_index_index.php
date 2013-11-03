

<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
   
        <?php if($user): ?>

			<p>
			<a href="/posts/add">Add a post</a><br>
			<a href="/posts/users">Browse/follow users</a><br>
			<a href="/posts">Posts by users you follow</a> 
			</p>

        <?php else: ?>

        	<p>
            <a href='/users/signup'>Sign up</a>
            <a href='/users/login'>Log in</a>
            </p>

        <?php endif; ?>