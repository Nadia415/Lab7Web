<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Artikel Admin</title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>

        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert">
                <?= session()->getFlashdata('flash_msg') ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <label>Email</label>
            <input type="email" name="email" value="<?= set_value('email') ?>" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
