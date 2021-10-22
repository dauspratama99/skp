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
            <p style="text-align:center; ">FORMULIR SASARAN KERJA</p>
        </b>
        <b>
            <p style="text-align:center; margin-top: -10px;">PEGAWAI NEGERI SIPIL</p>
        </b>
        <br>
        <table class="table table-bordered" style="border-style: solid; border:2px solid black;">
            <tr>
                <th style="width:1%"><b>NO</b></th>
                <th style="width:49%" colspan="4"><b>I. PEJABAT PENILAI</b></th>
                <th style="width:1%"><b>NO</b></th>
                <th style="width:49%" colspan="5"><b>II. PEGAWAI NEGERI SIPIL YANG DINILAI</b></th>
                <th style="text-align: center;"><b>PENGHITUNGAN</b></th>
                <th style="text-align: center;"><b>NILAI CAPAIAN SKP</b></th>
            </tr>
            <tr>
                <td>1</td>
                <td style="width: 10%;">Nama</td>
                <td colspan="3">{{$data->penilai}}</td>
                <td>1</td>
                <td>Nama</td>
                <td colspan="4">{{$data->dinilai}}</td>
            </tr>
            <tr>
                <td>2</td>
                <td style="width: 10%;">NIP</td>
                <td colspan="3">{{$data->nip_evaluator}}</td>
                <td>2</td>
                <td>NIP</td>
                <td colspan="4">{{$data->nip_rated}}</td>
            </tr>
            <tr>
                <td>3</td>
                <td style="width: 10%;">Pangkat/Gol. Ruang</td>
                <td colspan="3">{{$data->posisi_penilai}} / {{$data->panggol_penilai}}</td>
                <td>3</td>
                <td>Pangkat/Gol. Ruang</td>
                <td colspan="4">{{$data->posisi_dinilai}} / {{$data->panggol_dinilai}}</td>
            </tr>
            <tr>
                <td>4</td>
                <td style="width: 10%;">Jabatan</td>
                <td colspan="3">{{$data->unit_penilai}}</td>
                <td>4</td>
                <td>Jabatan</td>
                <td colspan="4">{{$data->unit_dinilai}}</td>
            </tr>
            <tr>
                <td>5</td>
                <td style="width: 10%;">Unit Kerja</td>
                <td colspan="3">{{$data->unit_penilai}}</td>
                <td>5</td>
                <td>Unit Kerja</td>
                <td colspan="4">{{$data->unit_dinilai}}</td>
            </tr>


            <tr>

                <th style="text-align: center;" rowspan="2" colspan="5"><b>TARGET</b></th>
                <th style="text-align: center;" rowspan="2"><b></b></th>
                <th style="text-align: center;" rowspan="2" colspan="4"><b>REALISASI</b></th>


            </tr>

            <tr>
            </tr>

            <tr>
                <th></th>
                <th style="text-align: center;"><b>KUANT/OUTPUT</b></th>
                <th style="text-align: center;"><b>KUAL/MUTU</b></th>
                <th style="text-align: center;"><b>WAKTU</b></th>
                <th style="text-align: center;"><b>BIAYA</b></th>
                <th></th>
                <th style="text-align: center;"><b>KUANT/OUTPUT</b></th>
                <th style="text-align: center;"><b>KUAL/MUTU</b></th>
                <th style="text-align: center;"><b>WAKTU</b></th>
                <th style="text-align: center;"><b>BIAYA</b></th>
                <th style="text-align: center;" colspan="4"><b>TOTAL</b></th>
            </tr>

            <tr>

                @foreach($user as $dt)

                <?php
                $data_t = $dt->mutu + $dt->waktu;
                $data_r = $dt->mutu + $dt->waktu;
                $total = $data_r + $data_t;
                $total_b = $total / 3;
                $total_h = $total_b;
                ?>

                <th></th>
                <th style="text-align: center;">{{$dt->kuant}}</th>
                <th style="text-align: center;">{{$dt->mutu}}</th>
                <th style="text-align: center;">{{$dt->waktu}}</th>
                <th style="text-align: center;">{{$dt->biaya}}</th>
                <th style="text-align: center;"></th>
                <th style="text-align: center;">{{$dt->kuantitas}}</th>
                <th style="text-align: center;">{{$dt->mutu}}</th>
                <th style="text-align: center;">{{$dt->waktu}}</th>
                <th style="text-align: center;">{{$dt->biaya}}</th>
                <th colspan="2" style="text-align: center;">{{ $total }}</th>
                <th colspan="2" style="text-align: center;">{{ round($total_b) }}</th>
                @endforeach


            </tr>
            <tr>
                <th colspan="10" style="background-color:lightblue; text-align:center;">NILAI CAPAIAN SKP</th>
                <th colspan="4" style="background-color:lightblue; text-align:center;">{{ round($total_b) }}</th>

            </tr>
            <tr>
                <th colspan="10"></th>
                <th colspan="4" style="background-color:lightblue; text-align:center;">
                    <?php
                    if ($total_h >= 91 && $total_h <= 100) {
                        echo "(Sangat Baik)";
                    } else if ($total_h >= 76 && $total_h <= 90) {
                        echo "(Baik)";
                    } else if ($total_h >= 61 && $total_h <= 75) {
                        echo "(Cukup)";
                    } else if ($total_h >= 51 && $total_h <= 60) {
                        echo "(Kurang)";
                    } else {
                        echo "(Buruk)";
                    }
                    ?>
                </th>
            </tr>



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
    </page>

    <!-- <script>window.print()</script> -->

</body>

</html>