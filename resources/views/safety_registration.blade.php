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
