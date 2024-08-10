@foreach($data as $item)
    <tr>
        <td><a href="{{ route('patient.show', $item->id) }}">{{  $item->full_name }}</a></td>
        <td>{{ $item->cnic }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->address }}</td>
    </tr>
@endforeach
