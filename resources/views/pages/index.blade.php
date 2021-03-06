@extends('layout.app')

{{-- Meta data --}}
@section("meta-content")
    <title>Shopping Mall Website</title>
    <style>
        #home_image{
            background-image: url("storage/images/img1.jpg");
            background-size: cover;
            display: block;
        }
        #home_image > div{
            background-color: rgba(0, 0, 0, 0.6);
            display: block;
            height: 100%;
            width: 100%;
        }
        #home1{
            padding: 5em;
        }

        #home2{
            color: #660033
        }
        .home-sub-div{
            padding: 3em;
        }
        h1{
            font-size: 50px;
        }
        p{
            font-size: 20px;
        }
        @media only screen and (min-width: 600px){
            #home_image{
                height: 100vh;
            }
        }
        @media only screen and (max-width: 600px){
            #home_image{
                background-image: url("storage/images/img1-mobile.jpg");
                background-size: cover;
                width: 100vw;
                display: block;
            }
        }
    </style>
@endsection


@section("opening-image")
    <div id="home_image">
        <div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12" id="home1">
                <h1 style="color: #fff">Shop from the Comfort of your Home Today!</h1>
                <p class="color-orange">
                    Reduce stress by conveniently shopping
                    with your mobile or tablet device from the comfort of your home
                </p>
                <p>
                    <a class="btn btn-default btn-bg">Learn more &nbsp; </span></a>    
                <p>
            </div>
        </div>
    </div>
    {{-- </div><img src="/storage/images/img1.jpg" width="100%"/> --}}
@endsection


