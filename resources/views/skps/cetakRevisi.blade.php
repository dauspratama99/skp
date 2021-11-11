<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
        }

        @media print {
            .table {
                border: 1px solid black !important;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid black !important;
            }

            body {
                padding-left: 5px !important;
                padding-right: 5px !important;
            }

            @page {
                size: landscape
            }

        }

        @media screen {
            .table {
                border: 1px solid black;
            }

            body {
                padding-left: 10px;
                padding-right: 10px;
            }

            @page {
                size: landscape
            }

        }
    </style>
</head>

<body style="padding: 10px;">
    <page size="A4" layout="lands">
        <b>
            <p style="text-align:center; ">PENILAIAN SASARAN KERJA</p>
        </b>
        <b>
            <p style="text-align:center; margin-top: -10px;">PEGAWAI NEGERI SIPIL</p>
        </b>
        <br>
        <table class="table table-bordered">
            <tr>
                <th style="width:1%" rowspan="2"><b>NO</b></th>
                <th style="width:49%; text-align:center" rowspan="2"><b>I. KEGIATAN TUGAS TAMBAHAN</b></th>
                <th style="width:1%" rowspan="2"><b>AK</b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="4"><b>TARGET</b></th>
                <th style="width:1%" rowspan="2"><b>AK</b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="4"><b>REALISASI</b></th>
                <th style="width:1%" rowspan="2"><b>PENGHITUNGAN</b></th>
                <th style="width:1%" rowspan="2"><b>NILAI CAPAIAN SKP</b></th>
            </tr>
            <tr>


            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Kuant/Output</th>
                <th>Kual/Mutu</th>
                <th>Waktu</th>
                <th>Biaya</th>
                <th></th>
                <th>Kuant/Output</th>
                <th>Kual/Mutu</th>
                <th>Waktu</th>
                <th>Biaya</th>
                <th></th>
                <th></th>
            </tr>
            <tr height="10px" style="background-color:darkgrey;">
                <th></th>
                <th>Unsur Utama / Target</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            @php
            $no = 1;
            $total_full = 0;
            @endphp
            @foreach($target as $data)
            
            <?php 
                $data_q = $data->quantity + $data->kuantitas;
                $data_m = $data->mutu + $data->kredit;
                $data_w = $data->time + $data->waktu;
                $total = $data_q + $data_m + $data_w;
                $total_b = $total / 5;
                $total_h = $total_b;
                $total_full += $total_b / 3;
            ?>

            <tr height="10px">
                <th>{{ $no++ }}</th>
                <th>{{ $data->activities }}</th>
                <th>{{ $data->ak }}</th>
                <th>{{ $data->quantity }}</th>
                <th>{{ $data->mutu }}</th>
                <th>{{ $data->time }}</th>
                <th>{{ $data->cost }}</th>

                <th>{{ $data->ak }}</th>
                <th>{{ $data->kuantitas }}</th>
                <th>{{ $data->kredit }}</th>
                <th>{{ $data->waktu }}</th>
                <th>{{ $data->biaya }}</th>
                <th>{{ $total }}</th>
                <th>{{ $total_b }}</th>
            </tr>
            @endforeach

            <tr>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%;" rowspan="2"><b>II. TUGAS TAMBAHAN DAN KREATIVITAS</b></th>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="11"><b></b></th>
            </tr>
            <tr>

            </tr>
            <tr>
                <th style="width:1%" rowspan="2"><b>1</b></th>
                <th style="width:49%;" rowspan="2"><b>(tambahan)</b></th>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="11"><b></b></th>
                
                
            </tr>
            <tr></tr>
            <tr>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%;" rowspan="2"><b></b></th>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="11"><b></b></th>
            </tr>
            <tr>

            </tr>
            <tr>
                <th style="width:1%" rowspan="2"><b>2</b></th>
                <th style="width:49%;" rowspan="2"><b>(kreativitas)</b></th>
                <th style="width:1%" rowspan="2"><b></b></th>
                <th style="width:49%; text-align:center" rowspan="2" colspan="11"><b></b></th>
            </tr>
            <tr>

            </tr>
            <tr align="center">
               
                <th colspan="13"><b>NILAI CAPAIAN SKP</b></th>
                <th><b>{{ $total_full }}</b></th>
               
            </tr>
            <tr align="center">
               
               <th colspan="13"><b></b></th>
               <th><b>
               <?php
                    if ($total_full >= 91 && $total_full <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($total_full >= 76 && $total_full <= 90) {
                        echo "(Baik)";
                    } else if ($total_full >= 61 && $total_full <= 75) {
                        echo "(Cukup)";
                    } else if ($total_full >= 51 && $total_full <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
               </b></th>
              
           </tr>
        </table>
        <br>

    </page>

    <!-- <script>window.print()</script> -->

</body>

</html>