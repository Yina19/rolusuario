@if(!@empty($usuarios->getRoleNames(())
@foreach($usuarios->getRoleNames() as $rolName)
<h5><span class="badge badge-dark">{{$rolName}}</span></h5>
@endforeach

</td>
<td>
<a class="btn btn-info" href="{{ route('usuarios.edit, $usuarios->id')}}">Editar</a>


{!! Form::open(['method'=> 'DELETE', 'route'=>['usuarios.destrory',$usuarios->id],'style'=>'display:inline'])!!}
{!! Form::submit('Borrar',['class''btn btn-danger'])!!}
{!! Form::close()!!}

</td>
@endempty)
@endif