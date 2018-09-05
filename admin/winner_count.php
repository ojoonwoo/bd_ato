<?php
	// 설정파일
	include_once "../include/autoload.php";

	$mnv_f = new mnv_function();
	$my_db         = $mnv_f->Connect_MySQL();
/*
	if (isset($_SESSION['ss_mb_id']) == false)
	{
		//header('Location: index.php'); 
		echo "<script>location.href='index.php'</script>"; 
		exit; 
	}
*/
	include "./head.php";
?>


<div id="page-wrapper">
  <div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">샘플별 소진 갯수</h1>
      </div>
    </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-6">
          <div class="table-responsive">
            <div id="daily_topgirl_vote_count_div1" style="display:block">
              <table class="table table-hover">
                <thead>
                  <tr><th>아토덤크림(라이트)</th><th>아토덤PP밤(미디움)</th><th>아토덤인텐시브밤(헤비)</th></tr>
                </thead>
                <tbody>
<?php
	$query	= "SELECT mb_type, count(mb_type) cnt FROM member_info WHERE 1 Group by mb_type";
	$res			= mysqli_query($my_db, $query);
	while($data = mysqli_fetch_array($res))
	{
?>
                  <tr>
                    <td><?=number_format($data["cnt"])?></td>
                    <td><?=number_format($data["cnt"])?></td>
                    <td><?=number_format($data["cnt"])?></td>
                  </tr>
<?
	}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->