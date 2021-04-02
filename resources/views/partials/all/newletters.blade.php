<form  action="" method="">
  
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="client" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">j'accepte les conditions</label>
    </div>
    <div class="">
        <button type="submit" class="btn site-btn btn-2" data-toggle="modal" data-target="#exampleModal">Submit</button>
    </div>
<!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inscription validée</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Votre inscription à notre newsletter est validée
        </div>
      </div>
    </div>
  </div>
</form>