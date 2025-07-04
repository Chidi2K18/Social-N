<!-- Setup Education Start -->
<div class="setup-wrapper-contents">
	<form id="password_change_form">
			@csrf
			<x-validation.error />
			<div class="single-profile-settings">
				<h4>{{ __('Change Password') }}</h4>
				<div class="change-password custom-form">
					<div class="error_msg_container my-2"></div>
					<x-form.password :title="__('Current Password')" :type="'password'" :name="'current_password'" :id="'current_password'" :class="'form-control'" :placeholder="__('Type Current Password')" />
					<span id="current_password_match"></span>
					<x-form.password :title="__('New Password')" :type="'password'" :name="'new_password'" :id="'new_password'" :class="'form-control'" :placeholder="__('Type New Password')" />
					<x-form.password :title="__('Confirm New Password')" :type="'password'" :name="'confirm_new_password'" :id="'confirm_new_password'" :class="'form-control'" :placeholder="__('Confirm New Password')" />
					<span id="new_password_match"></span>
				</div>
				<div class="btn-wrapper profile-border-top flex-btn justify-content-end">
					<x-btn.submit :title="__('Change Password')" :class="'btn-profile btn-bg-1'" />
				</div>
			</div>
		</form>
 <?php /*?>  <div class="setup-wrapper-contents-item">
        <h3 class="setup-wrapper-contents-title">{{ get_static_option('education_title') ?? __('What’s your Educational Background?(Education)') }}</h3>
        <div class="setup-wrapper-experience">
            <div class="setup-wrapper-experience-add">
                <span class="setup-wrapper-experience-add-title">{{ __('Add a Educational Background') }}</span>
                <a href="javascript:void(0)" class="setup-wrapper-experience-add-icon add-education"> <i class="fas fa-plus"></i> </a>
            </div>
        </div>
    </div>
    <div class="setup-wrapper-contents-item">
		
		 
        <h4 class="setup-wrapper-contents-title-two">{{ get_static_option('education_inner_title') ?? __('Education') }}</h4>
        <div class="setup-wrapper-experience" id="display_user_education_data">
            @foreach($educations as $education)
                <div class="setup-wrapper-experience-details">
                    <div class="setup-wrapper-experience-details-flex">
                        <div class="setup-wrapper-experience-details-left">
                            <h5 class="setup-wrapper-experience-details-title">{{ $education->subject }}</h5>
                            <p class="setup-wrapper-experience-details-subtitle">{{ $education->institution }}</p>
                        </div>
                        <a href="javascript:void(0)"
                           class="setup-wrapper-experience-details-edit education-click edit_single_education"
                           data-id ="{{ $education->id }}"
                           data-institution ="{{ $education->institution }}"
                           data-subject ="{{ $education->subject }}"
                           data-degree ="{{ $education->degree }}"
                           data-start_date="{{ Carbon\Carbon::parse($education->start_date)->toFormattedDateString() }}"
                           data-end_date="{{ Carbon\Carbon::parse($education->end_date)->toFormattedDateString() }}"
                        >
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                    <ul class="setup-wrapper-experience-details-list">
                        <li class="setup-wrapper-experience-details-list-item">
                            <span class="list-inner"> <i class="fa-solid fa-graduation-cap"></i>
                                <span class="list-inner-para">{{ __('Degree') }}</span>
                            </span>
                            <span class="list-inner">
                                <span class="list-inner-para">{{ $education->degree }}</span>
                            </span>
                        </li>
                        <li class="setup-wrapper-experience-details-list-item">
                            <span class="list-inner"> <i class="fa-solid fa-calendar-days"></i> <span class="list-inner-para">{{ __('From-To') }}</span> </span>
                            <span class="list-inner">
                                <span class="list-inner-para">{{ Carbon\Carbon::parse($education->start_date)->toFormattedDateString() }} - <a href="javascript:void(0)">{{ $education->end_date ? Carbon\Carbon::parse($education->end_date)->toFormattedDateString() : __('(Expected)') }}</a></span>
                            </span>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div><?php */?>
</div>

@include('frontend.user.freelancer.account.education.add-education-modal')
@include('frontend.user.freelancer.account.education.edit-education-modal')


<!-- Setup Education Ends -->
