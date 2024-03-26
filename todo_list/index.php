<?php
$todoFile = 'todo.txt';

// Menambahkan item baru
if(isset($_POST['newItem']) && !empty(trim($_POST['newItem']))) {
    file_put_contents($todoFile, trim($_POST['newItem'])."\n", FILE_APPEND);
    header('Location: index.php');
    exit;
}

// Menghapus item
if(isset($_GET['deleteItem'])) {
    $items = file($todoFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if(isset($items[$_GET['deleteItem']])) {
        unset($items[$_GET['deleteItem']]);
        file_put_contents($todoFile, implode("\n", $items));
        header('Location: index.php');
        exit;
    }
}

// Membaca semua item to-do
$items = file($todoFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List dengan PHP</title>
</head>
<body>

<h2>To-Do List</h2>

<form action="" method="POST">
    <input type="text" name="newItem" placeholder="Tambahkan item baru" required>
    <button type="submit">Tambah</button>
</form>

<ul>
    <?php foreach($items as $index => $item): ?>
        <li><?php echo htmlspecialchars($item); ?> - <a href="?deleteItem=<?php echo $index; ?>">Hapus</a></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
