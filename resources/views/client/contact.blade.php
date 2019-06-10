@extends('layouts.main')
@section('content') 
@section('title','Contact')
<!--Contact-->
<div class="container top-container" style="padding-bottom:1%">
    <div class="wrapper container">
        <div class="row bg-white">
            <div class="col-md-12" style="text-align: center">
                <h1 class="font" style="padding-top: 2%">Contact</h1>
            </div>
            <div class="col-md-12" style="padding-left:5%">
                <div class="col-md-6">
                    <h1 class="font" style="padding-left: 5%">Address</h1>
                </div>
            </div>
            <div class="col-md-6 contact-info">
                <div class="col-md-12" style="display: flex">
                    <i
                        class="material-icons"
                        style="font-size:25px;color:rgba(33, 190, 33, 0.685)"
                        >phone</i
                    >
                    <p>+976 9911 2044</p>
                </div>
                <div class="col-md-12" style="display: flex">
                    <i
                        class="material-icons"
                        style="font-size:25px;color:rgba(33, 190, 33, 0.685)"
                        >location_on</i
                    >
                    <p>Tamir Camp Road, Terelj, Nalaikha, 12770, Mongolia</p>
                </div>
                <div class="col-md-12" style="display: flex">
                    <i
                        class="material-icons"
                        style="font-size:25px;color:rgba(33, 190, 33, 0.685)"
                        >mail</i
                    >
                    <p>info@tamirwellness.com</p>
                </div>
                <div class="col-md-12" style="height: 75%;">
                    <iframe
                        src="https://maps.google.com/maps?q=tamir%20wellness&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="100%"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                    ></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <p class="send-us formcss font" style="padding-bottom:2%">
                        Send us your booking request
                    </p>
                </div>
                <div class="col-md-12" id="formcss">
                    <input
                        type="text"
                        class="form-control"
                        id="name form"
                        placeholder="name"
                        name="name"
                    />
                </div>
                <div class="col-md-12" id="formcss">
                    <input
                        type="email"
                        class="form-control"
                        id="email form"
                        placeholder="email"
                        name="email"
                    />
                </div>
                <div class="col-md-12" id="formcss">
                    <input
                        type="phone"
                        class="form-control"
                        id="number form"
                        placeholder="phone number"
                        name="number"
                    />
                </div>
                <div class="col-md-12" id="formcss">
                    <textarea
                        type="text"
                        class="form-control"
                        id="messagse form"
                        placeholder="message"
                        name="message"
                        style="height: 110px"
                    ></textarea>
                </div>
                <div class="col-md-12">
                    <button
                        type="button"
                        class="btn"
                        style="background-color:rgba(40, 175, 40, 0.719); color:white;"
                    >
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
