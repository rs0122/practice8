@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name p-2">
                                    <h1>{{ str_limit($headline->name, 10) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="gender mx-auto">{{ str_limit($headline->gender, 10) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="hobby mx-auto">{{ str_limit($headline->hobby, 10) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="introduction mx-auto">{{ str_limit($headline->introduction, 500) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="profileposts col-md-8 mx-auto mt-3">
                @foreach($profileposts as $profilepost)
                    <div class="profilepost">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $profilepost->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($profilepost->name, 10) }}
                                </div>
                                <div class="gender mt-3">
                                    {{ str_limit($profilepost->gender, 10) }}
                                </div>
                                <div class="hobby mt-3">
                                    {{ str_limit($profilepost->gender, 10) }}
                                </div>
                                <div class="introduction mt-3">
                                    {{ str_limit($profilepost->introduction, 500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection