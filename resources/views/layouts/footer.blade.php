<footer class="text-muted py-5">
    <div class="container">
        <ul>
            @foreach($categories as $category)
                <li><a href="">{{ $category->title }}</a></li>
            @endforeach
        </ul>
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>&copy; {{ date('Y') }}</p>
    </div>
</footer>
