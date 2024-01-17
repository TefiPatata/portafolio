@extends('tablar::page')

@section('title', 'View Profileinfo')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Profileinfo ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('profileinfo.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Profileinfo List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profileinfo Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Name:</strong>
{{ $profileinfo->name }}
</div>
<div class="form-group">
<strong>Email:</strong>
{{ $profileinfo->email }}
</div>
<div class="form-group">
<strong>Profile Photo:</strong>
{{ $profileinfo->profile_photo }}
</div>
<div class="form-group">
<strong>Description:</strong>
{{ $profileinfo->description }}
</div>
<div class="form-group">
<strong>Phone:</strong>
{{ $profileinfo->phone }}
</div>
<div class="form-group">
<strong>Location:</strong>
{{ $profileinfo->location }}
</div>
<div class="form-group">
<strong>Aboutme Id:</strong>
{{ $profileinfo->aboutme_id }}
</div>
<div class="form-group">
<strong>Work Id:</strong>
{{ $profileinfo->work_id }}
</div>
<div class="form-group">
<strong>Services Id:</strong>
{{ $profileinfo->services_id }}
</div>
<div class="form-group">
<strong>Portfolio Id:</strong>
{{ $profileinfo->portfolio_id }}
</div>
<div class="form-group">
<strong>Socialnetworks Id:</strong>
{{ $profileinfo->socialnetworks_id }}
</div>
<div class="form-group">
<strong>Skillssection Id:</strong>
{{ $profileinfo->skillssection_id }}
</div>
<div class="form-group">
<strong>Messages Id:</strong>
{{ $profileinfo->messages_id }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


