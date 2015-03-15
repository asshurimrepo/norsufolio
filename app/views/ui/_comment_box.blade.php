<div id="project-comments" class="big-comments">
    <a name="comments"></a>


    <div id="comments-container" entity_type="project" entity_id="24344287">

        <div id="comments-header" class="comments-header">
            <h4 class="block-title"><span class="bold">Discuss This Project:</span> <span class="comments-stats hide"
                                                                                          style="display: inline;">(<span
                            class="comments-total">14</span> <span class="comments-total-text">Comments</span>)</span>
            </h4>
        </div>


        <div class="block-content" ng-controller="CommentsController">

            <div class="post-comment-block">

                @if(Auth::check())

                    <form name="comments_form" ng-submit="postComment()" class="form clear cfix relative comments-form"
                          accept-charset="utf-8" id="comments_form" onsubmit="return false;">
                        <div class="comment_text-counter-container cfix"><span id="comment_text-counter"
                                                                               class="right"></span></div>
                        <div class="form-item form-item-textarea ui-front" id="comment-container">
                        <span role="status"
                              aria-live="polite"
                              class="ui-helper-hidden-accessible"></span>
                        <textarea name="comment" ng-disabled="sending" ng-model="comment"
                                  class="form-textarea comment_text"
                                  rows="10" cols="60" id="comment" data-validate="required,Generic,length[0,800]"
                                  autocomplete="off" maxlength="800"></textarea>


                        </div>
                        <div class="form-item form-item-a" id="comments-form-submit-container">
                            <button ng-disabled="sending" type="submit" class="form-button comment-form-post form-button-default form-button-default form-button-post form-submit form-button-default"
                                    id="comments-form-submit">Post a Comment</button>
                        </div>

                    </form>

                @endif

            </div>
            <!-- /post-comment-block -->
            <div id="comments-list-container">

                <ul id="comments-list" class="comments-list js-comments-list">
                    <li class="comment-container cfix user-comment" style="display: list-item;"
                        ng-repeat="comment in comments">
                        <a class="comment-user-image-link left" href="#">
                            <img class="comment-user-image js-mini-profile"
                                 ng-src="@{{ comment.user.avatar }}" style="max-width: 50px">
                        </a>

                        <div class="comment-text-container left relative">
                            <div class="comment-user-date-wrap ui-corner cfix">
                                <a class="user-name-link bold js-mini-profile" data-id="3559859"
                                   href="#">@{{ comment.user.name }}</a>
                                <span class="comment-date hide-phone">About @{{ comment.posted_on }}</span>
                            </div>
                            <div class="comment-text-wrap">
                                <div class="comment-text">
                                    @{{ comment.comment }}
                                </div>
                            </div>
                            <span class="comment-date show-phone">About @{{ comment.posted_on }}</span>
                        </div>
                        <div class="comment-actions">
                            <a class="comment-action comment-spam js-spam"></a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- .comments-pagination -->

        </div>
        <!-- .block-content -->

    </div>
    <!-- #comments-container -->

</div>