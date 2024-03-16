<?php require "partials/heading.php"; ?>
    
    <h1>Usernames</h1>
    <ul>
        <?php foreach($users as $user):?>
            <li> <?= $user->name?> </li>
        <?php endforeach; ?>
    </ul>

    <h1>create user</h1>
    <form action="/users" method="POST">
        <input type="text" name="name" />
        <button type="submit">Create</button>
    </form>

<?php require "partials/footer.php"; ?>