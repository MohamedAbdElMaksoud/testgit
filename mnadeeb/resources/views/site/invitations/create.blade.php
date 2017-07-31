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
                        <span class="caption-subject font-dark bold uppercase">الاكسسوارات</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn dark btn-outline btn-circle btn-sm" href="{{url('accessorise')}}">
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
                                <span class="caption-subject bold uppercase"> اضف </span>
                            </div>

                        </div>
                        <div class="portlet-body form">

                            <form role="form" method="post" action="{{url("accessorise")}}"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input required type="text" name="name" class="form-control input-lg"
                                               id="form_control_1"
                                               placeholder="الاسم ">
                                        <label for="form_control_1 input-lg">الاسم </label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input required type="text" name="gift"
                                               class="form-control input-lg"
                                               placeholder="هديه">
                                        <label for="form_control_1 input-lg">الهديه</label>
                                        <span class="help-block">تتم الكتابة...</span>
                                    </div>
                                    <button type="submit" class="btn blue">اضف</button>
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
