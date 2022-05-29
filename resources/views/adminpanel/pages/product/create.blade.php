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
                        <strong>Create</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Product info</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2"> Stock</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3"> SEO</a></li>
                        </ul>
                        <div class="tab-content">


                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <form method="POST" action="{{ route('admin.product.store') }}" class="form-horizontal"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                                <div class="col-sm-10" @error('name') has-error @enderror>
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        class="form-control" placeholder="Polo T-Shirt">
                                                    @error('name')
                                                        <span class="help-block m-b-none">Name is Required</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Category:</label>
                                                <div class="col-sm-10">
                                                    <select id="" name="product_category_id" class="form-control"
                                                        required>
                                                        <option selected disabled value="">Category</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_category_id')
                                                        <span class="help-block m-b-none">Category is Required</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Sub
                                                    Category:</label>
                                                <div class="col-sm-10">
                                                    <select id="" name="product_sub_category_id" class="form-control"
                                                        required>
                                                        <option selected disabled value="">Optional</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_sub_category_id')
                                                        <span class="help-block m-b-none">Category is Required</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="160.00">
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Brand:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="brand" class="form-control"
                                                        placeholder="Optional">
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Short Summary:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="summary" class="form-control"
                                                        placeholder="Optional">
                                                </div>
                                            </div>
                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Description:</label>
                                                <div class="col-sm-10">
                                                    <textarea name="description" class="summernote">
                                                    {{ old('description') }}
                                                </textarea>
                                                </div>
                                            </div>

                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Visible:</label>
                                                <div class="col-sm-10">
                                                    <select id="" name="is_active" class="form-control" required>
                                                        <option selected value="1">Public</option>
                                                        <option value="0">Private</option>
                                                    </select>
                                                    @error('is_active')
                                                        <span class="help-block m-b-none">Select Visiblelity</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="hr-line-dashed"></div>

                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary" type="submit">Save Product</button>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset class="form-horizontal">
                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Quantity:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="available_qty" value="{{ old('available_qty') }}"
                                                        class="form-control" placeholder="10">
                                                </div>
                                            </div>

                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Discount:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ old('discount') }}" name="discount"
                                                        class="form-control" placeholder="Optional">
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-2 control-label">Tax:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ old('tax') }}"
                                                        class="form-control" name="tax" placeholder="Optional">
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-2 control-label">Sort
                                                    order:</label>
                                                <div class="col-sm-10">
                                                    <input type="number" value="{{ old('description') }}"
                                                        name="sort_order" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="form-group"><label
                                                    class="col-sm-2 control-label">Status:</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                        <option selected value="">Select</option>
                                                        <option value="Available">Available</option>
                                                        <option value="Out of Stock">Out of Stock</option>
                                                        <option value="Coming Soon">Coming Soon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group"><label
                                                class="col-sm-2 control-label">Sizes:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="sizes[]">
                                                    <option selected value="">Optional</option>
                                                    <option value="Large">Large</option>
                                                    <option value="Meduim">Meduim</option>
                                                    <option value="Small">Small</option>
                                                </select>
                                            </div>
                                            <div class="form-group"><label
                                                class="col-sm-2 control-label">Colors:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="colors[]">
                                                    <option selected value="">Optional</option>
                                                    <option value="Red">Red</option>
                                                    <option value="Blue">Blue</option>
                                                    <option value="Green">Green</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        </fieldset>


                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">

                                        <fieldset form="blogForm" class="form-horizontal">
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                    Title:</label>
                                                <div class="col-sm-10">
                                                    <input name="meta_tag_title" value="{{ old('meta_tag_title') }}"
                                                        type="text" class="form-control" placeholder="...">
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                    Keywords:</label>
                                                <div class="col-sm-10"><input name="meta_tag_keywords"
                                                        value="{{ old('meta_tag_keywords') }}" type="text"
                                                        class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                    Description:</label>
                                                <div class="col-sm-10"><input name="meta_tag_description"
                                                        value="{{ old('meta_tag_description') }}" type="text"
                                                        class="form-control" placeholder="Sheets containing Lorem"></div>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="form-group"><label class="col-sm-2 control-label">Images:</label>
                                        <div class="col-sm-10"><input name="images[]"
                                                value="{{ old('meta_tag_keywords') }}" type="file"
                                                class="form-control" multiple accept="image/*" placeholder="Lorem, Ipsum, has, been"></div>
                                    </div>
                                        {{-- <div class="table-responsive">
                                        <table class="table table-bordered table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Image preview
                                                    </th>
                                                    <th>
                                                        Image url
                                                    </th>
                                                    <th>
                                                        Sort order
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/2s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image1.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/1s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image2.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/3s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image3.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="3">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/4s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image4.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="4">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/5s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image5.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="5">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/6s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image6.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="6">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image7.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="7">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}

                                    </div>
                                </form>
                                </div>

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
