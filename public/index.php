<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body { font-family: sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; background: #f0f0f0; }
        .card { background: white; padding: 2rem 3rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.1); text-align: center; }
        h1 { margin: 0 0 .5rem; }
        p { color: #666; margin: 0; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hello, World!</h1>
        <p>Served by PHP <?= PHP_VERSION ?> on <?= php_uname('n') ?></p>
    </div>
</body>
</html>
