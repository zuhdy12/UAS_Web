<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Daftar Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="koneksi/proses.php?id=daftar">
          <div class="form-group">
            <label for="">Nama Pengguna</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" required>
          </div>
          <div class="modal-footer mt-3">
            <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Daftar Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="koneksi/proses.php?id=login">
          <h5 class="card-title text-center">Login</h5>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" required>
          </div>
          <center>
            <button class="btn btn-primary">Login</button>
            <a class="btn btn-danger text-white" data-toggle="modal" data-target="#modelId">Daftar</a>
          </center>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    // Close any open modals before opening a new one
    $('#modelId').on('show.bs.modal', function () {
      $('.modal').not($(this)).modal('hide');
    });

    $('#modal-login').on('show.bs.modal', function () {
      $('.modal').not($(this)).modal('hide');
    });

    $('#loginButton').click(function(){
      $('#loginToast').toast('show');
    });
  });
</script>

<div class="footer mt-4 bg-dark text-white pt-3 pb-2">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <p class="center-align">&copy; <?= date('Y');?> Rental Mobil SS All Reserved</p>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
