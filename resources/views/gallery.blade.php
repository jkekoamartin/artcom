@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Gallery</h1></div>

                    <div class="panel-body">

                        <div style="padding-bottom: 17px;align-content: center" >
                            <div style="text-align: center;padding-bottom: 17px"><img src = {{asset('img/art1.jpg')}} width="70%" ></div>
                            <div style="text-align: justify; width: 70%;height: auto;margin: auto;position: relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur mi justo, vitae imperdiet tortor ornare in. Suspendisse feugiat, metus eu tincidunt fringilla, enim sapien dignissim sem, at rutrum nunc neque et felis. In hac habitasse platea dictumst. Maecenas nulla nisi, semper a metus malesuada, eleifend interdum lorem. Vestibulum eu facilisis urna.
                            </div>
                        </div>

                        <div style="padding-bottom: 17px">
                            <div style="text-align: center;padding-bottom: 17px"><img src = {{asset('img/art2.jpg')}} width="70%" ></div>
                            <div style="text-align: justify; width: 70%;height: auto;margin: auto;position: relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur mi justo, vitae imperdiet tortor ornare in. Suspendisse feugiat, metus eu tincidunt fringilla, enim sapien dignissim sem, at rutrum nunc neque et felis. In hac habitasse platea dictumst. Maecenas nulla nisi, semper a metus malesuada, eleifend interdum lorem. Vestibulum eu facilisis urna.
                            </div>
                        </div>

                        <div style="padding-bottom: 17px">
                            <div style="text-align: center;padding-bottom: 17px"><img src = {{asset('img/art3.jpg')}} width="70%" ></div>
                            <div style="text-align: justify; width: 70%;height: auto;margin: auto;position: relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur mi justo, vitae imperdiet tortor ornare in. Suspendisse feugiat, metus eu tincidunt fringilla, enim sapien dignissim sem, at rutrum nunc neque et felis. In hac habitasse platea dictumst. Maecenas nulla nisi, semper a metus malesuada, eleifend interdum lorem. Vestibulum eu facilisis urna.
                            </div>
                        </div>

                        <div style="padding-bottom: 17px">
                            <div style="text-align: center;padding-bottom: 17px"><img src = {{asset('img/art4.jpg')}} width="70%" ></div>
                            <div style="text-align: justify; width: 70%;height: auto;margin: auto;position: relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur mi justo, vitae imperdiet tortor ornare in. Suspendisse feugiat, metus eu tincidunt fringilla, enim sapien dignissim sem, at rutrum nunc neque et felis. In hac habitasse platea dictumst. Maecenas nulla nisi, semper a metus malesuada, eleifend interdum lorem. Vestibulum eu facilisis urna.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection