@extends('_layouts.master')

@section('body')
    <h2 class="text-white text-5xl">Hello World</h2>
    @if($page->getFilename() != 'index')
        <h3 class="text-white text-5xl">Yess</h3>
    @endif
@endsection