@extends('layouts.Front.master-front')
@section('content')
<main>
    <div class="commonBanner">
        <div class="backDrop"></div>
        <div class="contentBanner">
            <h4>Blog</h4>
            <p><span><i class="fa fa-home" aria-hidden="true"></i></span> Home / Blog</p>
        </div>
    </div>
    <div class="blog_detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_img">
                        <img src="{{asset('img/news2.png')}}" alt="" class="img-fluid">
                    </div>
                    <p class="date_time_author">1, Sep 2021 by John Doe</p>
                    <div class="blog_content">
                        <h4 class="blog_title">High Quality Treatment For Kids.</h4>
                        <p class="blog_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit ornare
                            congue porttitor eget vel bibendum urna sed. Amet, ac enim massa sagittis ac lobortis
                            fermentum. Enim, sed et ut non aliquet vitae. Magna aliquet lectus erat turpis eros.
                            Bibendum volutpat aliquam porttitor gravida phasellus consectetur faucibus leo pulvinar. At
                            fermentum neque habitant scelerisque felis. Placerat tortor fermentum pulvinar neque, nunc
                            quis feugiat ultrices ac. Ut non viverra nunc arcu est suspendisse ornare amet gravida.
                            Vitae potenti velit id magna pulvinar scelerisque et phasellus ut. Quis purus non eget diam
                            iaculis sed erat cras. Ut ultrices laoreet dictumst placerat mattis. Est eget a tincidunt
                            amet at nec euismod diam faucibus. Velit ipsum tempor a, posuere nam adipiscing felis,
                            eleifend. Semper felis, auctor auctor ultrices nulla sed et vivamus egestas. In in etiam
                            pharetra pellentesque fermentum lacus eget in morbi. Vitae vel sit ac arcu vestibulum tellus
                            vulputate vel. Lobortis est, accumsan faucibus magna dui ipsum a viverra. Elementum congue
                            cursus mattis adipiscing arcu euismod nulla molestie. Scelerisque iaculis sagittis hendrerit
                            odio urna id eu at tincidunt. Ante feugiat lacus etiam metus massa. Turpis at eget amet
                            pulvinar sagittis, neque ac. Rhoncus elit amet lectus quam sollicitudin egestas id quam.
                            Lacus fermentum nulla imperdiet eu cursus aliquam semper est massa. Nulla sit placerat
                            mattis quis luctus. Leo mollis quam vitae turpis eget pellentesque enim lacus. Diam purus
                            nullam congue urna pharetra quam nam aenean. Volutpat, dui sed tristique ut a. Volutpat in
                            nec consequat, a. Eget varius etiam hendrerit scelerisque volutpat quis. Turpis sed sit
                            egestas ut facilisis at eget dui massa. Magna sed consequat vitae purus accumsan id gravida
                            gravida. A aliquam ornare aliquet nisl amet, convallis nisi, sagittis. Massa interdum
                            viverra id mollis pellentesque ipsum a sed cras. Purus tempus non enim lobortis. Ut diam
                            scelerisque enim, cursus auctor. Senectus est pellentesque mattis in odio id purus.
                            Habitasse in ultrices justo, velit nulla odio ut magna ac. Volutpat faucibus ligula tortor
                            convallis nisi gravida libero. Vel tincidunt suspendisse mauris at. Non rhoncus nam vitae ut
                            felis sagittis, massa leo. Sit placerat faucibus pretium, suspendisse egestas tempor enim.
                            Enim, amet amet scelerisque nunc senectus nam risus nisi. Massa ut ornare volutpat eu
                            ullamcorper laoreet. Sit nunc scelerisque amet nisi ultricies sem. Lacinia sed ultricies
                            ante nibh. Maecenas adipiscing suscipit nunc, ultricies et. Condimentum quam iaculis fames
                            lorem aliquam in sed. Suspendisse elementum faucibus ut elementum tristique dolor, fermentum
                            eget. Felis ut gravida et aenean.</p>
                    </div>
                    <div class="leatestNew">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="commonTitle">Recent News</h3>
                            </div>
                        </div>
                        <div class="multiNews">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="newsDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('img/news2.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="newsContent">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> January 1,
                                                2022</span>
                                            <h5>High Quality Treatment For Kids.</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                            <a href="">Read more <span><i class="fa fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="newsDiv">
                                        <div class="imgDiv">
                                            <img src="{{asset('img/news3.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="newsContent">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> January 1,
                                                2022</span>
                                            <h5>High Quality Treatment For Kids.</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                                            <a href="">Read more <span><i class="fa fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="search_div">
                        <h4>Search Blog</h4>
                        <div class="formDiv">
                            <form action="">
                                <div class="inputDiv">
                                    <input type="text" name="search_type" id="search_type"
                                        placeholder="Type here your Type">
                                </div>
                                <div class="inputDiv">
                                    <select name="search_category" id="search_category">
                                        <option value="Medical">Medical</option>
                                    </select>
                                </div>
                                <button>Find Blog</button>
                            </form>
                        </div>
                    </div>
                    <div class="social_div">
                        <h4>Share With Us</h4>
                        <ul>
                            <li>
                                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
