@section('footer')
    @parent
    <script>
        $(".toggle-info").click(function(){
            $(".content-section-wrap").toggleClass('hidden-xs hidden-sm');
        });
    </script>
@stop

<div class="row user-panel">

    @include('users.partials.profile.actions')

    <div id="profile" class="js-profile content-container layout-wrap">

        @include('users.partials.profile.profile_info')


        <span class="js-nav-phone"></span>

        @include('users.partials.profile.stats')

        <!-- /#profile-stats -->
        <span class="js-nav-desktop-tablet"></span>

        <div id="profile-nav" class="content-main content-section-nav js-profile-nav">
            <div class="js-iscroll-wrap profile-nav-inner content-nav-inner" style="overflow: hidden;">
                <div class="profile-section-header content-section-header js-section-header js-iscroll"
                     data-section-header="gallery"
                     style="width: 222px; -webkit-transition-property: -webkit-transform; transition-property: -webkit-transform; -webkit-transition-duration: 0ms; transition-duration: 0ms; -webkit-transform-origin: 0px 0px 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                    <a class="profile-section-header-item toggle-info content-section-nav-item js-section js-iscroll-item show-tablet show-phone not-active"
                       data-section="info" href="#">Info</a> <a
                            class="profile-section-header-item content-section-nav-item js-section js-iscroll-item "
                            data-section="projects" href="#">Projects</a>

                </div>

            </div>

        </div>

        @include('users.partials.profile.about_me')

        <div id="gallery" class="content-main cfix js-gallery" data-section="projects">
            <div class="profile-gallery-content-wrap">
                <div class="profile-gallery-content js-profile-gallery-content ui-sortable" data-section="projects">
                    @unless( count($projects) > 0)
                        @include('users.partials._empty_project')
                    @endunless

                    @foreach($projects as $project)
                        @include('ui.elements.cover_block_minimal')
                    @endforeach
                </div>

            </div>
        </div>
        <!-- #gallery --></div>
</div>