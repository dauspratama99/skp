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

        /* page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        } */

        /* td, th {
    border: 1px solid #000000;
    text-align: left;
    padding: 8px;
    }  */
        /* page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
      }

      @media print {
        body, page {
          margin: 0;
          box-shadow: 0;
        }
    }
     table {

    border-collapse: collapse;
    width: 100%;
    }

    */
    </style>
</head>

<body style="padding: 10px;">
    <page size="A4" layout="lands">
        <b>
            <p style="text-align:center; ">FORMULIR PENILAIAN</p>
        </b>
        <b>
            <p style="text-align:center; margin-top: -10px;">PEGAWAI NEGERI SIPIL</p>
        </b>
        <br>

        <table class="table table-bordered" style="border-style: solid; border:2px solid black; font-weight:bold;">
            <tr>
                <th><b>NO</b></th>
                <th colspan="5"><b>UNSUR YANG DI NILAI</b></th>
                <th style="text-align: center;"><b>JUMLAH</b></th>

            </tr>
            <tr>
                <td rowspan="12" style="text-align:center; vertical-align:middle;">1</td>
                <td colspan="2" ">Sasaran Kerja PNS</td>
                <td colspan=" 3" "> Nilai x 60%</td>

                @foreach($user as $dt)
                <?php
                $data_t = $dt->mutu + $dt->waktu;
                $data_r = $dt->mutu + $dt->waktu;
                $total = $data_r + $data_t;
                $total_b = $total / 3;
                $total_h = $total_b;
                ?>

                    <td style="text-align:center; vertical-align:middle;">{{ round($total_b) }}</td>
              
            </tr>
            @foreach($nilai as $data)

            <?php

            $n_40 = 0.4;
            $datanilai = 6;
            $totalnilai = $data->service_oriented + $data->integrity + $data->commitment + $data->discipline + $data->cooperation + $data->leadership;
            $total = $totalnilai / $datanilai;
            $d_sr = $data->service_oriented;
            $d_i = $data->integrity;
            $d_c = $data->commitment;
            $d_d = $data->discipline;
            $d_co = $data->cooperation;
            $d_l = $data->leadership;
            $d_tot = $total;
            $hasil_total = $total * $n_40;

            $nil_skp = $hasil_total + $total_b;

            ?>
            <tr>
                <td rowspan=" 9" style="text-align:center; vertical-align:middle;"> Perilaku Kerja</td>
                <td colspan="2" style="width: 10%;">1. Orientasi Pelayanan</td>
                <td>{{$data->service_oriented}}</td>
                <td>
                    <?php
                    if ($d_sr >= 91 && $d_sr <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_sr >= 76 && $d_sr <= 90) {
                        echo "(Baik)";
                    } else if ($d_sr >= 61 && $d_sr <= 75) {
                        echo "(Cukup)";
                    } else if ($d_sr >= 51 && $d_sr <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>



            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">2. Integrasi</td>
                <td>{{$data->integrity}}</td>
                <td>
                    <?php
                    if ($d_i >= 91 && $d_i <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_i >= 76 && $d_i <= 90) {
                        echo "(Baik)";
                    } else if ($d_i >= 61 && $d_i <= 75) {
                        echo "(Cukup)";
                    } else if ($d_i >= 51 && $d_i <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>


            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">3. Komitmen</td>
                <td>{{$data->commitment}}</td>
                <td>
                    <?php
                    if ($d_c >= 91 && $d_c <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_c >= 76 && $d_c <= 90) {
                        echo "(Baik)";
                    } else if ($d_c >= 61 && $d_c <= 75) {
                        echo "(Cukup)";
                    } else if ($d_c >= 51 && $d_c <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>


            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">4. Disiplin</td>
                <td>{{$data->discipline}}</td>
                <td>
                    <?php
                    if ($d_d >= 91 && $d_d <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_d >= 76 && $d_d <= 90) {
                        echo "(Baik)";
                    } else if ($d_d >= 61 && $d_d <= 75) {
                        echo "(Cukup)";
                    } else if ($d_d >= 51 && $d_d <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>


            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">5. Kerjasama</td>
                <td>{{$data->cooperation}}</td>
                <td>
                    <?php
                    if ($d_co >= 91 && $d_co <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_co >= 76 && $d_co <= 90) {
                        echo "(Baik)";
                    } else if ($d_co >= 61 && $d_co <= 75) {
                        echo "(Cukup)";
                    } else if ($d_co >= 51 && $d_co <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>



            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">6. Kepemimpinan</td>
                <td>{{$data->leadership}}</td>
                <td>
                    <?php
                    if ($d_l >= 91 && $d_l <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_l >= 76 && $d_l <= 90) {
                        echo "(Baik)";
                    } else if ($d_l >= 61 && $d_l <= 75) {
                        echo "(Cukup)";
                    } else if ($d_l >= 51 && $d_l <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>



            </tr>
            <tr>
                <td colspan="2" style="width: 10%;">7. Jumlah</td>
                <td>



                    {{ $data->service_oriented+$data->integrity+$data->commitment+$data->discipline+$data->cooperation+$data->leadership }}

                </td>
                <td>-</td>


            </tr>
            <tr>
                <td>8. Nilai Rata - rata</td>
                <td style="width: 10%;"></td>
                <td> {{ round($total) }}</td>
                <td>
                    <?php
                    if ($d_tot >= 91 && $d_tot <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($d_tot >= 76 && $d_tot <= 90) {
                        echo "(Baik)";
                    } else if ($d_tot >= 61 && $d_tot <= 75) {
                        echo "(Cukup)";
                    } else if ($d_tot >= 51 && $d_tot <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>


            </tr>
            <tr>
                <td style="background-color: lightgrey;">9. Nilai Perilaku Kerja</td>
                <td style="background-color:lightgrey;">Total x 40% </td>
                <td style="background-color:lightgrey;"></td>
                <td style="background-color:lightgrey;"></td>
                <td style="background-color:lightgrey; text-align:center;">{{round($hasil_total)}}</td>

            </tr>
            <tr>
                <td colspan="5">NILAI PRESTASI KERJA</td>


                <td style="background-color:lightgrey; text-align:center;">{{round($nil_skp)}} / 
                <?php
                    if ($nil_skp >= 91 && $nil_skp <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($nil_skp >= 76 && $nil_skp <= 90) {
                        echo "(Baik)";
                    } else if ($nil_skp >= 61 && $nil_skp <= 75) {
                        echo "(Cukup)";
                    } else if ($nil_skp >= 51 && $nil_skp <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </td>
            </tr>
            @endforeach
            @endforeach





            @foreach($user as $data)
        </table>
        <br>
        <br>
        <div class="row">
            <div class="col-8">
                <center>
                    <br>
                    Pejabat Penilai
                    <br>
                    <br>
                    <strong><u>{{$data->dinilai}}</u></strong>
                    <br>
                    {{$data->nip_rated}}
                </center>
            </div>


            <div class="col-4">
                <center>
                    Padang,2 Januari 2019
                    <br>
                    Pegawai Negeri Sipil Yang Dinilai
                    <br>
                    <br>
                    <strong><u>{{$data->penilai}}</u></strong>
                    <br>
                    {{$data->nip_evaluator}}
                </center>
            </div>
        </div>
        @endforeach
    </page>

    <!-- <script>window.print()</script> -->

</body>

</html>