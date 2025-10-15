@extends('front.layouts.app')
@section('content')
    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12">

                    <!--Description-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$page->translateOrDefault(session()->get('locale'))->title }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <p>
                                    {!! $page->translateOrDefault(session()->get('locale'))->content !!}
                                </p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
