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
		<livewire:table-item movieId="{{ $movie->id }}" />
	@endforeach
</table>
