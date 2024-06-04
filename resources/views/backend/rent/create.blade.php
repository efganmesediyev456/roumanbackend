@extends("backend.layouts.layout")

@section("content")

    @php
    $languages=['az','en','ru'];
    @endphp

   <div class="card p-4">
       <form  action = "{{route("rent.store")}}" method="POST" enctype="multipart/form-data">

           @csrf


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
                               <label for="example-search-input" class="col-md-2 col-form-label">Title {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="title[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('title.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Title2 {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="title2[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('title2.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Title3 {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="title3[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('title3.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Title4 {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="title4[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('title4.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Price Detail {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="price_detail[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('price_detail.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>






                           <div class="mb-3 row">
                               <label for="example-email-input" class="col-md-2 col-form-label">Status</label>
                               <div class="col-md-10">
                                   <div class="form-check mb-3">
                                       <input  class="form-check-input" type="radio" name="status[{{$lang}}]" value="1" id="formRadios1" checked="">
                                       <label class="form-check-label" for="formRadios1">
                                           Aktiv
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="status[{{$lang}}]" value="0" id="formRadios2">
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

                               <input name="order" class="form-control form-control-lg" id="formFileLg" type="number">

                               @error('order')
                               <div class="text-danger mt-2">{{$message}}</div>
                               @enderror

                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="example-search-input" class="col-md-2 col-form-label"> Rent Category</label>
                           <div class="col-md-10">

                               <select name="rent_category_id" class="form-control form-control-lg" id="formFileLg" type="number">
                                   @foreach($rentcategories as $category)
                                       <option value="{{$category->id}}">{{$category->title}}</option>
                                       @endforeach
                               </select>

                               @error('order')
                               <div class="text-danger mt-2">{{$message}}</div>
                               @enderror

                           </div>
                       </div>


                       <div class="mb-3 row">
                       <label for="example-search-input" class="col-md-2 col-form-label"> Image</label>
                       <div class="col-md-10">

                           <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">

                           @error('image')
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

@endsection
