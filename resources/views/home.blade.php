@extends('layouts.app')

@section('content')
<div class="container pl-5">
<div class="row">
    <div class="col-3 p-5"><img src="https://scontent-bos3-1.cdninstagram.com/v/t51.2885-19/s320x320/75601593_2416145665368344_3873246514495094784_n.jpg?_nc_ht=scontent-bos3-1.cdninstagram.com&_nc_ohc=EZxztywOGRUAX_lp0Y6&oh=356f69b04b3494e6cfd99b7fe1cb645c&oe=5EE6861D" style="height: 200px;" class="rounded-circle" alt=""></div>
    <div class="col-9 pt-5">
    <div>
        <h1>{{$user->username}}</h1>
    </div>
        <div class="d-flex">
            <div class="pr-5"><strong>200</strong> posts</div>
            <div class="pr-5"><strong>1k</strong> followers</div>
            <div class="pr-5"><strong>200</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="vikrampathalam.now.sh" target="_blank">{{ $user->profile->url }}</a></div>
    </div>
    <div class="row pt-4">
        <div class="col-4"><img style="height: 300px;" src="https://scontent-bos3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c135.0.809.809a/s640x640/23824897_158737754734557_4401944528932569088_n.jpg?_nc_ht=scontent-bos3-1.cdninstagram.com&amp;_nc_cat=109&amp;_nc_ohc=P8DWNTTGMKsAX8VGUda&amp;oh=9f14b1efea86391246074013acd2cd82&amp;oe=5EE71752" alt=""></div>
        <div class="col-4"><img style="height: 300px;" src="https://scontent-bos3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/22709390_185925888644506_1526082196157235200_n.jpg?_nc_ht=scontent-bos3-1.cdninstagram.com&amp;_nc_cat=110&amp;_nc_ohc=pcExtTs3EJsAX9ESGLF&amp;oh=bd45bc6db64bae96c649a33daeb05807&amp;oe=5EE6479F" alt=""></div>
        <div class="col-4"><img style="height: 300px;" src="https://scontent-bos3-1.cdninstagram.com/v/t51.2885-15/e35/18812621_778866565608410_1616326275159293952_n.jpg?_nc_ht=scontent-bos3-1.cdninstagram.com&amp;_nc_cat=102&amp;_nc_ohc=O61RX2D-6AIAX_o5dQq&amp;oh=6af9399c7c79429fdf2ed30394547f74&amp;oe=5EE60F4E" alt=""></div>
    </div>
</div>
</div>
@endsection
