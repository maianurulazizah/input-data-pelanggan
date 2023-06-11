<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <?= $title ?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                <!-- <a href="<?= BASEURL ?>Pelanggan/tambah" class="btn btn-primary btn-xs" style="margin-bottom: 7px;">+ Data</a> -->
                                <a href="#" class="btn btn-primary btn-xs" style="margin-bottom: 7px;" id="input-data" data-toggle="modal" data-target="#myModal">+ Data</a>
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="3%">No.</th>
                                                    <th>Nama</th>
                                                    <th>SND</th>
                                                    <th>No WA</th>
                                                    <th>Totag</th>
                                                    <th>Desc_Bill</th>
                                                    <th width="3%">Ubah</th>
                                                    <th width="3%">Hapus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=0;
                                                foreach($pelanggan as $row):
                                                    $no++;
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td class="text-center"><?= $no ?></td>  
                                                    <td><?= $row['nama'] ?></td>
                                                    <td><?= $row['snd'] ?></td>
                                                    <td><?= $row['no'] ?></td>
                                                    <td><?= $row['totag'] ?></td>
                                                    <td><?= $row['desc'] ?></td>
                                                    <td><a href="#" onclick="ubah('<?= $row['id'] ?>')" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a></td>
                                                    <td><a href="<?= BASEURL ?>Pelanggan/hapus/<?= $row['id'] ?>" onclick="return confirm('Yakin apakah data ini akan dihapus?')"><i class="fa fa-trash" style="color: red;"></i></a></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <!-- <div class="well">
                                        <h4>DataTables Usage Information</h4>
                                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                    </div> -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


<script>
    $('#input-data').on('click', function() {
        $('.modal-title').html('Input Data');

        let url = '<?=BASEURL?>/Pelanggan/tambahmodal';

        $.post(url,{

            },
            function(data){
                $('.modal-body').html(data);
            });
    });

    function ubah(a) {
        let url = '<?= BASEURL ?>/Pelanggan/formubahdatamodal';

        $.post(url, {
            id: a
        }, function(data) {
            $('.modal-title').html('Ubah Data');
            $('.modal-body').html(data);
        });
    }

    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>