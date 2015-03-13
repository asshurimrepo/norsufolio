<div class="col-md-3">
            <div class="view">
                <div class="caption">
                    <p>47LabsDesign</p>
                    <a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a>
                    <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                </div>
                <img src="{{ $project->getImage()  }}" class="img-responsive">
            </div>
            <div class="info">
                <p class="small" style="text-overflow: ellipsis">{{ $project->name }}</p>
                <p class="small coral text-right"><i class="fa fa-clock-o"></i> Posted Today | {{ $project->created_at->diffForHumans() }} </small>
            </div>
            <div class="stats turqbg">
                <span class="fa fa-heart-o"> <strong>{{ rand(1, 100) }}</strong></span>
                <span class="fa fa-eye pull-right"> <strong>{{ rand(1, 1000) }}</strong></span>
            </div>
        </div>
