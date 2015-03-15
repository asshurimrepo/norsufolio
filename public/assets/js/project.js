function ProjectController($scope, $http) {

    $scope.api = {
        'up': $('meta[name=up_project]').prop('content'),
        'follow': $('meta[name=user_follow]').prop('content'),
        'unfollow': $('meta[name=user_unfollow]').prop('content'),
        'comment': $('meta[name=user_comment]').prop('content'),
        'comments': $('meta[name=comments]').prop('content')
    };

    $scope.appreciated = false;
    $scope.followed = false;
    $scope.showUnfollowBtn = false;

    $scope.upThis = function (e) {

        if (!$scope.appreciated) {
            $(e.target).addClass('icon-project-appreciate-thanks').removeClass('icon-project-appreciate');
            $http.post($scope.api.up + '/' + $scope.project.id);
            $scope.appreciated = true;
        }
    }

    $scope.follow = function(){

        if(!$scope.followed){
            $http.post($scope.api.follow + '/' + $scope.project.user.id);
            $scope.followed =  true;
        }

    };

    $scope.unfollow = function(){
        $scope.followed = false;
        $http.post($scope.api.unfollow + '/' + $scope.project.user.id);
    };

    $scope.showUnfollow = function(bool){
        $scope.showUnfollowBtn = bool;
    };

}



function CommentsController($scope, $http, $interval){

    $scope.comments = [];

    $scope.getComments = function(){
        $http.get($scope.$parent.api.comments + '/' + $scope.$parent.project.id).success(function(data){
            $scope.comments = data;
        });
    };


    $interval(function(){

        $scope.getComments();

    }, 1000);

    $scope.getComments();

    $scope.postComment = function(){
        if(this.comment){
            $scope.sending = true;
            $scope.comment_item = {
                project_id: $scope.$parent.project.id,
                comment: this.comment
            };

            $http.post($scope.$parent.api.comment +'/'+ $scope.comment_item.project_id, $scope.comment_item)
                .success(function(){
                    $scope.comment = '';
                    $scope.sending = false;
                    $scope.getComments();
                });
        }
    }
}