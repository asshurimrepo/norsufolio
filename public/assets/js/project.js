function ProjectController($scope, $http) {

    $scope.api = {
        'up': $('meta[name=up_project]').prop('content')
    };

    $scope.appreciated = false;

    $scope.upThis = function (e) {

        if (!$scope.appreciated) {
            $(e.target).addClass('icon-project-appreciate-thanks').removeClass('icon-project-appreciate');
            $http.post($scope.api.up + '/' + $scope.project.id);
            $scope.appreciated = true;
        }
    }

}