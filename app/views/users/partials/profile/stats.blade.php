<div id="profile-stats"
     class="profile-section content-minor-section content-mobile-first-section js-profile-stats">
    <div class="profile-stat">
        <div class="profile-stat-label profile-sidebar-label content-minor-secton-label beicons-pre beicons-pre-eye">
            <span class="stat-text">Project Views</span></div>
        <div class="profile-stat-count"><a href="#" class="js-project-views-count">{{ $current_user->projectViews() }}</a></div>
    </div>
    <!-- /.profile-stat -->
    <div class="profile-stat">
        <div class="profile-stat-label profile-sidebar-label content-minor-secton-label beicons-pre beicons-pre-thumb">
            <span class="stat-text">Ups</span></div>
        <div class="profile-stat-count"><a href="#" class="js-appreciations-count">{{ $current_user->upsCount() }}</a></div>
    </div>
    <!-- /.profile-stat -->
    <div class="profile-stat">
        <div class="profile-stat-label profile-sidebar-label content-minor-secton-label beicons-pre beicons-pre-followers">
            <span class="stat-text">Followers</span></div>
        <div class="profile-stat-count"><a href="#" class="js-followers-count">{{ $current_user->followers()->count() }}</a></div>
    </div>
    <!-- /.profile-stat -->
    <div class="profile-stat">
        <div class="profile-stat-label profile-sidebar-label content-minor-secton-label beicons-pre beicons-pre-following">
            <span class="stat-text">Following</span></div>
        <div class="profile-stat-count"><a href="#" class="js-following-count">{{ $current_user->following()->count() }}</a></div>
    </div>
    <!-- /.profile-stat --></div>