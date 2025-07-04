@extends('frontend.layout.master')
@section('site_title',__('Account Setup'))
@section('style')
<link rel="stylesheet" href="{{ asset('assets/common/css/select2.min.css') }}">
    <style>
		.setup-wrapper-work-list-item.active2, .setup-wrapper-work-list-item:hover {
  background-color: rgba(var(--main-color-one-rgb), 0.1);
  color: var(--main-color-one);
  border-color: var(--main-color-one);
}
		.single-profile-settings {
  padding: 0;
}
	.single-setup-request{min-width: 270px}
.setup-wrapper-contents {
  max-width: 100%;
}
        .set_scroll_height{
            max-height:300px;
            overflow-y: scroll;
            scrollbar-width: thin;
            scrollbar-color: #ccc #f5f5f5;
        }
    </style>
@endsection
@section('content')
    <!-- Account Setup area Starts -->
    <div class="account-area pat-100 pab-100">
        <div class="container">
            <div class="setup-header setup-top-border">
                <div class="setup-header-flex">
                    <div class="setup-header-left">
                        <h4 class="setup-header-title">{{ get_static_option('account_page_title') ?? __('Setup Your Account') }}</h4>
                    </div>
                    <div class="setup-header-right">
                        <a href="{{ route('homepage') }}" class="setup-header-skip">{{ get_static_option('account_page_skip_title') ?? __('Skip') }}</a>
                    </div>
                </div>
            </div>
            <div class="setup-wrapper setup-top-border setup-bottom-border">
                <div class="setup-wrapper-flex">
                    <div>
                        @include('frontend.user.freelancer.account.sidebar')
                    </div>
                    <div>
                        @include('frontend.user.freelancer.account.introduction')
                        @include('frontend.user.freelancer.account.experience.experience')
                        @include('frontend.user.freelancer.account.education.education')
                        @include('frontend.user.freelancer.account.work.work')
                        @include('frontend.user.freelancer.account.skill.skill')
                        @include('frontend.user.freelancer.account.hourly.hourly-rate')
                        @include('frontend.user.freelancer.account.pre-next')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Setup area end -->
@endsection
@include('frontend.user.freelancer.profile.edit-profile-info-modal')
@include('frontend.user.freelancer.profile.profile-preview-modal')
@include('frontend.user.freelancer.profile.feedback-modal')
<!-- Setup Introduction Ends -->

{{--todo register script--}}
@section('script')
    @include('frontend.user.freelancer.account.account-setup-js')
<x-select2.select2-js />
    @include('frontend.user.freelancer.profile.profile-js')
@include('frontend.user.freelancer.password.password-js')
@endsection


