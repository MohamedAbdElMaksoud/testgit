@extends('layouts.container')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase">الاقسام</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm" href="{{url('categories')}}">
                                رجوع
                            </a>
                        </div>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> تعديل </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("accessorise/$item->id")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('PUT') }}

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->name_ar}}" required type="text" name="name_ar"
                                               class="form-control input-lg"
                                               placeholder="الاسم ">
                                        <label for="form_control_1 input-lg">الاسم عربى</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->name_en}}" required type="text" name="name_en"
                                               class="form-control input-lg"
                                               placeholder="الاسم ">
                                        <label for="form_control_1 input-lg">الاسم الانجليزى</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <div class="form-group form-md-line-input">
                                        <input value="{{$item->price}}" required type="text" name="price"
                                               class="form-control input-lg"
                                               placeholder="السعر ">
                                        <label for="form_control_1 input-lg">السعر</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>

                                    <input  value="{{$item->image}}" type="hidden" name="oldImage">
                                    <div class="form-group form-md-line-input">
                                        <input type="file" name="image" class="form-control">
                                        <label for="form_control_1 input-lg">الصورة </label>
                                    </div>

                                    <button type="submit" class="btn blue">تعديل</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
    <!-- END CONTENT -->
@endsection
