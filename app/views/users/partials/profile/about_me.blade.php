<div id="profile-info-wrap" class="js-profile-info-wrap content-section-wrap hidden-sm hidden-xs">

    <div class="profile-section content-minor-section editable"><h3
                class="profile-sidebar-label content-minor-section-label"> About Me

        </h3>

        <div class="variable-text variable-text-full" style="overflow: hidden; max-height: 380px;">
            {{ nl2br($current_user->profile->about_me) }}
        </div>
        <a href="{{ route('user.edit-profile') }}#custom-section-1"> <span
                    class="js-edit-icon content-edit edit-icon beicons-pre beicons-pre-edit hide-tablet hide-phone"></span>
        </a></div>


    <div id="profile-date" class="profile-section content-minor-section"><span class="profile-date-text">      Member Since: <span
                    class="profile-date">{{ $current_user->created_at->diffForHumans() }}</span>    </span>

    </div>
</div>