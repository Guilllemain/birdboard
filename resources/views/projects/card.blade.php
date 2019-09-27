<div class="card">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue pl-4 mb-3">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>
    <div class="text-grey">{{ str_limit($project->description) }}</div>
</div>