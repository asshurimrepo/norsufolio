<div id="profile-info"
     class="profile-section content-minor-section content-mobile-major-section js-profile-info editable">
    <div id="profile-display-name"><a href="#">{{ $current_user->fullName() }}</a></div>
    <a href="#">
        <img id="profile-image"
             src="{{ $current_user->imageUrl() }}"></a>

    <div id="profile-details">
        <div id="profile-title">{{ $current_user->profile->course  }}
        </div>
        <div id="profile-company"> {{ $current_user->profile->college }}
        </div>
        <div class="profile-location has-website"><a
                    class="profile-location-link beicons-pre beicons-pre-location"
                    href="#">{{ $current_user->address }}</a></div>
        <a id="profile-website" href="http://{{ $current_user->profile->web_link }}" target="_blank">{{ $current_user->profile->web_link }}</a>

        <div id="profile-actions" class="show-tablet hide-phone">
            <div id="profile-action-edit" class="profile-action"><a
                        href="{{ route('user.edit-profile') }}"
                        class="form-button form-button-light-and-grey"><span class="beicons">¡</span>Edit
                    Profile</a></div>
        </div>
        <a href="{{ route('user.edit-profile') }}#basic_information"> <span
                    class="js-edit-icon content-edit edit-icon beicons-pre beicons-pre-edit hide-tablet hide-phone"></span>
        </a>
    </div>
    <div id="profile-actions" class="show-phone hide-tablet">
        <div id="profile-action-edit" class="profile-action"><a href="{{ route('user.edit-profile') }}"
                                                                class="form-button form-button-light-and-grey"><span
                        class="beicons">¡</span>Edit Profile</a></div>
    </div>

</div>