@extends('dynamic_master')

@section('header')
    <meta name="up_project" content="{{ route('project.up',['']) }}"/>
    <meta name="user_follow" content="{{ route('user.follow',['']) }}"/>
    <meta name="user_unfollow" content="{{ route('user.unfollow',['']) }}"/>

    @parent
    {{--{{ link_css('assets/users/css/edit.css') }}--}}
    {{ link_css('assets/css/text-list.css') }}
    {{ link_css('assets/css/footer-infinity.css') }}
    {{ link_css('assets/css/responsive.css') }}

    <style>
        body {
            padding-bottom: 50px;
        }

        @if(Auth::check())
        #content-container {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        @endif
    </style>
@stop

@section('footer')
    {{ link_js('assets/js/project.js') }}
@stop

@section('bodyAtt')
    ng-app class="logged-in logged-in-1 corepacki networki responsive no-padding project-view project-styles show-cta editor-version-4 no-right-column be-network no-has-touch has-placeholders globalnav__external__no-touch"
@stop

@section('binder')
    <div id="project-container-wrapper" ng-controller="ProjectController">

        <span ng-init='project = {{ json_encode($project) }}'></span>
        <span ng-init='followed = {{ json_encode($followed) }}'></span>

        <div id="content-container" class="grid-site cfix">
            <div id="project-container" class="cfix">

                <div id="project-sidebar" class="right">
                    <!-- warning -->

                    <div class="sidebar-block sidebar-owner">
                        <div class="sidebar-label">
                            Project By
                        </div>

                        <div class="sidebar-content cfix">
                            <div id="owner-icon-info" class="cfix">
                                <div id="owner-icon" class="user-img-50 left "><a href="#">
                                        <img class="js-mini-profile"
                                             style="max-width: 50px;"
                                             src="{{ $project->user->imageUrl() }}"></a>
                                </div>
                                <div id="owner-info" class="left">
                                    <div id="owners" class="cfix">
                                        <a id="owner" class="text-ellipsis"
                                           href="#"><span
                                                    class="js-mini-profile"
                                                    data-id="3559859">{{ $user->fullName() }}</span></a>
                                    </div>
                                    <!-- #owners -->
                                    <div id="owner-location-container"><a
                                                class="location-link text-ellipsis beicons-pre beicons-pre-location"
                                                href="#">{{ $user->address }}</a></div>
                                </div>
                                <!-- #owner-info --></div>
                            <!-- /#owner-icon-info -->
                            @if(Auth::check() && Auth::user()->id != $project->user->id)
                                <div id="owner-buttons-container" class="clear">
                                    <div class="js-action-follow-user follow-button-container">
                                        <a ng-hide="followed" ng-click="follow()" class="form-button follow js-form-button-follow form-button-follow form-button-large form-button-default form-button-left-icon form-button-icon-follow">Follow</a>

                                        <div ng-show="followed" class="follow-unfollow" ng-mouseover="showUnfollow(true)" ng-mouseleave="showUnfollow(false)">
                                            <a ng-hide="showUnfollowBtn" style="display: block" class="form-button following form-button-large form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                            <a ng-show="showUnfollowBtn" style="display: block" ng-click="unfollow()" class="form-button unfollow js-form-button-unfollow form-button-unfollow form-button-large form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- secondary actions -->
                    <div class="sidebar-block sidebar-actions hide">
                        <a class="sidebar-action js-action-message-user" data-contact_id="3559859"
                           data-contact_name="Hiroyuki Izutsu"> <span
                                    class="beicons-pre beicons-pre-mail project-icon-right project-icon-right-arrow">Message Creative</span></a>

                    </div>


                    <!-- about the project -->
                    <div class="sidebar-block">
                        <div class="sidebar-label">
                            About Project
                        </div>

                        <div class="sidebar-content">
                            <div class="project-description">{{ $project->description() }}</div>
                            <div class="project-published tiny-text">
                                Published: {{ $project->created_at->diffForHumans() }}</div>
                            <ul id="project-stats" class="object-stats">
                                <li class="project-stat project-stat-views beicons-pre beicons-pre-eye">Views<span
                                            class="stat-value">{{ $project->views }}</span></li>
                                <li class="project-stat project-stat-appreciations beicons-pre beicons-pre-thumb">
                                    Ups<span class="stat-value">{{ $project->upsCount() }}</span></li>
                            </ul>

                        </div>
                    </div>


                </div>
                <!-- #project-sidebar -->
                <div id="project-main" class="left">

                    <div id="project-header" class="work-header ui-corner-top-left relative cfix">

                        <div id="project-header-main" class="work-header-main">

                            <h1 id="project-title">{{ $project->name }}</h1>

                            <div id="creative-fields" class="secondary-text">
                                <a href="#" title="Drawing">Drawing</a><span class="separator">, </span><a
                                        href="#" title="Illustration">Illustration</a><span
                                        class="separator">, </span><a href="#" title="Painting">Painting</a>
                            </div>


                            <!-- #featured-badges -->
                            <div class="show-phone show-tablet">
                                <ul class="header-stats">
                                    <li class="header-stat"><span
                                                class="beicons-pre beicons-pre-eye">{{ $project->views }}</span></li>
                                    <li class="header-stat"><span
                                                class="beicons-pre beicons-pre-thumb">{{ $project->upsCount() }}</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /#project-header-main -->

                        <div id="project-header-info" class="work-header-info show-phone show-tablet">
                            <div class="sidebar-block sidebar-owner">
                                <div class="sidebar-label">
                                    Project By
                                </div>

                                <div class="sidebar-content cfix">
                                    <div id="owner-icon-info" class="cfix">
                                        <div id="owner-icon" class="user-img-50 left "><a href="#"><img
                                                        class="js-mini-profile"
                                                        src="{{ $user->imageUrl() }}"></a>
                                        </div>

                                        <div id="owner-info" class="left">
                                            <div id="owners" class="cfix"><a id="owner" class="text-ellipsis"
                                                                             href="#"><span
                                                            class="js-mini-profile"
                                                            data-id="3559859">{{ $user->fullName() }}</span></a>
                                            </div>
                                            <!-- #owners -->
                                            <div id="owner-location-container"><a
                                                        class="location-link text-ellipsis beicons-pre beicons-pre-location"
                                                        href="#">{{ $user->address }}</a></div>
                                        </div>
                                        <!-- #owner-info --></div>
                                    <!-- /#owner-icon-info -->
                                    <div id="owner-buttons-container" class="clear">
                                        @if(Auth::check() && Auth::user()->id != $project->user->id)
                                        <div class="js-action-follow-user follow-button-container">
                                            <a ng-hide="followed" ng-click="follow()" class="form-button follow js-form-button-follow form-button-follow form-button-large form-button-default form-button-left-icon form-button-icon-follow">Follow</a>

                                            <div ng-show="followed" class="follow-unfollow" ng-mouseover="showUnfollow(true)" ng-mouseleave="showUnfollow(false)">
                                                <a ng-hide="showUnfollowBtn" style="display: block" class="form-button following form-button-large form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                                <a ng-show="showUnfollowBtn" style="display: block" ng-click="unfollow()" class="form-button unfollow js-form-button-unfollow form-button-unfollow form-button-large form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                            </div>

                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- #proj-header -->


                    <div id="primary-project-content" class="project-styles hd_images_enabled">
                        <ul id="project-modules" class="editor-modules-version-4"
                            style="background-color: transparent;">

                            <img src="{{ $project->getImage() }}" alt="{{ $project->name }}" class="img-responsive"/>

                        </ul>

                        <div id="appreciation">
                            <div id="appreciation-tooltipi" class="tooltipi-container">
                                @if(Auth::check())

                                    @if( ! $up)
                                        <span id="appreciation-sticker" ng-click="upThis($event)"
                                              class="icon-project-appreciate ccn-appreciation-sprite"></span>
                                    @else
                                        <div id="appreciated-on-content">
                                            <div class="app-content app-img-container beicons-pre beicons-pre-thumb"></div>
                                            <div class="app-content app-date">Appreciated on {{ $up->created_at->toFormattedDateString() }}</div>
                                        </div>
                                    @endif



                                @endif

                            </div>
                        </div>

                    </div>
                    <!-- #primary-project-content -->

                    <!-- #collect-and-share -->
                    <div id="project-owner-and-projects">
                        <div id="footer-owners-and-follow" class="dark-background cfix">
                            <div id="footer-owners" class="cfix">
                                <div class="user-image-container user-img-78 margin-right-15 left"><a
                                            href="#"><img
                                                class="user-image user-img-78 js-mini-profile"
                                                src="{{ $user->imageUrl() }}"></a></div>
                                <div class="user-info-container relative left cfix"><a
                                            class="owner-name text-ellipsis light-link" user_id="3559859"
                                            href="#"><span class="js-mini-profile">{{ $user->fullName() }}</span>'s
                                        Portfolio</a><br><a class="owner-location clear-left"
                                                            href="#">{{ $user->address }}</a>

                                    <div class="user-actions">
                                        @if(Auth::check() && Auth::user()->id != $project->user->id)
                                        <div class="user-follow js-action-follow-user follow-button-container">
                                            <a ng-hide="followed" ng-click="follow()" class="form-button follow js-form-button-follow form-button-follow form-button-small form-button-default form-button-left-icon form-button-icon-follow">Follow</a>

                                            <div ng-show="followed" class="follow-unfollow" ng-mouseover="showUnfollow(true)" ng-mouseleave="showUnfollow(false)">
                                                <a ng-hide="showUnfollowBtn" style="display: block" class="form-button following form-button-small form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                                <a ng-show="showUnfollowBtn" style="display: block" ng-click="unfollow()" class="form-button unfollow js-form-button-unfollow form-button-unfollow form-button-small form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                            </div>

                                        </div>
                                        @endif

                                        <a title="Message User"
                                           class="hide-phone hide form-button-light-and-grey form-button form-button-small send-message js-action-message-user js-adobeid-signup beicons-pre beicons-pre-mail"
                                           data-contact_name="Hiroyuki Izutsu" data-contact_id="3559859"
                                           unselectable="on">Message</a></div>
                                </div>
                                <!-- user-info-container --></div>
                            <!-- #footer-owners --></div>
                        <!-- #other-owners-and-follow -->
                        <div id="other-projects-content" class="cfix">
                            <ul id="other-projects">

                                @foreach($user->otherProjects(4, $project->id) as $pro)
                                    <li class="tooltipi-container other-project margin-left-10 ">
                                        <a href="{{ route('project.show', $pro->id) }}">
                                            <img src="{{ $pro->getImage() }}"
                                                 class="other-project-cover" data-pin-nopin="nopin"></a>
                                        <a href="#" class="tooltipi tooltipi-blue"><span
                                                    class="project-title block bold margin-bottom-5">{{ $pro->name }}</span><span
                                                    class="project-fields block">Drawing, Illustration, Painting</span></a>
                                    </li>
                                @endforeach

                            </ul>
                            <a id="view-all-projects" class="ui-corner beicons-pre beicons-pre-grid hide" href="#">View
                                All Projects</a></div>
                    </div>
                    <!-- #project-footer -->
                </div>


            </div>
            <!-- #project-main -->

        </div>
        <!-- #project-container -->
    </div>
    </div>
@stop