@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ __('Register') }} ">
                        @csrf
                        <!--氏名-->
                        <div class="form-row mb-4">
                            <div class="col-md-12">
                                <label for="name">名前</label>
                                <input type="text" class="form-control" id="name" placeholder="名字">
                                <div class="invalid-feedback">
                                    入力してください
                                </div>
                            </div>
                        </div>
                        <!--/氏名-->

                        <!--Eメール-->
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Eメール</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Eメール">
                                <div class="invalid-feedback">入力してください</div>
                            </div>
                        </div>
                        <!--/Eメール-->

                        <!--パスワード-->
                        <div class="form-group row mb-5">
                            <label for="password" class="col-sm-2 col-form-label">パスワード</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" placeholder="パスワード">
                                <div class="invalid-feedback">入力してください</div>
                                <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
                            </div>
                        </div>
                        <!--/パスワード-->

                        <!--住所-->
                        <div class="form-row mb-5">
                            <div class="col-md-12">
                                <label for="zip_code">郵便番号(7桁)</label>
                                <input type="text" name="zip_code" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" class="form-control" id="zip_code" placeholder="1030013">
                                <div class="invalid-feedback">入力してください</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="prefecture">都道府県</label>
                                <input type="text" name="prefecture" id="prefecture" class="form-control" placeholder="東京都">
                                <div class="invalid-feedback">入力してください</div>
                            </div>
                            <div class="col-md-9">
                                <label for="address">住所</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="中央区日本橋人形町">
                                <div class="invalid-feedback">入力してください</div>
                            </div>
                        </div>
                </div>
                <!--/住所-->

                <!--性別-->
                <div class="form-group">
                    <div class="row mb-4">
                        <div class="col-sm-10">
                            <p class="col-form-label col-sm-2">性別</p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="gender" name="gender" class="custom-control-input" required>
                                <label class="custom-control-label" for="gender" value="woman">女性</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="gender" name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="gender" value="man">男性</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary btn-block">登録</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection