@if (isset($_GET['action']) && $_GET['action'] == 1)
    <iframe width="800" height="450" src="https://www.youtube.com/embed/lfTmPsCTnnE?si=3O5U12A2YnQbXyHl?autoplay=1"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
@else

{!! $content !!}

@endif