@extends('client.compoment.header')
{{--@section('slider')--}}
    {{--@include('client.compoment.slider')--}}
{{--@endsection--}}
@section('about')
    <div id="fh5co-contact" data-section="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center section-heading">
                    <h2 class="fh5co-section-title animate-box">Liên hệ</h2>
                    <p class="fh5co-lead animate-box">{{isset($thongtin->tenshop) ? $thongtin->tenshop : 'S2B' }}</p>
                    <p class="animate-box">{{isset($thongtin->tenchushop) ? $thongtin->tenchushop : 'S2B'}}</p>
                    <p class="animate-box">{{isset($thongtin->diachi) ? $thongtin->diachi : 'S2B'}} - {{isset($thongtin->sodienthoai) ? $thongtin->sodienthoai : 'S2B'}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection