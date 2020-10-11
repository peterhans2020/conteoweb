<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conteo de votos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ secure_asset('/dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/dist/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('/dist/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/dist/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}">


    <style>
        .table-content{
            width: 100%;
            margin-top: 10px;
            margin-right: 20px;
        }
        .table-content .table-responsive-content{
            width: 100%;
            border-radius: 5px;
            text-align: center;
            border-collapse: collapse;
            border-spacing: 0;
            color: #16181b;
            transition: all .4s ease;
        }
        .table-content .table-responsive-content tr{
            width: 100%;
            background: #fff;
        }
        .table-content .table-responsive-content tr:nth-child(2n){
            background: #f2f2f2;
        }
        .table-content .table-responsive-content .row-header{
            background: rgba(0, 0, 0, .08);
        }


        .table-content .table-responsive-content th,
        .table-content .table-responsive-content td{
            padding: 6px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        .table-content .table-responsive-content .row-header th{
            padding: 15px;
            text-align: center;
            font: 500 14px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
            border: 1px solid #e8e8e8;
        }

        .table-content .table-responsive-content .col-show{
            display: none;
        }

        @media    screen and (max-width: 850px) {
            .table-content .table-responsive-content thead{
                display: none;
            }
            .table-content .table-responsive-content tr{
                margin: 0 0 15px;
                display: block;
                border: 1px solid #e8e8e8;
            }
            .table-content .table-responsive-content td,
            .table-content .table-responsive-content th{
                display: block;
                text-align: left;
                padding: 10px 15px 10px 170px;
                font-size: 14px;
                position: relative;
                border: none;
                margin-left: 5px;
            }
            .table-content .table-responsive-content .col-show{
                display: block;
                border: none;
                position: absolute;
                font-weight: bold;
                font-size: 16px;
                top: 7px;
                left: 10px;
                padding-bottom: 20px
            }
        }
    </style>
    
</head>
<body>
      <input id='token_post' type='hidden' name='token_post' value='{{ csrf_token() }}' />
    <div id="app">
        <!-- <div id="raiz"></div> -->
    </div>

    <script src="/js/app.js"></script>
    <script src="{{ asset('/dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/modules/popper.js') }}"></script>
    <script src="{{ asset('/dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('/dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>

    <script src="{{ asset('/dist/js/sa-functions.js') }}"></script>



    <script src="../dist/modules/chart.min.js"></script>
  <script>

    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        datasets: [{
          data: [
            80,
            50,
            40,
            30,
            20,
          ],
          backgroundColor: [
            '#574B90',
            '#28a745',
            '#ffc107',
            '#dc3545',
            '#343a40',
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'MNR',
          'MAS',
          'PDS',
          'UCS',
          'MNR'
        ],
      },
      options: {
        responsive: true,
        legend: {
          position: 'bottom',
        },
      }
    });
  </script>



    <script src="{{ asset('/dist/js/scripts.js') }}"></script>
    <script src="{{ asset('/dist/js/custom.js') }}"></script>
    <script>
        
    </script>

</body>
</html>