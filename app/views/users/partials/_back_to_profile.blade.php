<div id="profile-editor-header" class="header-bar js-editor-top-nav">
    <div class="layout-wrap">

        @if(Session::has('message'))
            <span class="js-editor-saving-message editor-saving-message">{{ Session::get('message') }}</span>
        @endif

        <a
                class="form-button form-button-normal form-button-green js-back-to-profile"
                href="{{ route('user.index') }}">
            Back to
            Profile</a></div>
</div>