@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">My projects</h2>
            <a href="/projects/create">New project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6" style="height: 200px">
                @include('projects.card')
            </div>
        @endforelse
            <div>No projects yet</div>
        @empty
    </main>
@section('content')