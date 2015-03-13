<div class="js-item cover-block project-cover js-project-cover editable cfix first">  <div class="cover-img">    <a href="#" class="cover-img-link">        <div data-alt="{{ $project->name }}" data-rendered="rendered" style="
">                          <img alt="{{ $project->name }}" src="{{ $project->getImage() }}" class="img-responsive" title="{{ $project->name }}"></div>          </a>  </div>


    <div class="cover-info-stats">
        <div class="cover-info">
            <div class="cover-name">        <a href="#" class="projectName cover-name-link">{{ $project->name }}</a>      </div>

        </div><!-- .cover-info -->
        <div class="cover-stat-fields-wrap">
            <div class="cover-stat-wrap">
                <span class="cover-stat cover-stat-appreciations  beicons-pre beicons-pre-thumb"> {{ $project->upsCount() }}</span>
                <span class="cover-stat cover-stat-views beicons-pre beicons-pre-eye hide-phone"> {{ $project->views }}</span>
                <!-- .featured -->
            </div><!-- .cover-stat-wrap -->
            <div class="cover-fields">          <a href="#" title="Art Direction" class="field-link">Art Direction</a>,
                <a href="#" title="Fashion" class="field-link">Fashion</a>,
                <a href="#" title="Graphic Design" class="field-link">Graphic Design</a>      </div><!-- .cover-fields -->
        </div><!-- .cover-info -->
    </div><!-- #cover-stat-fields-wrap -->
</div>