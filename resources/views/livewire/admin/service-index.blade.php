<div class="card">

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="ingrese el nombre del servicio">
    </div>
@if ($services->count())
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th></th>
            </tr>     
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->name}}</td>
                <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.services.edit',$service)}}"> Editar</a></td>
                <td  width="10px" >
                    <form action="{{route('admin.services.destroy',$service)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="'btn btn-danger btn-sm" > eliminar</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
</div>

<div class="card-footer">
{{$services->links()}}
</div>
    
@else
<div class="card-body">
    <strong> No hay ningun registro</strong>
</div>
   
@endif
        
    
</div>
