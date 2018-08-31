@if (session('error'))
<div class="row error-mensaje">
  <div class="col-md-12">
    <div class="alert alert-danger" data-dismiss="alert" aria-label="Close">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h5 class="text-center">{{ session('error') }}</h5>
    </div>
  </div>
</div>
@endif
@if (session('success'))
<div class="row error-mensaje">
  <div class="col-md-12">
    <div class="alert alert-success" data-dismiss="alert" aria-label="Close" >
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h5 class="text-center">{{ session('success') }}</h5>
    </div>
  </div>
</div>
@endif

@if (isset($errors) && $errors->any())
<div class="row error-mensaje">
  <div class="col-md-12">
    <div class="alert alert-danger alert-alt">
      <strong><i class="fa fa-bug fa-fw"></i> Errores encontrados</strong><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endif
