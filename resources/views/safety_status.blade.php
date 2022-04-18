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
                                <th scope="col" style="width: 19%">{{ __('Name') }}</th>
                                <th scope="col" style="width: 12%">自身の安否</th>
                                <th scope="col" style="width: 12%">家族の安否</th>
                                <th scope="col" style="width: 12%">出社の可否</th>
                                <th scope="col" style="width: 25%">{{ __('Comment') }}</th>
                                <th scope="col" style="width: 20%">{{ __('Updatede at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($status as $state)
                                <tr>
                                    <td>{{ $state->user->name }}</td>
                                    <td>{{ SafetyInformationConst::SAFETY_LIST[$state->own_condition] }}</td>
                                    <td>{{ SafetyInformationConst::SAFETY_LIST[$state->family_condition] }}</td>
                                    <td>{{ SafetyInformationConst::GO_TO_WORK_LIST[$state->go_to_work] }}</td>
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
