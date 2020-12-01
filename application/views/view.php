<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Table data</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <a href="data" class="btn btn-success btn-sm p-2 mb-2">Tambah Data</a>
                <a href="logout" class="btn btn-danger btn-sm p-2 ml-2">LOGOUT</a>
                <table class="table table-striped text-center">
                    <tr>
                        <th>ID</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>

                    <?php foreach ($data->result() as $nilai) : ?>
                        <tr>
                            <td><?= $nilai->id; ?></td>
                            <td><?= $nilai->deskripsi; ?></td>
                            <td><a href="update/<?= $nilai->id; ?>" class="btn btn-success btn-sm">Edit</a> |
                                <a href="hapus/<?= $nilai->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>