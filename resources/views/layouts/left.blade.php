<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <div class="items">
       @isset($data)
        
        <ul>
        @foreach($data as $row)
            <li>{{ $row ->name }}</li>
        @endforeach
        </ul> 
       
   @endisset
    </div>
</div>