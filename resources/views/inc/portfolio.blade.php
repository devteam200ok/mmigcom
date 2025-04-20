@php
    $data = DB::connection('mysql2')
        ->table('portfolio_data')
        ->where('id', $id)
        ->first();
@endphp
{!!$data->content!!}