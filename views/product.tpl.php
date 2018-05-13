<!DOCTYPE html>
<html lang="ru">
<?php
    include_once "conf/header.php";
?>
<body>

<div id="wrapper">

<?php
    include_once "conf/nav.php";
?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Продукты</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Продукты
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <form action="/product/addProduct" method="POST">
                                                <input type="text" name="name" >
                                                <input type="text" name="cost" >
                                                <input type="submit" name="submit" >
                                            </form>
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>ID продукта</th>
                                                    <th>Наименование</th>
                                                    <th>Стоимость</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ($pageData['products'] as $key => $value) {
                                                    echo "<tr>";
                                                    echo "<td>" . $value['id'] . "</td>";
                                                    echo "<td>" . $value['name'] . "</td>";
                                                    echo "<td>" . $value['cost'] . "</td>";
                                                    echo "<tr>";
                                                }
                                                ?>
                                                <?php foreach ($pageData['errors'] as $value) {
                                                    echo "</br><span class='form-error'>*$value</span>";
                                                } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <canvas id="myChart"></canvas>
        <!-- jQuery -->
<!--        <script src="/js/jquery.min.js"></script>-->

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/js/admin/metisMenu.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/admin/sb-admin-2.js"></script>

<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>-->
        <script src="/js/charttest.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

</body>

</html>


