@extends('layouts.app')

@section('content')
<h1 class="mb-4">Gene Expression Overview</h1>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Probe ID</th>
            <th>Expression Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($genes as $index => $gene)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $gene->probe_id }}</td>
                <td>{{ $gene->expressions_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
