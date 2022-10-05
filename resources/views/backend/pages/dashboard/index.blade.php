@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - {{config('app_name')}}</title>
@endsection

@section('subcontent')
Welcome to {{ config('app.name') }}
@endsection
