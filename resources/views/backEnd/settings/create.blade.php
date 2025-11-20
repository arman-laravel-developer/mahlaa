@extends('backEnd.layouts.master')
@section('title','General Setting Create')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

<link href="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('settings.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">General Setting Create</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('settings.store')}}" method="POST" class=row data-parsley-validate=""  enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" required="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="white_logo" class="form-label">White Logo *</label>
                            <input type="file" class="form-control @error('white_logo') is-invalid @enderror" name="white_logo" value="{{ old('white_logo') }}"  id="white_logo" required="">
                            @error('white_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="dark_logo" class="form-label">Dark Logo</label>
                            <input type="file" class="form-control @error('dark_logo') is-invalid @enderror" name="dark_logo" value="{{ old('dark_logo') }}"  id="dark_logo">
                            @error('dark_logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="favicon" class="form-label">Favicon Logo *</label>
                            <input type="file" class="form-control @error('favicon') is-invalid @enderror" name="favicon" value="{{ old('favicon') }}"  id="favicon" required="">
                            @error('favicon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    
                    <!-- Currency Settings -->
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="currency_code" class="form-label">Currency Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('currency_code') is-invalid @enderror" name="currency_code" value="{{ old('currency_code', 'USD') }}" id="currency_code" placeholder="Enter currency code or select below">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='USD'; return false;">USD - US Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='EUR'; return false;">EUR - Euro</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='GBP'; return false;">GBP - British Pound</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='AED'; return false;">AED - UAE Dirham</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='BDT'; return false;">BDT - Bangladeshi Taka</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='INR'; return false;">INR - Indian Rupee</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='CAD'; return false;">CAD - Canadian Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='AUD'; return false;">AUD - Australian Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='JPY'; return false;">JPY - Japanese Yen</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='CNY'; return false;">CNY - Chinese Yuan</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_code').value='CHF'; return false;">CHF - Swiss Franc</a>
                                    </div>
                                </div>
                            </div>
                            @error('currency_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="currency_symbol" class="form-label">Currency Symbol</label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('currency_symbol') is-invalid @enderror" name="currency_symbol" value="{{ old('currency_symbol', '$') }}" id="currency_symbol" placeholder="Enter symbol or select below">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='$'; return false;">$ - Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='€'; return false;">€ - Euro</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='£'; return false;">£ - Pound</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='AED'; return false;">AED - Dirham</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='BDT'; return false;">BDT - Taka</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='INR'; return false;">INR - Rupee</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='JPY'; return false;">JPY - Yen</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='CNY'; return false;">CNY - Yuan</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_symbol').value='CHF'; return false;">CHF - Franc</a>
                                    </div>
                                </div>
                            </div>
                            @error('currency_symbol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="currency_name" class="form-label">Currency Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('currency_name') is-invalid @enderror" name="currency_name" value="{{ old('currency_name', 'US Dollar') }}" id="currency_name" placeholder="Enter name or select below">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='US Dollar'; return false;">US Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Euro'; return false;">Euro</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='British Pound'; return false;">British Pound</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='United Arab Emirates Dirham'; return false;">United Arab Emirates Dirham</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Bangladeshi Taka'; return false;">Bangladeshi Taka</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Indian Rupee'; return false;">Indian Rupee</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Canadian Dollar'; return false;">Canadian Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Australian Dollar'; return false;">Australian Dollar</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Japanese Yen'; return false;">Japanese Yen</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Chinese Yuan'; return false;">Chinese Yuan</a>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('currency_name').value='Swiss Franc'; return false;">Swiss Franc</a>
                                    </div>
                                </div>
                            </div>
                            @error('currency_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-sm-6 mb-3">
                        <div class="form-group">
                            <label for="status" class="d-block">Status</label>
                            <label class="switch">
                              <input type="checkbox" value="1" name="status" checked>
                              <span class="slider round"></span>
                            </label>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>

                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
   </div>
</div>
@endsection


@section('script')
<script src="{{asset('public/backEnd/')}}/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-validation.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-advanced.init.js"></script>

<script src="{{asset('public/backEnd/')}}/assets/libs//summernote/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(".summernote").summernote({
        placeholder: "Enter Your Text Here",
    });
</script>
@endsection