@include('partials.head')


<h1>{{ isset($titulo) ? $titulo : '' }}</h1>

<ul>
	@for( $i = 0; $i < 5; $i++)
		<li><a href="#">{{ $i }}</a></li>
	@endfor

	@foreach($menu as $item)
		<li><a href="#">{{ $item }}</a></li>
	@endforeach
</ul>

@if( $desc == '123' )
	<p>{{ $desc }}</p>
@else
	<p>nao é igual</p>
@endif

@unless( $desc == '123' )
	<p>{{ $desc }}</p>
@endunless

{!! $script !!}


@include('partials.footer')