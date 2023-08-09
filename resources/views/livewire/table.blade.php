<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>
			Director
		</th>
		<th>
			Year
		</th>
		<th>
			Genre
		</th>
		<th>
			Created At
		</th>
		<th>
			Updated At
		</th>
	</tr>
	@foreach ($movies as $key => $movie)
		<tr wire:key="{{ $movie->id }}">
			<td>{{ $movie->id }}</td>
			<td>
				<input type="text"
					wire:model="movies.{{ $key }}.title">
			</td>
			<td>{{ $movie->director }}</td>
			<td>{{ $movie->year }}</td>
			<td>{{ $movie->genre }}</td>
			<td>{{ $movie->created_at }}</td>
			<td>{{ $movie->updated_at }}</td>
		</tr>
	@endforeach
</table>
