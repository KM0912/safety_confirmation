@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Safety status') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Comment') }}</th>
                            <th scope="col">{{ __('Updatede at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($status as $state)
                                <tr>
                                    <td>{{ $state->user->name }}</td>
                                    <td>{{ $state->comment }}</td>
                                    <td>{{ $state->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                
            </div>
            
        </div>
    </div>
</div>

@endsection
