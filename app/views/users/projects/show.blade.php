@extends(Auth::check() ? 'users.user_master' : 'master')

@section('header')
    @parent
    {{--{{ link_css('assets/users/css/edit.css') }}--}}
    {{ link_css('assets/css/text-list.css') }}
    {{ link_css('assets/css/footer-infinity.css') }}
    {{ link_css('assets/css/responsive.css') }}

@stop

@section('bodyAtt')
    class="logged-in logged-in-1 corepacki networki responsive no-padding project-view project-styles show-cta editor-version-4 no-right-column be-network no-has-touch has-placeholders globalnav__external__no-touch"
@stop

@section('body')
    <div id="project-container-wrapper">
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
                            <div id="owner-buttons-container" class="clear">
                                <div class=" js-action-follow-user follow-button-container">
                                    <a class="form-button js-form-button-follow form-button-follow form-button-large form-button-default form-button-left-icon form-button-icon-follow">Follow</a>
                                    <a class="form-button form-button-following form-button-large form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                    <a class="form-button js-form-button-unfollow form-button-unfollow form-button-large form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- secondary actions -->
                    <div class="sidebar-block sidebar-actions">
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
                                        <div class=" js-action-follow-user follow-button-container">
                                            <a class="form-button js-form-button-follow form-button-follow form-button-large form-button-default form-button-left-icon form-button-icon-follow">Follow</a>
                                            <a class="form-button form-button-following form-button-large form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                            <a class="form-button js-form-button-unfollow form-button-unfollow form-button-large form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- #proj-header -->
                    <div id="primary-project-content" class="project-styles hd_images_enabled">
                        <ul id="project-modules" class="editor-modules-version-4"
                            style="background-color: transparent;">

                        </ul>
                        <div id="appreciation">
                            <div id="appreciation-tooltipi" class="tooltipi-container">
                                <span id="appreciation-sticker"
                                      class="icon-project-appreciate ccn-appreciation-sprite"></span>
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
                                        <div class="user-follow js-action-follow-user follow-button-container"
                                             data-followee="3559859"><a
                                                    class="form-button js-form-button-follow form-button-follow form-button-small form-button-default form-button-left-icon form-button-icon-follow">Follow</a>
                                            <a class="form-button form-button-following form-button-small form-button-light-and-grey form-button-left-icon form-button-icon-following">Following</a>
                                            <a class="form-button js-form-button-unfollow form-button-unfollow form-button-small form-button-red form-button-left-icon form-button-icon-unfollow">Unfollow&nbsp;</a>
                                        </div>
                                        <a title="Message User"
                                           class="hide-phone form-button-light-and-grey form-button form-button-small send-message js-action-message-user js-adobeid-signup beicons-pre beicons-pre-mail"
                                           data-contact_name="Hiroyuki Izutsu" data-contact_id="3559859"
                                           unselectable="on">Message</a></div>
                                </div>
                                <!-- user-info-container --></div>
                            <!-- #footer-owners --></div>
                        <!-- #other-owners-and-follow -->
                        <div id="other-projects-content" class="cfix">
                            <ul id="other-projects">
                                <li class="tooltipi-container other-project margin-left-10 "><a
                                            href="https://www.behance.net/gallery/24442023/Adventure-over-the-sky-8"><img
                                                src="https://mir-cdn.behance.net/v1/rendition/projects/115/b4c42b24442023.5502648a34c1f.jpg"
                                                class="other-project-cover" data-pin-nopin="nopin"></a><a
                                            href="https://www.behance.net/gallery/24442023/Adventure-over-the-sky-8"
                                            class="tooltipi tooltipi-blue"><span
                                                class="project-title block bold margin-bottom-5">Adventure over the sky 8（空の冒険）</span><span
                                                class="project-fields block">Drawing, Illustration, Painting</span></a>
                                </li>
                                <li class="tooltipi-container other-project margin-left-10 "><a
                                            href="https://www.behance.net/gallery/23701825/Cover-illustration-of-the-weekly-magazine-The-novel"><img
                                                src="https://mir-cdn.behance.net/v1/rendition/projects/115/41cba223701825.54ea9424ae59a.jpg"
                                                class="other-project-cover" data-pin-nopin="nopin"></a><a
                                            href="https://www.behance.net/gallery/23701825/Cover-illustration-of-the-weekly-magazine-The-novel"
                                            class="tooltipi tooltipi-blue"><span
                                                class="project-title block bold margin-bottom-5">Cover illustration of the weekly magazine "The novel"</span><span
                                                class="project-fields block">Editorial Design, Illustration, Painting</span></a>
                                </li>
                                <li class="tooltipi-container other-project margin-left-10 "><a
                                            href="https://www.behance.net/gallery/24344287/Adventure-over-the-sky-7"><img
                                                src="https://mir-cdn.behance.net/v1/rendition/projects/115/96ed1924344287.54fe62f46d3bc.jpg"
                                                class="other-project-cover" data-pin-nopin="nopin"></a><a
                                            href="https://www.behance.net/gallery/24344287/Adventure-over-the-sky-7"
                                            class="tooltipi tooltipi-blue"><span
                                                class="project-title block bold margin-bottom-5">Adventure over the sky 7（空の冒険）</span><span
                                                class="project-fields block">Drawing, Illustration, Painting</span></a>
                                </li>
                                <li class="tooltipi-container other-project margin-left-10 hide-phone"><a
                                            href="https://www.behance.net/gallery/23392675/White-dining-table"><img
                                                src="https://mir-cdn.behance.net/v1/rendition/projects/115/7f9dec23392675.54d2e61c874ba.jpg"
                                                class="other-project-cover" data-pin-nopin="nopin"></a><a
                                            href="https://www.behance.net/gallery/23392675/White-dining-table"
                                            class="tooltipi tooltipi-blue"><span
                                                class="project-title block bold margin-bottom-5">White dining table（白い食卓）</span><span
                                                class="project-fields block">Art Direction, Drawing, Illustration</span></a>
                                </li>
                                <li class="tooltipi-container other-project margin-left-10 hide-phone"><a
                                            href="https://www.behance.net/gallery/24221107/Adventure-over-the-sky-7"><img
                                                src="https://mir-cdn.behance.net/v1/rendition/projects/115/fd2fca24221107.54f82278e4a50.jpg"
                                                class="other-project-cover" data-pin-nopin="nopin"></a><a
                                            href="https://www.behance.net/gallery/24221107/Adventure-over-the-sky-7"
                                            class="tooltipi tooltipi-blue"><span
                                                class="project-title block bold margin-bottom-5">Adventure over the sky 7（空の冒険）</span><span
                                                class="project-fields block">Drawing, Illustration, Painting</span></a>
                                </li>
                            </ul>
                            <a id="view-all-projects" class="ui-corner beicons-pre beicons-pre-grid" href="/izutsu">View
                                All Projects</a></div>
                    </div>
                    <!-- #project-footer -->

                    <div id="project-comments" class="big-comments">
                        <a name="comments"></a>

                        <div id="comments-container" entity_type="project" entity_id="24349017">

                            <div id="comments-header" class="comments-header">
                                <h4 class="block-title"><span class="bold">Discuss This Project:</span> <span
                                            class="comments-stats hide" style="display: inline;">(<span
                                                class="comments-total">32</span> <span class="comments-total-text">Comments</span>)</span>
                                </h4>
                            </div>


                            <div class="block-content">

                                <div class="post-comment-block">
                                    <form name="comments_form" method="post"
                                          class="form clear cfix relative comments-form" accept-charset="utf-8"
                                          id="comments_form" action="/comments/project" onsubmit="return false;">
                                        <div class="comment_text-counter-container cfix"><span
                                                    id="comment_text-counter"
                                                    class="right"></span>
                                        </div>
                                        <div class="form-item form-item-textarea ui-front"
                                             id="comment-container"><span
                                                    role="status" aria-live="polite"
                                                    class="ui-helper-hidden-accessible"></span><textarea
                                                    name="comment"
                                                    class="form-textarea comment_text js-characters-limited validate[required,Generic,length[0,800]] ui-autocomplete-input"
                                                    rows="10"
                                                    cols="60"
                                                    id="comment"
                                                    data-validate="required,Generic,length[0,800]"
                                                    autocomplete="off"
                                                    maxlength="800"></textarea>

                                            <div class="js-char-limiter character-counter counter-normal"><span
                                                        class="letters-remaining">Characters left:</span> 800
                                            </div>
                                            <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all mention-menu"
                                                id="ui-id-1" tabindex="0" style="display: none;"></ul>
                                        </div>
                                        <div class="form-item form-item-a" id="comments-form-submit-container"><a
                                                    class="form-button comment-form-post form-button-default form-button-default form-button-post form-submit form-button-default"
                                                    unselectable="on" id="comments-form-submit">Post a Comment</a>
                                        </div>
                                        <div class="form-item form-item-a" id="comments-form-cancel-container"><a
                                                    class="form-button comment-form-cancel form-button-small form-button-cancel form-button-dark"
                                                    unselectable="on" id="comments-form-cancel">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /post-comment-block -->
                                <div id="comments-list-container">
                                    <ul id="comments-list" class="comments-list js-comments-list">
                                        <li class="comment-container cfix user-comment" data-id="19719485"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/izutsu">
                                                <img class="comment-user-image js-mini-profile" data-id="3559859"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/3559859.53a763148230d.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="3559859"
                                                       href="https://www.behance.net/izutsu">Hiroyuki Izutsu</a>
                                                    <span class="comment-date hide-phone">About 3 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Thank you. <a class="js-mini-profile"
                                                                                            href="https://www.behance.net/aureavisual"
                                                                                            data-id="113506">@Alejandro
                                                            Cisneros</a> <a class="js-mini-profile"
                                                                            href="https://www.behance.net/didierbashev"
                                                                            data-id="1146701">@Denis Bashev</a>
                                                    </div>
                                                </div>
                                                <span class="comment-date show-phone">About 3 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19719469"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/izutsu">
                                                <img class="comment-user-image js-mini-profile" data-id="3559859"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/3559859.53a763148230d.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="3559859"
                                                       href="https://www.behance.net/izutsu">Hiroyuki Izutsu</a>
                                                    <span class="comment-date hide-phone">About 3 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Thank you.<a class="js-mini-profile"
                                                                                           href="https://www.behance.net/OrhanOcak"
                                                                                           data-id="7046423">@Orhan
                                                            Ocak</a> <a class="js-mini-profile"
                                                                        href="https://www.behance.net/liudanyes"
                                                                        data-id="7824729">@liu dan</a> <a
                                                                class="js-mini-profile"
                                                                href="https://www.behance.net/lucyvardanyan"
                                                                data-id="10414215">@Lucy Vardanyan</a></div>
                                                </div>
                                                <span class="comment-date show-phone">About 3 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19719443"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/izutsu">
                                                <img class="comment-user-image js-mini-profile" data-id="3559859"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/3559859.53a763148230d.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="3559859"
                                                       href="https://www.behance.net/izutsu">Hiroyuki Izutsu</a>
                                                    <span class="comment-date hide-phone">About 3 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Thank you,<a class="js-mini-profile"
                                                                                           href="https://www.behance.net/Barbara-Szwedowska"
                                                                                           data-id="6012161">@Barbara
                                                            Szwedowska</a></div>
                                                </div>
                                                <span class="comment-date show-phone">About 3 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19719431"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/izutsu">
                                                <img class="comment-user-image js-mini-profile" data-id="3559859"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/3559859.53a763148230d.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="3559859"
                                                       href="https://www.behance.net/izutsu">Hiroyuki Izutsu</a>
                                                    <span class="comment-date hide-phone">About 3 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Thank you.<a class="js-mini-profile"
                                                                                           href="https://www.behance.net/Anzelmgabz"
                                                                                           data-id="56901">@Grzegorz
                                                            Domaradzki</a></div>
                                                </div>
                                                <span class="comment-date show-phone">About 3 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19716371"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/didierbashev">
                                                <img class="comment-user-image js-mini-profile" data-id="1146701"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/b8b5d61146701.54d9c4e64a59d.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="1146701"
                                                       href="https://www.behance.net/didierbashev">Denis Bashev</a>
                                                    <span class="comment-date hide-phone">About 7 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">awesome</div>
                                                </div>
                                                <span class="comment-date show-phone">About 7 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19714577"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/aureavisual">
                                                <img class="comment-user-image js-mini-profile" data-id="113506"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/113506.53ab7d0471435.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="113506"
                                                       href="https://www.behance.net/aureavisual">Alejandro
                                                        Cisneros</a>
                                                    <span class="comment-date hide-phone">About 8 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Great taste!</div>
                                                </div>
                                                <span class="comment-date show-phone">About 8 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19714137"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/lucyvardanyan">
                                                <img class="comment-user-image js-mini-profile" data-id="10414215"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/6e106910414215.54ddb272b4ea8.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile"
                                                       data-id="10414215"
                                                       href="https://www.behance.net/lucyvardanyan">Lucy
                                                        Vardanyan</a>
                                                    <span class="comment-date hide-phone">About 8 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Great work !</div>
                                                </div>
                                                <span class="comment-date show-phone">About 8 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19714001"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/liudanyes">
                                                <img class="comment-user-image js-mini-profile" data-id="7824729"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/0a8dca7824729.54e04ae2a172b.png">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="7824729"
                                                       href="https://www.behance.net/liudanyes">liu dan</a>
                                                    <span class="comment-date hide-phone">About 8 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">Very nice!</div>
                                                </div>
                                                <span class="comment-date show-phone">About 8 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19713045"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/OrhanOcak">
                                                <img class="comment-user-image js-mini-profile" data-id="7046423"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/7046423.53cade173ff56.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="7046423"
                                                       href="https://www.behance.net/OrhanOcak">Orhan Ocak</a>
                                                    <span class="comment-date hide-phone">About 9 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text"><a rel="nofollow"
                                                                                 href="http://www.behance.net/OrhanOcak"
                                                                                 target="_blank">https://www.behance.net/OrhanOcak</a>
                                                        Please check out mine here ! NICE WORK
                                                    </div>
                                                </div>
                                                <span class="comment-date show-phone">About 9 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                        <li class="comment-container cfix user-comment" data-id="19712307"
                                            style="display: list-item;">
                                            <a class="comment-user-image-link left"
                                               href="https://www.behance.net/Barbara-Szwedowska">
                                                <img class="comment-user-image js-mini-profile" data-id="6012161"
                                                     src="https://mir-cdn.behance.net/v1/rendition/user/50/6012161.53c3e5617fa54.jpg">
                                            </a>

                                            <div class="comment-text-container left relative">
                                                <div class="comment-user-date-wrap ui-corner cfix">
                                                    <a class="user-name-link bold js-mini-profile" data-id="6012161"
                                                       href="https://www.behance.net/Barbara-Szwedowska">Barbara
                                                        Szwedowska</a>
                                                    <span class="comment-date hide-phone">About 10 hours ago</span>
                                                </div>
                                                <div class="comment-text-wrap">
                                                    <div class="comment-text">So beautiful :)</div>
                                                </div>
                                                <span class="comment-date show-phone">About 10 hours ago</span>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-action comment-spam js-spam"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="comments-pagination">

                                    <a class="see-more-button-container">
                                        <div class="form-button form-button-see-more">See More <span
                                                    class="darr">↓</span></div>
                                        <div class="form-button form-button-loading">Loading<span
                                                    class="darr">…</span>
                                        </div>
                                    </a>

                                </div>
                                <!-- .comments-pagination -->

                            </div>
                            <!-- .block-content -->

                        </div>
                        <!-- #comments-container -->

                        <script type="text/html" id="comment-template">
                            <li class="comment-container cfix ${ user_owner }-comment" comment_id="${ comment_id }">
                                <a class="comment-user-image-link left" href="${ user_url }">
                                    <img class="comment-user-image" src="${ user_image }"/>
                                </a>

                                <div class="comment-text-container left relative">
                                    <div class="comment-user-date-wrap ui-corner cfix"><a
                                                class="user-name-link bold"
                                                href="${ user_url }">${
                                            user_name }</a> ${ replied_to }&nbsp;<span
                                                class="comment-date absolute">${ posted_on }</span>
                                    </div>
                                    <div class="comment-text-wrap">
                                        <div class="comment-text"></div>
                                    </div>
                                </div>
                                <a class="comment-${ close } small-text">Delete</a>
                            </li>
                        </script>
                    </div>
                </div>


            </div>
            <!-- #project-main -->

        </div>
        <!-- #project-container -->
    </div>
    </div>
@stop