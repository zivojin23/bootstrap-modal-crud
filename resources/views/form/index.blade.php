@extends('layouts.app')

@section('content')

<div>
    @livewire('form')
</div>

@endsection























@section('script')
    <script>
        window.addEventListener('close-modal', event => {       
            $('#newProjectModal').modal('hide');
            $('#editProjectModal').modal('hide');
            $('#deleteProjectModal').modal('hide');
        })
    </script>
@endsection