<?php
include 'nav.php';
include_once("connection.php");

// Jumlah data per halaman
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// Hitung total data
$queryTotal = $conn->query('SELECT COUNT(*) AS total FROM user');
$total = $queryTotal->fetch(PDO::FETCH_ASSOC)['total'];
$pages = ceil($total / $limit);

// Ambil data sesuai halaman
$query = $conn->prepare('SELECT * FROM user LIMIT :start, :limit');
$query->bindParam(':start', $start, PDO::PARAM_INT);
$query->bindParam(':limit', $limit, PDO::PARAM_INT);
$query->execute();
?>

<head>
<title>SoloAbadi.com</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .registration_form {
            width: 100%;
            max-width: 800px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin-top: 6px;
        }
        th, td {
            padding: 12px;
            border: 1px solid white;
        }
        th {
            background-color: #17a2b8;
            color: white;
            font-family: Cambria Math;
        }
        td {
            background-color: rgba(100,100,100,.9);
            color: white;
            font-family: Cambria Math;
        }
        .action-btn {
            border: none;
            padding: 5px;
            margin-bottom: 5px;
            border-radius: 5px;
            background-color: #cc0052;
            font-family: Cambria Math;
            color: white;
            cursor: pointer;
        }
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a {
            color: white;
            padding: 10px 15px;
            background-color: #17a2b8;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination a.active {
            background-color: #cc0052;
        }
    </style>
    <form action="form.php">
        <button style="border-style: none; padding-top: 10px; margin-left: 10px; margin-top: 20px; border-radius: 6px; background-color : #cc0052; font-family : Cambria Math; color: white;">
            <h5><b> + Tambahkan Data User</b></h5>
        </button> 
        <h2 style="text-align: center; font-family: Cambria Math; color: white;"><b>Data User Solo Abadi</b><hr></h2>
    </form>
</head>

<body style="background-image: url('src/a.jpg');">
    <div class="container">
        <table border="1" cellspacing="0" cellpadding="12" style="border: 1px white;">
            <thead>
                <tr style="border-style: hidden; text-align: center; color: white; font-family: Cambria Math;">
                    <th style="background-color: #17a2b8; font-weight: bold; border-top-left-radius: 15px;">NO</th>
                    <th style="background-color: #17a2b8">USERNAME</th>
                    <th style="background-color: #17a2b8">FIRST NAME</th>
                    <th style="background-color: #17a2b8">LAST NAME</th>
                    <th style="background-color: #17a2b8">GENDER</th>
                    <th style="background-color: #17a2b8; border-top-right-radius: 15px">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($query->rowCount() > 0): ?>
                    <?php 
                    $no = $start + 1; 
                    foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row): 
                    ?>  
                    <tr style="border-style: ridge;">
                        <td style="background-color: rgba(100,100,100,.9); font-family: Cambria Math; color: #FFFFFF; text-align: center;"><?php echo $no; ?></td>
                        <td style="background-color: rgba(100,100,100,.9); font-family: Cambria Math; color: #FFFFFF;"><?php echo $row['username']; ?></td>
                        <td style="background-color: rgba(100,100,100,.9); font-family: Cambria Math; color: #FFFFFF;"><?php echo $row['first_name']; ?></td>
                        <td style="background-color: rgba(100,100,100,.9); font-family: Cambria Math; color: #FFFFFF;"><?php echo $row['last_name']; ?></td>
                        <td style="background-color: rgba(100,100,100,.9); font-family: Cambria Math; color: #FFFFFF; text-align: center;"><?php echo $row['gender']; ?></td>
                        <td style="background-color: rgba(100,100,100,.9);">
                            <button class="action-btn" onclick="window.location.href='Edit1.php?id_user=<?php echo $row['id_user']; ?>'">Edit</button>
                            <button class="action-btn" onclick="window.location.href='Delete.php?id_user=<?php echo $row['id_user']; ?>'">Delete</button>
                        </td>
                    </tr>
                    <?php 
                    $no++; 
                    endforeach; 
                    ?>
                <?php else: ?>        
                    <tr>
                        <td colspan="6" style="background-color: rgba(100,100,100,.9); text-align: center; color: #FFFFFF;">Belum ada data user</td>
                    </tr>        
                <?php endif; ?>
            </tbody>
        </table>
        
        <ul class="pagination">
            <?php for ($i = 1; $i <= $pages; $i++): ?>
                <li><a class="<?= ($i == $page) ? 'active' : '' ?>" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
            <?php endfor; ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
