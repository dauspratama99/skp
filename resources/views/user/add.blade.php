@extends('layouts.app')

@section('content')

<div>
<div class="container">
  <div class="fade-in">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">

          <div class="card-header"><i class="fa fa-align-justify"></i>Tambah User</div>
            <div class="card-body">
              <form action="{{route('user.post')}}" method="POST">
                @csrf
                <div class="form-group row{{$errors->has('id') ? ' has-error' : ' '}}" >
                  <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">ID User</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control-file is-invalid" id="id" name="id" placeholder="  ID/NIP..." required autofocus >
                </div></div>
                <div class="form-group row" >
                  <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control-file" id="name" name="name" placeholder="  nama lengkap..." required>
                </div></div>
                <div class="form-group row" >
                  <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control-file" id="username" name="username" placeholder="  username..." required>
                </div></div>
                <div class="form-group row" >
                  <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control-file" id="email" name="email" placeholder="  isi@email..." required>
                </div></div>
                <div class="form-group row" >
                  <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                  <input type="password" class="form-control-file" id="password" name="password" placeholder="  password..." required>
                </div></div>
                <div class="form-group row">
                  <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Role</label>
                  <div class="col-sm-10">
                  <select name = "roleselect" class="form-control" id="exampleFormControlSelect1">
                  <option selected disabled value="">  pilih role..</option>
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select>
                </div></div>
                <div>
                  <button type="submit" class="btn btn-primary"><span class="cil-save btn-icon mr-2"></span>Simpan</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>

</div>
@endsection
</div>
</div>
</div>
</div>

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            alert(pesan);
        }
    })
</script>
@endsection
