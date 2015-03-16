@extends('users.user_master')

@section('header')
    @parent
    {{ link_css('assets/users/css/edit.css') }}
    {{ link_css('assets/css/text-list.css') }}
    {{ link_css('assets/css/footer-infinity.css') }}
@stop

@section('footer')
    @parent

    <script>
        $(".js-section-nav").click(function(){
            $(this).addClass('active').parent().siblings().find('a').removeClass('active');
        });
    </script>

    {{ link_js('lib/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}
    {{ link_js('lib/jquery-file-upload/js/jquery.iframe-transport.js') }}
    {{ link_js('lib/jquery-file-upload/js/jquery.fileupload.js') }}

    <script>
        $('#fileupload').fileupload({
            dataType: 'json',
            done: function (e, data) {
                setTimeout(function(){

                    $.post("{{ route('user.update-profile-image') }}", {data: data.result.files}, function(data){
                        $(".preloader").fadeOut();
                        $(".profile-image").prop('src', data.avatar);
                    });

                }, 500);
            },
            progressall: function (e, data) {
                $(".preloader").fadeIn();
            }
        });

    </script>
@stop

@section('body')

    @include('users.partials._back_to_profile')

    <div class="preloader" style="display: none;">
        <i class="fa fa-circle-o-notch fa-spin fa-spin"></i>
        <h5 class="lead">Uploading</h5>
    </div>

    {{ Form::open(['method'=>'PUT', 'route'=>['user.update', $current_user->id]]) }}

    <section class="row user-panel edit-panel">

        <div id="content-wrapper" class="cfix">
            <ul class="form-nav js-form-nav" role="tablist">
                <li><a href="#basic_information" data-section="basic_information" class="js-section-nav active">Basic
                        Information</a></li>
                <li><a href="#custom-section-1" data-section="custom-section-1" class="js-section-nav">About Me</a></li>

            </ul>

            <div class="form-contents" >
                <div class="js-form-contents" data-spy="scroll" data-target="#content-wrapper" style="position: relative">
                    <div class="form-block" id="basic_information-wrap"><span id="basic_information"
                                                                              class="anchor js-named-anchor"
                                                                              style="top: -133px; padding-top: 133px;"></span>

                        <h3 class="form-block-title">Basic Information</h3>

                        <div id="image-container">
                            <div class="profile-image-wrap"><img class="js-profile-image profile-image"
                                                                 src="{{ $current_user->imageURl() }}">
                                <input type="hidden" class="js-profile-temp-image" name="temp_image"></div>
                            <div class="js-profile-upload profile-upload"
                                 style="position: relative; overflow: hidden; direction: ltr;"><span
                                        class="beicons">+</span>Upload<input
                                        qq-button-id="33fcb7ed-8eee-44ee-9a0c-c820338a45ca" id="fileupload" type="file" name="files"
                                        style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;" data-url="{{ route('uploader.profile') }}">
                            </div>
                        </div>
                        <div id="basicInfo" class="profile-basic-info">
                            <div class="form-item-halfsies">
                                <div class="form-item form-item-text be-placeholder" id="first_name-container"><label
                                            for="first_name">First Name</label> <input name="first_name" type="text"
                                                                                       class="form-text form-text-normal validate[required, Generic]"
                                                                                       id="first_name"
                                                                                       value="{{ $current_user->first_name }}"
                                                                                       required>
                                </div>
                                <div class="form-item form-item-text be-placeholder" id="last_name-container"><label
                                            for="last_name">Last Name</label> <input name="last_name" type="text"
                                                                                     class="form-text form-text-normal validate[required, Generic]"
                                                                                     id="last_name" value="{{ $current_user->last_name }}"
                                                                                     required
                                                                                     data-validate="required, Generic">
                                </div>
                            </div>
                            <div class="form-item form-item-text be-placeholder" id="occupation-container"><label
                                        for="occupation">Nickname</label> <input name="name" type="text"
                                                                                class="form-text form-text-normal"
                                                                                id="occupation"
                                                                                placeholder=""
                                                                                required
                                                                                value="{{ $current_user->name }}"
                                                                                >
                            </div>
                            <div class="form-item form-item-text be-placeholder" id="occupation-container"><label
                                        for="occupation">College</label> <input name="college" type="text"
                                                                                   class="form-text form-text-normal validate[optional,Generic]"
                                                                                   id="occupation"
                                                                                   placeholder="Ex: CBA, CAS, CIT"
                                                                                   required
                                                                                   value="{{ $current_user->profile->college }}"
                                                                                   data-validate="optional,Generic">
                            </div>
                            <div class="form-item form-item-text be-placeholder" id="company-container"><label
                                        for="company">Course</label> <input name="course" type="text"
                                                                             class="form-text form-text-normal validate[optional,Generic]"
                                                                             id="company" maxlength="40"
                                                                             placeholder="Ex:  BSInT, ComSci, ABGen"
                                                                             value="{{ $current_user->profile->course }}"
                                                                             required></div>

                            <div class="shim-wrap">
                                <div class="form-item form-item-text be-placeholder" id="website-container"><label
                                            for="website">Website URL</label> <input name="web_link" type="text"
                                                                                     class="form-text form-text-normal validate[optional,UrlExt]"
                                                                                     id="website"
                                                                                     value="{{ $current_user->profile->web_link }}"
                                                                                     data-validate="optional,UrlExt">
                                </div>
                                <div class="shim">http://</div>
                            </div>

                            <div class="shim-wrap" style="margin-top: 10px;">
                                <div class="form-item form-item-text be-placeholder" id="website-container"><label
                                            for="website">Facebook URL</label> <input name="facebook_link" type="text"
                                                                                     class="form-text form-text-normal validate[optional,UrlExt]"
                                                                                     id="website"
                                                                                     value="{{ $current_user->profile->facebook_link }}"
                                                                                     data-validate="optional,UrlExt">
                                </div>
                                <div class="shim">http://</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-block" id="custom-section-1-wrap"><span id="custom-section-1"
                                                                             class="anchor js-named-anchor"
                                                                             style="top: -133px; padding-top: 133px;"></span>

                        <h3 class="form-block-title">About Me</h3>

                        <div class="js-custom-section soc-custom-section">
                            <div class="form-item form-item-textarea"><label for="sections-body-0">Description</label>
                                <textarea required id="sections-body-0" name="about_me"
                                          class="form-textarea js-form-section-body form-text-normal"
                                          data-validate="optional,Generic">{{ $current_user->profile->about_me }}</textarea></div>
                        </div>
                    </div>


                </div>
                <button class="btn-block add-custom-section add-custom-section-block form-block">
                   <i class="fa fa-save"></i> Save changes
                </button>
            </div>
        </div>
    </section>

@stop