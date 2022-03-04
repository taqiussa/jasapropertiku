<!-- Search widget-->
<div class="card mb-4">
    <div class="card-header">Search</div>
    <div class="card-body">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}" />
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}" />
            @endif
            <div class="input-group">
                <input class="form-control" type="text" name="search" placeholder="Enter search term..." value="{{ request('search') }}"/>
                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
            </div>
        </form>
    </div>
</div>
<!-- Categories widget-->
<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Side widget-->
<div class="card mb-4">
    <div class="card-header">Side Widget</div>
    <div class="card-body">You can put anything you want inside of these side widgets. They are
        easy to use, and feature the Bootstrap 5 card component!</div>
</div>
