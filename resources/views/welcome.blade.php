@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row text-center">
                <h1 class="title">Pesquisas Atuais</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Ondas Gravitacionais</h4>
                            <p class="category">Category subtitle</p>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, delectus eius
                                incidunt natus nihil rerum. Culpa, distinctio eligendi, esse, eum ex illo illum
                                officiis quod recusandae reiciendis rem voluptate voluptatem?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Computação quantica</h4>
                            <p class="category">Category subtitle</p>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad dicta,
                                dolorem eligendi exercitationem illo impedit in labore mollitia neque nesciunt odio,
                                omnis perspiciatis quas quisquam, quos reiciendis suscipit!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Outras Coisas</h4>
                            <p class="category">Category subtitle</p>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cum distinctio
                                dolore expedita illum molestiae nobis numquam perspiciatis ut, voluptatem. Debitis
                                id illo itaque nesciunt obcaecati officiis pariatur quaerat sit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <h1 class="title">Publicações</h1>
            </div>
            <div class="row">
                <div class="container">
                    <div class="container text-center">
                        <h2 class="border-bottom">Publicações do ano de 2018</h2>
                    </div>
                    <!--first section-->
                    <div class="row align-items-center how-it-works d-flex">
                        <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">1</div>
                        </div>
                        <div class="col-6">
                            <h5>Quantica</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                        </div>
                    </div>
                    <!--path between 1-2-->
                    <div class="row timeline">
                        <div class="col-2">
                            <div class="corner top-right"></div>
                        </div>
                        <div class="col-8">
                            <hr/>
                        </div>
                        <div class="col-2">
                            <div class="corner left-bottom"></div>
                        </div>
                    </div>
                    <!--second section-->
                    <div class="row align-items-center justify-content-end how-it-works d-flex">
                        <div class="col-6 text-right">
                            <h5>Ondas Gravitacionais</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                        </div>
                        <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">2</div>
                        </div>
                    </div>
                    <!--path between 2-3-->
                    <div class="row timeline">
                        <div class="col-2">
                            <div class="corner right-bottom"></div>
                        </div>
                        <div class="col-8">
                            <hr/>
                        </div>
                        <div class="col-2">
                            <div class="corner top-left"></div>
                        </div>
                    </div>
                    <!--third section-->
                    <div class="row align-items-center how-it-works d-flex">
                        <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                            <div class="circle font-weight-bold">3</div>
                        </div>
                        <div class="col-6">
                            <h5>Outra coisa</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <h1 class="title">Membros</h1>
            </div>
            <div class="row">
                <!------ Include the above in your HEAD tag ---------->

                <div class="border-bottom container text-center">
                    <h2>Research Team</h2>
                </div>


                <div class="container">
                    <div class="row">

                        <!--team-1-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="{{ URL::asset('images/faces/avatar.jpg') }}" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--team-1-->

                        <!--team-2-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="http://taef.com.br/images/tiago.jpg" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--team-2-->

                        <!--team-3-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="http://taef.com.br/images/tiago.jpg" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--team-3-->

                        <!--team-4-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="http://taef.com.br/images/tiago.jpg" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--team-4-->

                        <!--team-5-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="http://taef.com.br/images/tiago.jpg" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>

                            </div>
                        </div>
                        <!--team-5-->

                        <!--team-6-->
                        <div class="col-lg-4">
                            <div class="our-team-main">

                                <div class="team-front">
                                    <img src="http://taef.com.br/images/tiago.jpg" class="img-fluid" />
                                    <h3>Dilip Kevat</h3>
                                    <p>Web Designer</p>
                                </div>

                                <div class="team-back">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque penatibus et magnis dis parturient montes,
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                    natoque.
                                    </span>
                                </div>

                            </div>
                        </div>
                        <!--team-6-->
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
@endsection
