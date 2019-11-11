<div>
    <span style="font-size: 20px;"> Inquiry Message </span>
    <br><br><br>
    <span style="font-size: 18px;"> Client Name: {{$name}} </span>
    <br>
    <span style="font-size: 18px;"> Email: {{$email}}</span>
    <br>
    <span style="font-size: 18px;"> Contact Number: {{$contact}}</span>
    
    @foreach ($checkbox as $item)
    <div>
    {{$item}}
    </div>
    @endforeach
</div>