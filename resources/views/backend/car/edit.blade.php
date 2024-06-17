@extends('backend.layouts.layout')

@section('content')


    <div class="row">
                            <div class="col-12">
                                <div class="card">



                                       <form  action = "{{route('car.update', $car->id)}}" method="POST" enctype="multipart/form-data">

@method('PUT')


                                        <div class="card-header bg-transparent border-bottom">
                                            <div class="d-flex flex-wrap align-items-start">


                                                <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                                                    @foreach(['az','en','ru'] as $key=>$lang)
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
                                                @foreach(['az','en','ru'] as $key=>$lang)
                                                    <div class="tab-pane @if($key==0) active show @endif " id="post-recent-{{$lang}}" role="tabpanel">
                                                    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label">Title {{$lang}}</label>
                                                        <div class="col-md-10">
                                                            <input value='{{$car->translate($lang)?->title}}' class="form-control" name="title[{{$lang}}]" value="{{old('title.'.$lang)}}" type="search"  id="example-search-input">

                                                            @error('title.'.$lang)
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    

                                                      

                                                        <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-md-2 col-form-label">Status</label>
                                                    <div class="col-md-10">
                                                         <div class="form-check mb-3">
                                                        <input @selected($car->translate($lang)->status==1) class="form-check-input" type="radio" name="status[{{$lang}}]" value="1" id="formRadios1" >
                                                        <label class="form-check-label" for="formRadios1">
                                                            Aktiv
                                                        </label>
                                                    </div>
                                                        <div class="form-check">
                                                        <input @selected($car->translate($lang)->status==0)  class="form-check-input" type="radio" name="status[{{$lang}}]" value="0" id="formRadios2" checked="">
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
                                                <!-- end tab pane -->


                                                  

    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label"> Order</label>
                                                        <div class="col-md-10">

                                                            <input value={{$car->order}} name="order" class="form-control form-control-lg" id="formFileLg" type="number">

                                                            @error('order')
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror

                                                        </div>
                                                    </div>



                                                    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label"> Image</label>
                                                        <div class="col-md-10">

                                                            <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                                                            <img width="400" class="my-3" src="/storage/car/{{$car->image}}">

                                                            @error('image')
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                   





                                                    <div class="mb-3 row" style="float: right">
                                                        <div class="col-12" >
                                                            <input  class="form-control btn btn-success d-inline" type="submit" value="Update" placeholder=""  id="example-email-input">
                                                        </div>
                                                    </div>

                                                <!-- end tab pane -->
                                            </div>
                                            <!-- end tab content -->


                                            </div>



                                           @csrf


                                       </form>
                                    </div>

                            </div> <!-- end col -->
                        </div>
@endsection
