@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Product Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Product</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <form method="POST" action="{{ route('admin.product.update', $product) }}"
                                class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10 @error('name') has-error @enderror ">
                                        <input id="" name="name" type="text" class="form-control"
                                            value="{{ $product->name }}">
                                        @error('name')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Summary</label>
                                    <div class="col-sm-10">
                                        <input id="" name="summary" type="text"  class="form-control"
                                            value="{{ $product->summary }}">
                                        @error('summary')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Industry / Page</label>

                                    <div class="col-sm-10 @error('industry_id') has-error @enderror ">
                                        <select id="" name="industry_id" class="form-control m-b" required>
                                            <option selected disabled value="">Select Industry</option>

                                            @foreach ($industries as $industry)
                                                @if ($industry->id == $product->industry_id)
                                                    <option selected value="{{ $industry->id }}">{{ $industry->name }}
                                                    </option>
                                                @endif
                                                <option value="{{ $industry->id }}">{{ $industry->name }} </option>
                                            @endforeach

                                        </select>
                                        @error('industry_id')
                                            <span class="help-block m-b-none">Industry is Required</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-2">
                                        <input id="" name="image1" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image2" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image3" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image4" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image5" type="file" class="form-control">
                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="" name="description" type="text" required class="summernote">
                                                    {{ $product->description }}
                                                </textarea>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Visible</label>

                                    <div class="col-sm-10 @error('is_active') has-error @enderror ">
                                        <select id="" name="is_active" class="form-control m-b" required>
                                            <option  disabled value="">Select</option>
                                            <option @if ($product->is_active == 1) selected @endif value="1">Public</option>
                                            <option @if ($product->is_active == 0) selected @endif  value="0">Private</option>
                                        </select>
                                        @error('is_active')
                                            <span class="help-block m-b-none">Select Visiblelity</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <h2>For SEO</h2>

                                    </div>

                                </div>

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Meta Title</label>
                                    <div class="col-sm-10 @error('meta_tag_title') has-error @enderror ">
                                        <input id="" name="meta_tag_title" type="text" placeholder=""
                                            class="form-control" value="{{ $product->meta_tag_title }}">
                                        @error('meta_tag_title')
                                            <span class="help-block m-b-none">Title is Required</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Meta Keywords</label>
                                    <div class="col-sm-10 @error('meta_tag_keywords') has-error @enderror ">
                                        <input id="" name="meta_tag_keywords" type="text" placeholder="tag1, tag2, tag3 ..."
                                            class="form-control" value="{{ $product->meta_tag_keywords }}">
                                        @error('meta_tag_keywords')
                                            <span class="help-block m-b-none">keywords is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-10 @error('meta_tag_description') has-error @enderror ">
                                        <textarea name="meta_tag_description" id="" cols="136" rows="10"
                                            placeholder="Optional"> {{ $product->meta_tag_description }}</textarea>
                                        {{-- <span class="help-block m-b-none">Optional</span> --}}
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 1</label>
                                    <div class="col-sm-10 @error('image_alt_1') has-error @enderror ">
                                        <input id="" name="image_alt_1" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $product->image_alt_1 }}">
                                        @error('image_alt_1')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 2</label>
                                    <div class="col-sm-10 @error('image_alt_2') has-error @enderror ">
                                        <input id="" name="image_alt_2" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $product->image_alt_2 }}">
                                        @error('image_alt_2')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 3</label>
                                    <div class="col-sm-10 @error('image_alt_3') has-error @enderror ">
                                        <input id="" name="image_alt_3" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $product->image_alt_3 }}">
                                        @error('image_alt_3')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 4</label>
                                    <div class="col-sm-10 @error('image_alt_4') has-error @enderror ">
                                        <input id="" name="image_alt_4" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $product->image_alt_4 }}">
                                        @error('image_alt_4')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 5</label>
                                    <div class="col-sm-10 @error('image_alt_5') has-error @enderror ">
                                        <input id="" name="image_alt_5" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $product->image_alt_5 }}">
                                        @error('image_alt_5')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script>
        $(document).ready(function() {

            $('.summernote').summernote();

        });

        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
@endsection
