<div>
    <article>
        <h3>{{ $item->Lesson->name }}</h3>
        <h4>{{ $item->name }}</h4>
        <p>{{ $item->Status }}</p>
        <a href="{{ URL::to('assesshow/'.$item->id) }}"><button type="submit">View Questions</button></a>
        <a href="{{ URL::to('assesedit/'.$item->id) }}"><button type="submit">Update</button></a>
        <a href="{{ URL::to('assesdelete/'.$item->id) }}"><button type="submit">Delete</button></a>
    </article>
</div>