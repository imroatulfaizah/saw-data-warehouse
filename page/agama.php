

<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/beranda.svg">
        <div id="judul-text">
            <h2 class="text-green">Laporan Jumlah Mahasiswa</h2>
        
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-4">

        <div class="panel">
            <link rel="stylesheet" type="text/css" href="page/Chartjs/dist/Chart.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="page/Chartjs/dist/Chart.min.js"></script>
    <h2 ></h2> 

                        <?php
                        $url='http://localhost/pmb/webservice/list_json_agama.php';
                        $json = file_get_contents($url);
                         
                        // deserialize data from JSON
                        $krs = json_decode($json,true);
                         // var_dump($krs);

                        ?>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script type="text/javascript">
                            //$("#tahun_lulus").change(function(e){
                                //var tahun_lulus = e.target.value
                                $.getJSON(`http://localhost/PMB/webservice/list_json_agama.php`, function( data ) {


    var isi_labels = [];
    var isi_data=[];
    $(data.list_info).each(function(i){         
        isi_labels.push(data.list_info[i].agama_siswa);
        isi_data.push(data.list_info[i].jumlah);
    });


    //deklarasi chartjs untuk membuat grafik 2d di id mychart   
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        //chart akan ditampilkan sebagai bar chart
        type: 'bar',
        data: {
            //membuat label chart
            labels: isi_labels,
            datasets: [{
                label: 'Data Mahasiswa',
                //isi chart
                data: isi_data,
                //membuat warna pada bar chart
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


                                });
                        </script>


                        <label>Pilih Data Pertahun</label><br>
                        <select type ="text" id="tahun_lulus" name = "tahun_lulus" class="form-custom" required>
                            <?php 

                        $no = 0;
                        foreach ($krs['list_info'] as $kr) {
                            $no++;
                            foreach ($kr as $key => $value) {
                                $$key=$value;
                            }

                            ?>
                        <option><?php echo $tahun_lulus; } 

                        ?>
                            
                        </option>

                        </select>
        </div>
    </div>
    <div class="col-8">
        <div class="panel">
    <div class="panel-middle text-center">
        <table>

            <?php
                        $url='http://localhost/pmb/webservice/list_json_agama2.php';
                        $json = file_get_contents($url);
                         
                        // deserialize data from JSON
                        $krs = json_decode($json,true);
                         // var_dump($krs);

                        ?>

            <tr>
                <td>No</td>
                <td>Agama</td>
                <td>Jumlah</td>
            </tr>
            <?php 

                        $no = 0;
                        foreach ($krs['list_agama'] as $kr) {
                            $no++;
                            foreach ($kr as $key => $value) {
                                $$key=$value;
                            }

                            ?>
                        
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $agama_siswa ?></td>
                            <td><?php echo $jumlah ?></td>
                            
                        </tr>
                        <?php
                        
                    }
                //jika query menghasilkan nilai 0
                
                ?>
        </table>
        
    </div>
    <div class="panel-bottom"></div>
</div>



        <div class="panel">
            <div class="panel-top">
                <b class="text-green">Laporan Berdasarkan Agama</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script type="text/javascript">
                            $("#tahun_lulus").change(function(e){
                                var tahun_lulus = e.target.value
                                $.getJSON(`http://localhost/PMB/webservice/list_json_agama.php?tahun_lulus=${tahun_lulus}`, function( data ) {


    var isi_labels = [];
    var isi_data=[];
    $(data.list_info).each(function(i){         
        isi_labels.push(data.list_info[i].agama_siswa);
        isi_data.push(data.list_info[i].jumlah);
    });


    //deklarasi chartjs untuk membuat grafik 2d di id mychart   
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        //chart akan ditampilkan sebagai bar chart
        type: 'bar',
        data: {
            //membuat label chart
            labels: isi_labels,
            datasets: [{
                label: 'Data Mahasiswa',
                //isi chart
                data: isi_data,
                //membuat warna pada bar chart
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

});
                                });
                        </script>

<div style="width: 600px;" >
 <canvas id="myChart"></canvas>
</div>
                </div>
            </div>
            <div class="panel-bottom"></div>
        </div>
    </div>
</div>