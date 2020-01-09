<?php
                        $url='http://localhost/pmb/webservice/list_json_mhs.php';
                        $json = file_get_contents($url);
                         
                        // deserialize data from JSON
                        $krs = json_decode($json,true);
                         // var_dump($krs);

                        ?>

<div class="panel-top">
    <b class="text-green"><i class="fa fa-plus-circle text-green"></i> Tambah data</b>
</div>
<form id="form" method="POST" action="./proses/prosestambah.php">
    <input type="hidden" name="op" value="supplier">
    <div class="panel-middle">
        <div class="group-input">
            <label for="supplier" >Nama Sekolah :</label>
            <select type ="text" id="supplier"  name = "supplier" class="form-custom" required>
                            <?php 

                        $no = 0;
                        foreach ($krs['list_info'] as $kr) {
                            $no++;
                            foreach ($kr as $key => $value) {
                                $$key=$value;
                            }

                            ?>
                        <option><?php echo $nama_sekolah; } ?>
                            
                        </option>

                        </select>
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-green"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>