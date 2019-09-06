<div class="card shadow">
        <div class="card-header text-primary">
            <b class="ml auto">Data Pegawai</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
                                <td class="name">{{ $item->name }}</td>
                                <td class="email">{{ $item->email }}</td>
                                <td>
                                    @foreach ($item->Role as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->Pangkat as $pangkat)
                                        {{$pangkat->nama}}
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
                $("#createCard").show();
                $("#title").html('Edit ' + name);
                $("#name").val(name);
                $("#email").val(email);
                $("#password").val(password);
                $("#createForm form").attr("action", url);
                $("form input:first-child").after("<input type='hidden' name='_method' value='PUT'/>");
            }

            $("td").click(function (e) { 
                e.preventDefault();
                // var content = $(this).val();
                // var content = $(this).html();
                // var content = $(this).attr("class");
                // var content = $(this).html();
                // $(this).remove();
                
                
                // console.log(content);
                
            });

            $("#closeForm").click(function (e) { 
                e.preventDefault();
                $("#createCard").hide();
            });
        </script>
    @endpush