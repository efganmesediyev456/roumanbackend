@extends("backend.layouts.layout")

@section("content")

    @php
    $languages=['az','en','ru'];
    @endphp

   <div class="card p-4">
       <form  action = "{{route("tour.store")}}" method="POST" enctype="multipart/form-data">

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
                               <label for="example-search-input" class="col-md-2 col-form-label">Address {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="address[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('address.'.$lang)
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
                               <label for="example-search-input" class="col-md-2 col-form-label">Duration {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="duration[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('duration.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Accommodation {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="accommodation[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('accommodation.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Transportation {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="transportation[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('transportation.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Cuisine {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="cuisine[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('cuisine.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>
                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Guide {{$lang}}</label>
                               <div class="col-md-10">
                                   <input class="form-control" name="guide[{{$lang}}]" value="" type="text" id="example-search-input">
                                   @error('guide.'.$lang)
                                   <div class="text-danger mt-2">{{$message}}</div>
                                   @enderror
                               </div>
                           </div>



                           <div class="mb-3 row">
                               <label for="example-search-input" class="col-md-2 col-form-label">Content {{$lang}}</label>
                               <div class="col-md-10">
                                   <textarea name="content[{{$lang}}]" id="editor1" class="ckeditor" rows="10" cols="80"></textarea>
                                   @error('content.'.$lang)
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
                           <label for="example-search-input" class="col-md-2 col-form-label"> Price</label>
                           <div class="col-md-10">

                               <input name="price" any=".01" class="form-control form-control-lg" id="formFileLg" type="number">

                               @error('price')
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
                       <div class="mb-3 row">
                       <label for="example-search-input" class="col-md-2 col-form-label"> Image2</label>
                       <div class="col-md-10">

                           <input name="image2" class="form-control form-control-lg" id="formFileLg" type="file">

                           @error('image2')
                           <div class="text-danger mt-2">{{$message}}</div>
                           @enderror

                       </div>
                   </div>
                       <div class="mb-3 row">
                       <label for="example-search-input" class="col-md-2 col-form-label"> Tour Category</label>
                       <div class="col-md-10">

                           <select name="tour_category_id" class="form-control form-control-lg" id="formFileLg">
                               @foreach($tourcategories as $category)
                               <option value="{{$category->id}}">{{$category->title}}</option>
                                   @endforeach
                           </select>

                           @error('tour_category_id')
                           <div class="text-danger mt-2">{{$message}}</div>
                           @enderror

                       </div>
                   </div>
                       <div class="mb-3 row">
                       <label for="example-search-input" class="col-md-2 col-form-label">City</label>
                       <div class="col-md-10">

                           <select name="city_id" class="form-control form-control-lg" id="formFileLg">
                               @foreach($cities as $city)
                               <option value="{{$city->id}}">{{$city->title}}</option>
                                   @endforeach
                           </select>

                           @error('tour_category_id')
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
