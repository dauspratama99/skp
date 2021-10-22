@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h5><div class="card-header"><i class="fa fa-align-justify"></i>DAFTAR USER</div></h5>
                        <div class="card-body">
                            <a class="btn btn-primary btn-block" role="button" href="{{route('user.add')}}">
                                <span class="cil-user-follow btn-icon mr-2"></span>Tambahkan User
                            </a>
                            <br>
                            <table class="table table-responsive-sm table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th class="border-right">No</th>
                                        <th class="border-right">Nama</th>
                                        <th class="border-right">Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($users as $user)
                                    <tr>
                                        <th class="border-right" scope="row">{{$loop->iteration }}.</th>
                                        <td class="border-right">{{$user->name}}</td>
                                        <td class="border-right">{{$user->role->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-behance" id="editButton" data-toggle="modal"
                                                data-target="#editUser" data-id="{{$user->id}}"
                                                data-name="{{$user->name}}" data-username="{{$user->username}}"
                                                data-email="{{$user->email}}" data-role_id="{{$user->roleselect}}">
                                                <span class="cil-pencil btn-icon mr-2"></span>Edit
                                            </a>
                                            <form action="{{ route('user.destroy',[$user->id]) }}" method="post"
                                                onclick="return confirm('Anda yakin menghapus data ?')"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-youtube">
                                                <span class="cil-trash btn-icon mr-2"></span>Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div>
</div>
</div>

<!-- Modal Edit User -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.edit')}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleFormControlFile1">ID User</label>
                        <input type="text" class="form-control-file" id="edit_id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Name</label>
                        <input type="text" class="form-control-file" id="edit_name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Username</label>
                        <input type="text" class="form-control-file" id="edit_username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Email</label>
                        <input type="text" class="form-control-file" id="edit_email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="roleselect" class="form-control" id="edit_role">
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

@section('javascript')
<script>
    $(document).ready(function () {
        $(document).on("click", "#editButton", function () {
            var id = $(this).data("id");
            var name = $(this).data("name");
            var username = $(this).data("username");
            var email = $(this).data("email");
            var roleselect = $(this).data("roleselect");
            $("#edit_id").val(id);
            $("#edit_name").val(name);
            $("#edit_username").val(username);
            $("#edit_email").val(email);
            $("#edit_role").val(roleselect);
            console.log(id);
        })
    })

</script>
<script type="text/javascript">
    $(document).ready(function () {
        var flash = "{{ Session::has('sukses') }}";
        if (flash) {
            var pesan = "{{ Session::get('sukses') }}"
            alert(pesan);
        }
    })

</script>
@endsection
