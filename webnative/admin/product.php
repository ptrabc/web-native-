<?php
// include_once 'top.php';
// include_once 'menu.php';

$modelProduk = new Produk(); 
$data_produk = $modelProduk->dataProduk();


?>
<h1 class="mt-4">Data Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>


<a href="index.php?url=product_form" class="btn btn-primary mb-2">Tambah Produk</a>

<div class="card mb-3">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Minimal Stok</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Minimal Stok</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_produk as $row) {
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['kode'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['harga_beli'] ?></td>
                    <td><?= $row['harga_jual'] ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td><?= $row['min_stok'] ?></td>
                    <td><?= $row['Kategori'] ?></td>
                    <td>
                        <form action="controllers/produk_controllers.php" method="POST"> 
                            <a href="" class="btn btn-info btn-sm">Detail</a>
                            <a href="index.php?url=product_form&idedit=<?=$row['id']?>" class="btn btn-secondary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="deleteProduk" onclick="return confirm('Apakah anda yakin?')">Delete</button>

                            <input type="hidden" name="idp" value="<?=$row['id']?>">
                        </form>    
                    </td>
                </tr>
                <?php 
                $no++;
                } 
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php
// include_once 'bottom.php';
?>