{{-- Page Data --}}
@section("content")
    <div class="row home-sub-div" id="home2">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clip-icon">
            <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" 
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" 
            gradientUnits="userSpaceOnUse" x1="23.821" x2="459.531" y1="336.331" y2="84.774"><stop offset="0" stop-color="#dcfdee" 
            stop-opacity="0"/><stop offset=".6288" stop-color="#d2f3e4"/></linearGradient><g><g>
                <path d="m16.074 295.943c18.727 64.003 72.707 194.564 163.922 182.845 91.486-11.755 55.759-129.725 139.508-145.894 36.867-7.118 61.857 56.689 98.806 54.704 47.588-2.557 71.81-49.663 85.108-89.264 28.197-83.968-14.029-226.352-112.859-251.012-86.244-21.519-96.332 83.855-171.322 53.248-42.149-17.203-37.938-68.576-89.272-78.942-155.298-31.359-138.81 189.15-113.891 274.315z" fill="url(#SVGID_1_)"/></g><g><g><g><g><path d="m350.232 493.402h-188.464c-16.569 0-30-13.431-30-30v-380.679c0-16.569 13.431-30 30-30h188.464c16.569 0 30 13.431 30 30v380.678c0 16.569-13.431 30.001-30 30.001z" fill="#2626bc" opacity=".1"/><path d="m350.232 469.402h-188.464c-16.569 0-30-13.431-30-30v-380.679c0-16.569 13.431-30 30-30h188.464c16.569 0 30 13.431 30 30v380.678c0 16.569-13.431 30.001-30 30.001z" fill="#6583fe"/><path d="m131.77 71.632h248.46v354.86h-248.46z" fill="#2d58e0"/><path d="m239.225 201.915h-50.943c-5.523 0-10-4.477-10-10v-47.011c0-5.523 4.477-10 10-10h50.943c5.523 0 10 4.477 10 10v47.011c0 5.523-4.477 10-10 10z" fill="#1f50c9"/><path d="m324.144 201.633h-50.943c-5.523 0-10-4.477-10-10v-47.011c0-5.523 4.477-10 10-10h50.943c5.523 0 10 4.477 10 10v47.011c0 5.523-4.477 10-10 10z" 
                fill="#1f50c9"/><g><path d="m379.948 134.622v67.01h-21.55c-5.52 0-10-4.48-10-10v-47.01c0-5.52 4.48-10 10-10z" 
                fill="#1f50c9"/></g><g><path d="m309.84 93.061h-107.68c-2.761 0-5 2.239-5 5s2.239 5 5 5h107.68c2.761 0 5-2.239 5-5s-2.238-5-5-5z" 
                fill="#fff"/></g><g><g><path d="m239.225 191.403h-50.943c-5.523 0-10-4.477-10-10v-47.011c0-5.523 4.477-10 10-10h50.943c5.523 0 10 4.477 10 10v47.011c0 5.523-4.477 10-10 10z" fill="#ff7eb8"/><g fill="#fff"><path d="m228.594 170.507h-20.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h20.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z"/><path 
                d="m228.594 154.177h-5.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h5.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z"/></g></g><g>
                <path d="m324.144 191.122h-50.943c-5.523 0-10-4.477-10-10v-47.012c0-5.523 4.477-10 10-10h50.943c5.523 0 10 4.477 10 10v47.011c0 5.523-4.477 10.001-10 10.001z" 
                fill="#02ffb3"/><g fill="#fff"><path d="m313.513 170.226h-20.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h20.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z"/>
                <path d="m313.513 153.895h-5.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h5.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z"/></g></g><g><path 
                d="m379.948 124.111v67.01h-21.55c-5.52 0-10-4.48-10-10v-47.01c0-5.52 4.48-10 10-10z" fill="#9fb0fe"/></g></g>
                <path d="m131.77 426.492v-184.74c0-13.8 11.19-25 25-25h198.46c13.81 0 25 11.2 25 25v184.74z" fill="#fff"/>
                <path d="m350.232 474.401h-188.464c-19.299 0-35-15.701-35-35v-380.677c0-19.299 15.701-35 35-35h188.464c19.299 0 35 15.701 35 35v380.678c0 19.298-15.701 34.999-35 34.999zm-188.464-440.677c-13.785 0-25 11.215-25 25v380.678c0 13.785 11.215 25 25 25h188.464c13.785 0 25-11.215 25-25v-380.678c0-13.785-11.215-25-25-25z" 
                fill="#2626bc"/><g><path d="m273.483 56.094h-34.966c-2.761 0-5-2.239-5-5s2.239-5 5-5h34.966c2.761 0 5 2.239 5 5s-2.239 5-5 5z" 
                fill="#b7c5ff"/></g><circle cx="296.813" cy="51.092" fill="#b7c5ff" r="5.002"/></g></g><g><g>
                <path d="m234.594 249.062h-20.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h20.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#00d890"/>
                <path d="m336.594 269.335h-122.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h122.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#9fb0fe"/></g>
                <path d="m184.926 279.335h-20.272c-2.761 0-5-2.239-5-5v-20.272c0-2.761 2.239-5 5-5h20.272c2.761 0 5 2.239 5 5v20.272c0 2.761-2.239 5-5 5z" fill="#02ffb3"/>
                </g><g><g><path d="m234.594 311.006h-20.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h20.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#ff5ba8"/>
                <path d="m336.594 331.278h-122.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h122.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#9fb0fe"/></g>
                <path d="m184.926 341.278h-20.272c-2.761 0-5-2.239-5-5v-20.272c0-2.761 2.239-5 5-5h20.272c2.761 0 5 2.239 5 5v20.272c0 2.761-2.239 5-5 5z" fill="#ff7eb8"/>
                </g><g><g><path d="m234.594 372.949h-20.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h20.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#6583fe"/>
                <path d="m336.594 393.221h-122.681c-2.761 0-5 2.239-5 5s2.239 5 5 5h122.681c2.761 0 5-2.239 5-5s-2.239-5-5-5z" fill="#9fb0fe"/></g>
                <path d="m184.926 403.221h-20.272c-2.761 0-5-2.239-5-5v-20.272c0-2.761 2.239-5 5-5h20.272c2.761 0 5 2.239 5 5v20.272c0 2.761-2.239 5-5 5z" fill="#9fb0fe"/>
                </g></g><path d="m418.336 397.24c-7.88 0-14.291-6.411-14.291-14.292s6.411-14.292 14.291-14.292 14.291 6.411 14.291 14.292-6.411 14.292-14.291 14.292zm0-18.583c-2.366 0-4.291 1.925-4.291 4.292s1.925 4.292 4.291 4.292 4.291-1.925 4.291-4.292-1.925-4.292-4.291-4.292z" fill="#6583fe"/>
                <path d="m82.919 184.409c-2.761 0-5-2.239-5-5 0-3.309-2.691-6-6-6-2.761 0-5-2.239-5-5s2.239-5 5-5c3.309 0 6-2.691 6-6 0-2.761 2.239-5 5-5s5 2.239 5 5c0 3.309 2.691 6 6 6 2.761 0 5 2.239 5 5s-2.239 5-5 5c-3.309 0-6 2.691-6 6 0 2.761-2.239 5-5 5z" fill="#01eca5"/>
                <path d="m432.652 442.493c-2.762 0-5-2.239-5-5 0-3.309-2.691-6-6-6-2.762 0-5-2.239-5-5s2.238-5 5-5c3.309 0 6-2.691 6-6 0-2.761 2.238-5 5-5s5 2.239 5 5c0 3.309 2.691 6 6 6 2.762 0 5 2.239 5 5s-2.238 5-5 5c-3.309 0-6 2.691-6 6 0 2.761-2.238 5-5 5z" fill="#01eca5"/><g fill="#ff5ba8">
                <path d="m443.652 150.622c-2.762 0-5-2.239-5-5 0-3.309-2.691-6-6-6-2.762 0-5-2.239-5-5s2.238-5 5-5c3.309 0 6-2.691 6-6 0-2.761 2.238-5 5-5s5 2.239 5 5c0 3.309 2.691 6 6 6 2.762 0 5 2.239 5 5s-2.238 5-5 5c-3.309 0-6 2.691-6 6 0 2.761-2.238 5-5 5z"/>
                <path d="m72.627 233.706c-2.761 0-5-2.239-5-5 0-3.309-2.691-6-6-6-2.761 0-5-2.239-5-5s2.239-5 5-5c3.309 0 6-2.691 6-6 0-2.761 2.239-5 5-5s5 2.239 5 5c0 3.309 2.691 6 6 6 2.761 0 5 2.239 5 5s-2.239 5-5 5c-3.309 0-6 2.691-6 6 0 2.761-2.238 5-5 5z"/></g></g></g>
            </svg>
            <div class="icon-cap">
                Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from 
                <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding: 2em 0em 3em 0em">
            <h1>
                Get Amazing Shopping Experience 
            </h1> <hr>
            <p>
                Utilize our mobile app facility to optimize your shopping experience
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Get app now</a>
            </p>
        </div>
    </div>
    <div class="row home-sub-div bg-grey" id="home3">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clip-icon" id="know-clip-art-mobile">
            <svg id="regular" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m19 12c0 2.16-.98 4.16-2.67 5.5-.69.54-1.14 1.25-1.28 2.01-.02-.01-.03-.01-.05-.01h-6c-.02 0-.05 0-.07.01-.14-.79-.55-1.48-1.14-1.92-2.18-1.65-3.2-4.35-2.64-7.07.55-2.65 2.7-4.81 5.35-5.36 2.11-.45 4.27.07 5.91 1.4 1.65 1.34 2.59 3.32 2.59 5.44z" fill="#ffc107"/><path d="m15.05 19.51c-.03.17-.05.34-.05.52v2.22c0 .96-.79 1.75-1.75 1.75h-2.5c-.84 0-1.75-.64-1.75-2.04v-1.77c0-.23-.02-.46-.07-.68.02-.01.05-.01.07-.01h6c.02 0 .03 0 .05.01z" fill="#607d8b"/><path d="m14.25 21h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m12 3.457c-.414 0-.75-.336-.75-.75v-1.957c0-.414.336-.75.75-.75s.75.336.75.75v1.957c0 .414-.336.75-.75.75z"/><path d="m18.571 6.179c-.192 0-.384-.073-.53-.22-.293-.293-.293-.768 0-1.061l1.384-1.384c.293-.293.768-.293 1.061 0s.293.768 0 1.061l-1.384 1.384c-.147.146-.339.22-.531.22z"/><path d="m23.25 12.75h-1.957c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.957c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m19.955 20.705c-.192 0-.384-.073-.53-.22l-1.384-1.384c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l1.384 1.384c.293.293.293.768 0 1.061-.147.147-.339.22-.531.22z"/><path d="m4.045 20.705c-.192 0-.384-.073-.53-.22-.293-.293-.293-.768 0-1.061l1.384-1.384c.293-.293.768-.293 1.061 0s.293.768 0 1.061l-1.384 1.384c-.147.147-.339.22-.531.22z"/><path d="m2.707 12.75h-1.957c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.957c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m5.429 6.179c-.192 0-.384-.073-.53-.22l-1.384-1.384c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l1.384 1.384c.293.293.293.768 0 1.061-.148.146-.339.22-.531.22z"/><path d="m15.75 12.5c-.414 0-.75-.336-.75-.75 0-1.517-1.233-2.75-2.75-2.75-.414 0-.75-.336-.75-.75s.336-.75.75-.75c2.343 0 4.25 1.907 4.25 4.25 0 .414-.336.75-.75.75z"/><path d="m13.25 24h-2.5c-.843 0-1.75-.64-1.75-2.044v-1.764c0-1.061-.452-2.035-1.209-2.605-2.185-1.645-3.196-4.351-2.639-7.062.545-2.656 2.694-4.813 5.347-5.368 2.11-.444 4.268.07 5.914 1.408 1.644 1.336 2.587 3.317 2.587 5.435 0 2.158-.975 4.161-2.675 5.498-.842.662-1.325 1.584-1.325 2.529v2.223c0 .965-.785 1.75-1.75 1.75zm-1.264-17.498c-.392 0-.787.041-1.182.123-2.076.434-3.757 2.122-4.184 4.201-.439 2.137.355 4.269 2.072 5.562 1.131.852 1.807 2.274 1.807 3.804v1.764c0 .091.012.544.25.544h2.5c.138 0 .25-.112.25-.25v-2.223c0-1.409.692-2.76 1.898-3.709 1.337-1.05 2.103-2.624 2.103-4.318 0-1.664-.742-3.221-2.034-4.271-.988-.802-2.213-1.227-3.48-1.227z"/></svg>
            <div class="icon-cap">Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding: 2em 0em 3em 0em; float:right">
            <h1>
                Did You Know?
            </h1> <hr>
            <p>
                Weekends and holidays are the likely days to see
                large traffic in malls. Save time by using just 
                your mobile to shop and satisfy your needs.
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Get started</a>
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clip-icon" id="know-clip-art">
            <svg id="regular" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m19 12c0 2.16-.98 4.16-2.67 5.5-.69.54-1.14 1.25-1.28 2.01-.02-.01-.03-.01-.05-.01h-6c-.02 0-.05 0-.07.01-.14-.79-.55-1.48-1.14-1.92-2.18-1.65-3.2-4.35-2.64-7.07.55-2.65 2.7-4.81 5.35-5.36 2.11-.45 4.27.07 5.91 1.4 1.65 1.34 2.59 3.32 2.59 5.44z" fill="#ffc107"/><path d="m15.05 19.51c-.03.17-.05.34-.05.52v2.22c0 .96-.79 1.75-1.75 1.75h-2.5c-.84 0-1.75-.64-1.75-2.04v-1.77c0-.23-.02-.46-.07-.68.02-.01.05-.01.07-.01h6c.02 0 .03 0 .05.01z" fill="#607d8b"/><path d="m14.25 21h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m12 3.457c-.414 0-.75-.336-.75-.75v-1.957c0-.414.336-.75.75-.75s.75.336.75.75v1.957c0 .414-.336.75-.75.75z"/><path d="m18.571 6.179c-.192 0-.384-.073-.53-.22-.293-.293-.293-.768 0-1.061l1.384-1.384c.293-.293.768-.293 1.061 0s.293.768 0 1.061l-1.384 1.384c-.147.146-.339.22-.531.22z"/><path d="m23.25 12.75h-1.957c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.957c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m19.955 20.705c-.192 0-.384-.073-.53-.22l-1.384-1.384c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l1.384 1.384c.293.293.293.768 0 1.061-.147.147-.339.22-.531.22z"/><path d="m4.045 20.705c-.192 0-.384-.073-.53-.22-.293-.293-.293-.768 0-1.061l1.384-1.384c.293-.293.768-.293 1.061 0s.293.768 0 1.061l-1.384 1.384c-.147.147-.339.22-.531.22z"/><path d="m2.707 12.75h-1.957c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.957c.414 0 .75.336.75.75s-.336.75-.75.75z"/><path d="m5.429 6.179c-.192 0-.384-.073-.53-.22l-1.384-1.384c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l1.384 1.384c.293.293.293.768 0 1.061-.148.146-.339.22-.531.22z"/><path d="m15.75 12.5c-.414 0-.75-.336-.75-.75 0-1.517-1.233-2.75-2.75-2.75-.414 0-.75-.336-.75-.75s.336-.75.75-.75c2.343 0 4.25 1.907 4.25 4.25 0 .414-.336.75-.75.75z"/><path d="m13.25 24h-2.5c-.843 0-1.75-.64-1.75-2.044v-1.764c0-1.061-.452-2.035-1.209-2.605-2.185-1.645-3.196-4.351-2.639-7.062.545-2.656 2.694-4.813 5.347-5.368 2.11-.444 4.268.07 5.914 1.408 1.644 1.336 2.587 3.317 2.587 5.435 0 2.158-.975 4.161-2.675 5.498-.842.662-1.325 1.584-1.325 2.529v2.223c0 .965-.785 1.75-1.75 1.75zm-1.264-17.498c-.392 0-.787.041-1.182.123-2.076.434-3.757 2.122-4.184 4.201-.439 2.137.355 4.269 2.072 5.562 1.131.852 1.807 2.274 1.807 3.804v1.764c0 .091.012.544.25.544h2.5c.138 0 .25-.112.25-.25v-2.223c0-1.409.692-2.76 1.898-3.709 1.337-1.05 2.103-2.624 2.103-4.318 0-1.664-.742-3.221-2.034-4.271-.988-.802-2.213-1.227-3.48-1.227z"/></svg>
            <div class="icon-cap">Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </div>
    </div>
    <div class="row home-sub-div" id="home4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="padding: 2em 0em 3em 0em">
            <h1 class="text-center">
                Food Items Collections
            </h1> <hr style="float:none">
            <div class="col-12 collections-container flexbox-container">
                {{-- Block for single product --}}
                <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row home-sub-div bg-grey" id="home5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="padding: 2em 0em 3em 0em">
            <h1 class="text-center">
                Dressing and Grooming Collections
            </h1> <hr style="float:none">
            <div class="col-12 collections-container flexbox-container">
                {{-- Block for single product --}}
                <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>

                 {{-- Block for single product --}}
                 <div class="product-collection col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div class="col-12 product">
                        <a href="#!">
                            <div class="col-12 product-list-image" style="background-image: url('/storage/images/img4.png')">
                            </div>
                            <div class="row product-list-info">
                                <div class="col-12" style="font-weight:bold;"> Product Title comes here </div> 
                                <div class="col-12"> $10 </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row home-sub-div" id="home6">
        <div class="col-12" id="div-testimonial-block">
            <h1 class="text-center">
                Testimonials and Reviews
            </h1> 
            <div class="col-12">
                <hr class="home-hr col-1" style="float:none; clear:left;10px">
            </div>
            <div class="col-12 testimonial-container flexbox-container">
                {{-- Block for each review --}}
                <div class="testimonial col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div>
                        <div class="passport" style="float: none; margin:auto;">

                        </div>
                        <div class="col-12 passport-bearer" style="float: none; margin:auto;">
                            <p>Justice Igoma </p> 
                        </div>
                        <div>
                            <p>
                                This shopping mall is so swift in their payments and deliveries
                                that I barely notice any flaw. Thanks for your services
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Block for each review --}}
                <div class="testimonial col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div>
                        <div class="passport" style="float: none; margin:auto;">

                        </div>
                        <div class="col-12 passport-bearer" style="float: none; margin:auto;">
                            <p>Justice Igoma </p> 
                        </div>
                        <div>
                            <p>
                                This shopping mall is so swift in their payments and deliveries
                                that I barely notice any flaw. Thanks for your services
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Block for each review --}}
                <div class="testimonial col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div>
                        <div class="passport" style="float: none; margin:auto;">

                        </div>
                        <div class="col-12 passport-bearer" style="float: none; margin:auto;">
                            <p>Justice Igoma </p> 
                        </div>
                        <div>
                            <p>
                                This shopping mall is so swift in their payments and deliveries
                                that I barely notice any flaw. Thanks for your services
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Block for each review --}}
                <div class="testimonial col-lg-3 col-sm-3 col-md-3 col-xs-10">
                    <div>
                        <div class="passport" style="float: none; margin:auto;">

                        </div>
                        <div class="col-12 passport-bearer" style="float: none; margin:auto;">
                            <p>Justice Igoma </p> 
                        </div>
                        <div>
                            <p>
                                This shopping mall is so swift in their payments and deliveries
                                that I barely notice any flaw. Thanks for your services
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@endsection