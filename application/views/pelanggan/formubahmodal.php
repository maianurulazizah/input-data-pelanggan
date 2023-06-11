<?php foreach($ubah as $row): ?>
<div class="row">
    <div class="col-lg-6">
        <form role="form" action="<?= BASEURL ?>Pelanggan/prosesubah" method="post">
        <input type="hidden" value="<?= $row->id ?>" name="id"> 
            <fieldset>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" value="<?= $row->nama ?>" name="nama">
                </div>
                <div class="form-group">
                    <label>SND</label>
                    <input class="form-control" type="text" value="<?= $row->snd ?>" name="snd">
                </div>
                <div class="form-group">
                    <label>No WA</label>
                    <input class="form-control" type="text" value="<?= $row->no ?>" name="no">
                </div>
                <div class="form-group">
                    <label>Totag</label>
                    <input class="form-control" type="text" value="<?= $row->totag ?>" name="totag">
                </div>
                <div class="form-group">
                    <label>Desc_Bill</label>
                    <select  class="form-control" name="desc">
                        <option value="<?= $row->desc ?>"><?= $row->desc ?></option>
                        <option value="Eksisting">Eksisting</option>
                        <option value="PSB">PSB</option>
                        <option value="Winback">Winback</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>

                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Input</button>
            </fieldset>
        </form>
    </div>
</div>    
<?php endforeach; ?>