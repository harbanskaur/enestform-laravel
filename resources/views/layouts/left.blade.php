<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <div class="items">

    @isset ($data)
        <ul>
            @foreach($data as $row)
            <a href="{{url('category/'.$row->id) }}">
                <li>{{ $row ->name }}</li>
            </a>
            @endforeach
        </ul> 
     @endisset
    </div>
</div>