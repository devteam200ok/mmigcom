@php
    $displays = DB::connection('mysql2')
        ->table('portfolio_customs')
        ->where('id', $id)
        ->first();
@endphp
{!!$displays->content!!}