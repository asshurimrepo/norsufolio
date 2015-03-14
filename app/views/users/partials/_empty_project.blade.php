<div id="empty-projects" class="empty-wrap">

    <div class="profile-empty-sprite profile-empty-projects-empty"></div>
    <h1 class="empty-header">Add Projects to Your Portfolio</h1>

    <div class="hide-phone hide-tablet"> Projects added to your portfolio (and made public) are
        submitted to the gallery and eligible to be "featured".

        <a href="{{ route('user.project.create', [$current_user->id]) }}" id="upload-project"
           class="form-button form-button-massive form-button-default">Upload My First Project</a>
    </div>
    <div class="show-phone show-tablet"> You haven't uploaded any projects. Add projects to your
        portfolio from the desktop or our <a
                href="http://c00.adobe.com/579cf86a-96dc-4de9-9ba0-e1e8a00ab180/xn5ym653/i/489667151"
                target="_blank">iOS app</a>.
    </div>
</div>