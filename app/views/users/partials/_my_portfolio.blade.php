<div class="row user-panel">
    <div id="rightmodal" class="modal-content col-sm-3">
        <div class="left-modal-body modal-body">
            <div class="row">
                <div class="col-sm-5 text-right">
                    <img class="img-responsive img-thumbnail" src="{{ $current_user->imageURl() }}" alt="images">
                </div>
                <div class="col-sm-7">
                    <address>
                        <span class="name block">{{ $current_user->name }}</span>
                        <span class="address block"><i class="fa fa-map-marker"></i> {{ $current_user->address }}</span>
                    </address>

                    <section class="actions">
                        <a class="btn  btn-default btn-block btn-sm" href="{{ route('user.edit-profile') }}"><i class="fa fa-edit"></i> Edit Profile</a>
                    </section>
                </div>
            </div>
        </div>
       {{-- <div class="left-modal-body modal-body">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4 class="followme btn-follow"><i class="fa fa-plus"></i> Follow</h4>
                    <br >
                    <h4 class="followme btn-message"><i class="fa fa-envelope"></i> Message</h4>
                </div>
            </div>
        </div>--}}
        <div class="left-modal-body modal-body">
            <h6 class="about-me">ABOUT ME</h6>
            <p class="description">{{ $current_user->aboutMe() }}</p>
        </div>
        <div class="modal-body text-left">
            <a href="http://{{ $current_user->profile->facebook_link }}" target="_blank" class="block"><i class="fa fa-facebook-square"></i> {{ $current_user->profile->facebook_link }}</a>
            <a href="http://{{ $current_user->profile->facebook_link }}" target="_blank" class="block"><i class="fa fa-globe"></i> {{ $current_user->profile->web_link }}</a>
        </div>
    </div>
    <div class="modal-content col-sm-9">
        <div class="modal-header">
            <div class="row">
                <div class="col-md-12 user-panel-header">
                    <h4 class="pull-left">My Portfolio</h4>
                    <div class="pull-right">
                        <a href="{{ route('user.project.create') }}" class="form-button form-button-default btn form-button-default" unselectable="on" id="editor-save"><i class="fa fa-cloud-upload"></i> Upload</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="leftmodal" class="modal-body">

            @foreach($current_user->projects()->orderBy('id', 'desc')->get() as $project)

                @include('ui.elements.cover_block_minimal')

            @endforeach

        </div>
    </div>
</div>