<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database -> dbConnection();

$kartu = new Kartu($db);

if(isset($_GET['id'])){
    $kartu -> id = $_GET['id'];

    if($kartu -> delete()){
        header("location: index.php");
    }else{
        echo "failed to remove card.";
    }
}

//showing data from index method
$data = $kartu -> index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="create.php">Add</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Discount</th>
                <th>Dues</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['diskon']; ?></td>
                    <td><?php echo $row['iuran']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        |
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('are u sure want to delete this card?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>