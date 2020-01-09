<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/beranda.svg">
        <div id="judul-text">
            <h2 class="text-green">LAPORAN PINDAH PRODI</h2>
            Halamanan Laporan Pindah Prodi
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="page/Chartjs/dist/Chart.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="page/Chartjs/dist/Chart.min.js"></script>

<?php
                        $url='http://localhost/pmb/webservice/grafik_makin.php';
                        $json = file_get_contents($url);
                         
                        // deserialize data from JSON
                        $krs = json_decode($json,true);
                         //var_dump($krs);

                        ?>
<!-- judul -->
<div class="panel">
    <div class="panel-middle text-center">
        <h1>
           <span class="text-green">Laporan Pindah Prodi</span><br>
            
        </h1>

    </div>
    <div class="panel-bottom"></div>
</div>

<div class="panel">
    <div class="panel-middle text-center">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script type="text/javascript">
                           
                                $.getJSON(`http://localhost/PMB/webservice/grafik_makin.php`, function( data ) {


    var isi_labels = [];
    var isi_data=[];
    $(data.list_info).each(function(i){         
        isi_labels.push(data.list_info[i].prodi_awal);
        isi_data.push(data.list_info[i].jumlah);
    });


    //deklarasi chartjs untuk membuat grafik 2d di id mychart   
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        //chart akan ditampilkan sebagai bar chart
        type: 'pie',
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

                        <div style="width: 600px;" >
 <canvas id="myChart"></canvas>
</div>
        
    </div>
    <div class="panel-bottom"></div>
</div>