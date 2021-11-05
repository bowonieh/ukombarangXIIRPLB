<html>
<body>
    <table >
        <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Nama Barang 
            </th>
            <th>
                Jumlah Stok
            </th>
            <th>
                Aksi
            </th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
             foreach($list as $key => $data):?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['nama_barang']?></td>
                    <td><?=$data['total_barang']?></td>
                    <td></td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>