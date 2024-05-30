@extends("backend.layouts.layout")

@section("content")

    @php
        $languages=['az','en','ru'];
    @endphp

    <div class="card p-4">
        <form  action = "{{route("banner.update", $banner->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method("PUT")


            <div class="card-header bg-transparent border-bottom">
                <div class="d-flex flex-wrap align-items-start">


                    <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                        @foreach($languages as $key=>$lang)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($key==0) active @endif" data-bs-toggle="tab" href="#post-recent-{{$lang}}" role="tab" aria-selected="true">
                                    {{$lang}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="card-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($languages as $key=>$lang)
                        <div class="tab-pane @if($key==0) active show @endif " id="post-recent-{{$lang}}" role="tabpanel">



                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Url {{$lang}}</label>
                                <div class="col-md-10">
                                    <input class="form-control" value="{{$banner->translate($lang)->url}}" name="url[{{$lang}}]" value="" type="text" id="example-search-input">
                                    @error('url.'.$lang)
                                    <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>




                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Status</label>
                                <div class="col-md-10">
                                    <div class="form-check mb-3">
                                        <input @checked($banner->translate($lang)->status==1)  class="form-check-input" type="radio" name="status[{{$lang}}]" value="1" id="formRadios1" checked="">
                                        <label class="form-check-label" for="formRadios1">
                                            Aktiv
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input @checked($banner->translate($lang)->status==0) class="form-check-input" type="radio" name="status[{{$lang}}]" value="0" id="formRadios2">
                                        <label class="form-check-label" for="formRadios2">
                                            Deaktiv
                                        </label>
                                    </div>

                                    @error('status.'.$lang)
                                    <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>



                        </div>
                    @endforeach


                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label"> Order</label>
                        <div class="col-md-10">

                            <input value="{{$banner->order}}" name="order" class="form-control form-control-lg" id="formFileLg" type="number">

                            @error('order')
                            <div class="text-danger mt-2">{{$message}}</div>
                            @enderror

                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label"> Image</label>
                        <div class="col-md-10">

                            <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">

                            <img width="400px" class="my-3" src="/storage/banner/{{$banner->image}}" alt="">
                            @error('image')
                            <div class="text-danger mt-2">{{$message}}</div>
                            @enderror

                        </div>
                    </div>





                    <div class="mb-3 row" style="float: right">
                        <div class="col-12" >
                            <input  class="form-control btn btn-success d-inline" type="submit" value="update" placeholder=""  id="example-email-input">
                        </div>
                    </div>

                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->


            </div>



            @csrf


        </form>
    </div>

@endsection
