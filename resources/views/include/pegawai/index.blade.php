<div class="card shadow">
        <div class="card-header text-primary">
            <b>Data Pegawai</b>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabelPegawai">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Pangkat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @foreach ($item->Role as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->Pangkat as $pangkat)
                                        {{$pangkat->name}}
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a class="text-danger" href="{{ route('pegawai.destroy', $item->id) }}" onclick="deletePost({{$item->id}})"> 
                                        <i data-feather="x-circle"></i>
                                    </a>
                                    <a href="" onclick="editPost({{$item->id}}, '{{$item->name}}', '{{$item->email}}', '{{$item->password}}', '{{route('pegawai.update', $item->id)}}')">
                                        <i data-feather="edit"></i>
                                    </a>
    
                                    <form id="{{$item->id}}" action="{{ route('pegawai.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    @push('scripts')
        <script>
            function deletePost(id)
            {
                event.preventDefault(); 
                document.getElementById(id).submit();
            }
    
            function editPost(id, name, email, password, url)
            {
                event.preventDefault(); 

                $("#title").html('Edit ' + name);
                $("#name").val(name);
                $("#email").val(email);
                $("#password").val(password);
                $("form #role").hide();
                $("#createForm form").attr("action", url);
                $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");
            }
        </script>
    @endpush