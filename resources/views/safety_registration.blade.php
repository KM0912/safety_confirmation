@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Safety report') }}</div>

                <div class="card-body">
                    <form method='POST' action="/store">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">自身の安否</label>
                            <input type="radio" class="btn-check" name="own_condition" id="own-condition-safety" autocomplete="off" value=1 checked>
                            <label class="btn btn-outline-primary" for="own-condition-safety">無事</label>

                            <input type="radio" class="btn-check" name="own_condition" id="own-condition-injured" autocomplete="off" value=2>
                            <label class="btn btn-outline-primary" for="own-condition-injured">負傷</label>
                        </div>
                        <div class="mb-3">
                            <label for="commentTextarea1" class="form-label">家族の安否</label>
                            <input type="radio" class="btn-check" name="family_condition" id="family-condition-safety" autocomplete="off" value=1 checked>
                            <label class="btn btn-outline-primary" for="family-condition-safety">無事</label>

                            <input type="radio" class="btn-check" name="family_condition" id="family-condition-injured" autocomplete="off" value=2>
                            <label class="btn btn-outline-primary" for="family-condition-injured">負傷</label>

                            <input type="radio" class="btn-check" name="family_condition" id="family-condition-unconfirmed" autocomplete="off" value=3>
                            <label class="btn btn-outline-primary" for="family-condition-unconfirmed">未確認</label>
                        </div>
                        <div class="mb-3">
                            <label for="commentTextarea1" class="form-label">出社可否</label>
                            <input type="radio" class="btn-check" name="go_to_work" id="go-to-work-yes" autocomplete="off" value=1 checked>
                            <label class="btn btn-outline-primary" for="go-to-work-yes">可能</label>

                            <input type="radio" class="btn-check" name="go_to_work" id="go-to-work-no" autocomplete="off" value=2>
                            <label class="btn btn-outline-primary" for="go-to-work-no">不可能</label>
                        </div>
                        <div class="mb-3">
                            <label for="commentTextarea1" class="form-label">{{ __('Comment') }}</label>
                            <textarea name="comment" class="form-control bg-white" id="commentTextarea1" rows="3"></textarea>
                        </div>
                        <button class="w-100 btn btn-primary btn-lg" type="submit">{{ __('Report') }}</button>
                    </form>
                </div>                
            </div>
            
        </div>
    </div>
</div>

@endsection
