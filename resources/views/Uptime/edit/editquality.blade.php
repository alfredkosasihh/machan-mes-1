@extends('layouts.myapp')

@section('css')
<style>
    .space-item {
        margin-left: 10px;
    }
    .panel-default {
        border-color: #000000;
    }
    .panel-default > .panel-heading {
        color: #fff;
        background-color: #000000;
        border-color: #000000;
    }
    .form-horizontal .control-label {
        text-align: center;
    }
    hr {
        border-top: 1px solid #ccc;
    }
    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }
    .btn.focus, .btn:focus, .btn:hover {
        color: #fff;
    }
</style>

@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <h2>良率定義</h2>
        <ol class="breadcrumb">
            <img src="{{ asset('img/u12.png') }}">
            <span class="space-item">稼動參數</span>
            <span class="space-item">></span>
            <span class="space-item">良率定義<span>
            <span class="space-item">></span>
            <span class="space-item">資料編輯頁</span>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">資料編輯</div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                                <div class="form-group">
                                        <label class="col-md-2 control-label">性能稼動名稱</label>
                                        <div class="col-md-4">
                                            <input class="clearable form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" required>
                                                <option value="">全自動上下料單機</option>
                                                <option value="">全自動化手動上下料單機</option>
                                                <option value="">半自動化手動上下料單機</option>   
                                                <option value="">全自動化給料多機</option> 
                                                <option value="">全自動化多機</option> 
                                                <option value="">半自動化多機</option>    
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> 性能稼動欄位</label>
                                        <div class="col-md-3">
                                            <select class="form-control" required>
                                                <option value="">---OEE欄位---</option>
                                                <option value="">機台開始時間</option>
                                                <option value="">機台結束時間</option>
                                                <option value="">及時休息時間</option>  
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" required>
                                                <option value="">---歸屬類別---</option>
                                                <option value="">實際產能(分子)</option>
                                                <option value="">標準產能(分母)</option>      
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                                <select class="form-control" required>
                                                    <option value="">---加減項---</option>
                                                    <option value="">加</option>
                                                    <option value="">檢</option>
                                                    <option value="">乘</option>
                                                    <option value="">除</option>      
                                                </select>
                                            </div>
                                            <div class="col-md-1">         
                                                    <div style="float:right; margin-right:5%">
                                                            <button class="btn btn-success">新增</button>
                                                    </div>      
                                                </div>
                                        </div>
                                        
                                <hr>
                                <div class="form group">
                                    <label class="col-md-2 control-label">性能稼動公式</label>
                                    <div class="col-md-10">
                                        <textarea name="" id="" cols="110" rows="5" style="resize: none; margin-bottom:5%"></textarea>
                                    </div>
                                </div>
                                <hr>
                            <div style="text-align:center">
                                <button type="submit" id="sendBtn" class="btn btn-success btn-lg" style="width:45%">確認</button>
                                <button type="reset" onclick="" class="btn btn-secondary btn-lg" style="width:45%">清除資料</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection