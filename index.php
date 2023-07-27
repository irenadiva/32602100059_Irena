<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Layouting</title>
    <link rel="stylesheet" href="assets/css/index.css">

</head>

<body>
    <header>
        <nav class="navigation">
            <a href="/profile"><button>Profile</button></a>
            <a href="/about"><button>About</button></a>
        </nav>
    </header>
    <main>
        <div class="card">
            <?php $this->renderSection('content') ?>
        </div>
    </main>
</body>

</html>