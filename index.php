<?php
session_start();
include 'connect.php';
include 'migration.php';
include 'includes/header.php';
?>





<body class="bg-dark text-white">
  <div class="container mt-5">
    <div class="row text-center">

      <!-- فريق 1 -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded-4 shadow bg-primary text-white text-center">
          <h3>فريق 1</h3>
          <h1 class="display-3"> <?php echo $scoreTeamOne['total_score'] ?? 0  ?> </h1> <!-- هنا مكان السكور -->



          <form action="actions/storeScore.php" method="POST">
            <div class="mt-4">
              <div class="d-flex justify-content-center mb-3">
                <input
                  type="number"
                  name="add"
                  class="form-control text-center fs-3"
                  style="width: 200px;"
                  placeholder="0">

                <input hidden name="type" value="team1">

              </div>
              <input type="submit" value="إضافة" class="btn btn-light px-4">
            </div>
        </div>
      </div>
      </form>



      <!-- فريق 2 -->
      <div class="col-md-6 mb-4">
        <div class="p-4 border rounded-4 shadow bg-success text-white text-center">
          <h3>فريق 2</h3>
          <h1 class="display-3"><?php echo $scoreTeamTwo['total_score'] ?? 0  ?></h1> <!-- هنا مكان السكور -->

          <form action="actions/storeScore.php" method="POST">
            <div class="mt-4">
              <div class="d-flex justify-content-center mb-3">
                <input
                  type="number"
                  name="add"
                  class="form-control text-center fs-3"
                  style="width: 200px;"
                  placeholder="0">

                <input hidden name="type" value="team2">


              </div>
              <input type="submit" value="إضافة" class="btn btn-light px-4">
            </div>
        </div>
        </form>
      </div>

    </div>



    <div class="container col text-center">
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#m">
        Reset
      </button>


      <div class="modal fade" id="m" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">

              <h1 class="modal-title fs-5 text-canter w-100" id="staticBackdropLabel">إعادة تعيين النتيجة</h1>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body text-canter">
              هل انت متأكد ؟؟
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>

              <form action="actions/Delete.php" method='POST'>
                <button type="submet" class="btn btn-danger">إعادة التعيين</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php  
include 'includes/footer.php';