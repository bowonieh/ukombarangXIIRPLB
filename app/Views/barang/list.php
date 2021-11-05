<?php $this->extend('layout/layout');?>
<?php $this->section('content');?>
    <a href="<?=base_url()?>/barang/tambah"><button class="btn btn-primary">Tambah</button></a>
    
    <table class="table table-hovered" >
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
                    <td><a href="<?=base_url()?>/barang/edit/<?=$data['id_barang'];?>"><button class="btn btn-primary">EDIT</button></a></td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
<?php $this->endSection()?>