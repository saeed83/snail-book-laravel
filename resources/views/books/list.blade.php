@extends('layouts.master')
@section('title','HOME SWEET HOME')
@section('content')

{{-- App/view/components/aler.php  --}}
{{-- Resources/views/component/alert.blade.php  --}}
<x-alert title="Home alert is here"/> 

{{-- App/view/components/book.php  --}}
{{-- Resources/views/component/alert.blade.php  --}}
<x-book class="border-danger" title="Book - PHP Objects Patterns and Practice">
        written by said
</x-book>

    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1>Navbar example</h1>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll,
                this navbar remains in its original position and moves with the rest of the page.</p>
            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
        </div>
    </main>
@endsection