@if (session('info'))
<div class="alert alert-info" role="alert">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <div class="form-group mx-sm-3 mb-2">
            {{$search}} gola
        </div>
        
    </div>
    <div class="card-header">
        <div class="form-group mx-sm-3 mb-2">
            <input wire:model="search" class="form-control" placeholder="Buscar posts">
        </div>
        
    </div>
    
    @if ($posts->count())
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.posts.edit', $post) }}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Alerta</strong> Ningun post encontrado
            </div>
        </div>
    @endif
</div>


