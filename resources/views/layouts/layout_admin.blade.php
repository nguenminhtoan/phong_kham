<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang quản trị</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/stylesheets/bootstrap.css">
        <link rel="stylesheet" href="/stylesheets/style_2.css">
        <style>
            table>tbody>tr>td{vertical-align: middle !important;}
            table>thead>tr>th{text-align:center !important; }
        </style>
        <script>
          function DeleteRow(){
            return confirm('Bạn có muốn xóa không ?');
          }
        </script>
    </head>
    <body>
        <div class="bg-dark dk"> 
            @include('layouts.header_admin')
            @include('layouts.menu_admin')
            <div id="content">
                <div class="outer">
                    <div class="inner bg-light lter">
                        <div id="main" class="col-lg-12" style="min-height:655px">
                             @yield("content")
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="Footer bg-dark dker">
            <p>2017 &copy; Minh Toan Desgin</p>
        </footer>
    </body>
    <!--jQuery -->
    <script src="/javascripts/jquery_1.js"></script>
    <script src="/javascripts/bootstrap.js"></script>
    <script src="/javascripts/metisMenu.js"></script>
    <script src="/javascripts/core.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
      
      $(document).ready( function () {
          $('#dataTable').DataTable({
              stateSave: true

          });
      } );
    </script>
</html>