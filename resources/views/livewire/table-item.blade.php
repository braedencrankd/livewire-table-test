<tr :key="{{ $movie->id }}">
	<td>{{ $movie->id }}</td>
	<td>
		<input type="text"
			wire:model.blur="title">
	</td>
	<td>{{ $movie->director }}</td>
	<td>{{ $movie->year }}</td>
	<td>{{ $movie->genre }}</td>
	<td>{{ $movie->created_at }}</td>
	<td>{{ $movie->updated_at }}</td>
</tr>

{{-- <div>
	<input type="text"
		wire:model.blur="title">
</div> --}}
