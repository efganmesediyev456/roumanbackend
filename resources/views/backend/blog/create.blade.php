@extends('backend.layouts.layout')

@section('content')


    <div class="row">
                            <div class="col-12">
                                <div class="card">



                                       <form  action = "{{route('blog.store')}}" method="POST" enctype="multipart/form-data">



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
                                                            <input class="form-control" name="title[{{$lang}}]" value="{{old('title.'.$lang)}}" type="search"  id="example-search-input">

                                                            @error('title.'.$lang)
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label">Slug {{$lang}}</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" value="{{old('slug.'.$lang)}}" name="slug[{{$lang}}]" type="search"  id="example-search-input">

                                                            @error('slug.'.$lang)
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                            @error('slug')
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label">content {{$lang}}</label>
                                                        <div class="col-md-10">
                                                            <textarea name="content[{{$lang}}]" id="editor1" class="ckeditor" rows="10" cols="80">{{old('content.'.$lang)}}</textarea>
                                                            @error('content.'.$lang)
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                        <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label">Tags {{$lang}}</label>
                                                        <div class="col-md-10">
                                                            <textarea name="tags[{{$lang}}]" id="editor1" class="form-control" rows="10" cols="80">{{old('tags.'.$lang)}}</textarea>
                                                            @error('tags.'.$lang)
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                        <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-md-2 col-form-label">Status</label>
                                                    <div class="col-md-10">
                                                         <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio" name="status[{{$lang}}]" value="1" id="formRadios1" >
                                                        <label class="form-check-label" for="formRadios1">
                                                            Aktiv
                                                        </label>
                                                    </div>
                                                        <div class="form-check">
                                                        <input  class="form-check-input" type="radio" name="status[{{$lang}}]" value="0" id="formRadios2" checked="">
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
                                                        <label for="example-search-input" class="col-md-2 col-form-label"> Image</label>
                                                        <div class="col-md-10">

                                                            <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">

                                                            @error('image')
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label">Date</label>
                                                        <div class="col-md-10">

                                                            <div class="input-group" id="datepicker2">
                                                                <input autocomplete="off" name="date" type="text" class="form-control" value="{{old('date')}}" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" >

                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>

                                                            @error('date')
                                                            <div class="text-danger mt-2">{{$message}}</div>
                                                            @enderror

                                                        </div>
                                                    </div>






                                                    <div class="mb-3 row" style="float: right">
                                                        <div class="col-12" >
                                                            <input  class="form-control btn btn-success d-inline" type="submit" value="create" placeholder=""  id="example-email-input">
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
