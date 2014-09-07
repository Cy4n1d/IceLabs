<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ice Labs Corp Tool v0.1</title>
    <link href="<?= css_url() ?>bootstrap.min.css" media="screen" rel="stylesheet">
    <link href="<?= css_url() ?>style.css" media="screen" rel="stylesheet">
    <script src="<?= js_url() ?>jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?= js_url() ?>bootstrap.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="site-wrapper">
    <div id="site-header"><img class="img-responsive" src="<?= image_url() ?>logo.png" border="0" alt="IceLabs Logo"></div>
    <div id="loginbox">
            <label for="loginUsername">Username:</label>
            <input type="text" class="form-control" id="loginUsername" placeholder="Username">
            <label for="loginPassword">Password:</label>
            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
</div>
</body>
</html>