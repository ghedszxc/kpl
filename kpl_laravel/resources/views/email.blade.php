<div>
    <span style="font-size: 20px;"> Inquiry Message </span>
    <br><br><br>
    <span style="font-size: 18px;"> Client Name: {{$name}} </span>
    <br>
    <span style="font-size: 18px;"> Email: {{$email}}</span>
    <br>
    <span style="font-size: 18px;"> Contact Number: {{$contact}}</span>
    <br>

    <span style="font-size: 18px;"> Inquired item:</span>
    <ol>
    @foreach ($checkbox as $item)
        <li style="font-size: 18px;">{{$item['item_name']}}</li>
    @endforeach
    </ol>
</div>