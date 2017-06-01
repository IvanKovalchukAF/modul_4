<div ng-app="Actions">
    <span ng-controller="LikeController">
        @if ($post->user->id != Auth::id())
            <button class="btn btn-default like btn-login" ng-click="like()">
                <i class="fa fa-heart"></i>
                <span class="likebtn-icon lb-like-icon">Like</span>
            </button>
        @endif
    </span>
</div>
<script>
    var app = angular.module("Actions", []);
    app.controller("LikeController", function($scope, $http) {

        checkLike();
        $scope.like = function() {
            var post = {
                id: "{{ $post->id }}",
            };
            $http.post('/api/v1/post/like', post).success(function(result) {
                checkLike();
            });
        };
        function checkLike(){
            $http.get('/api/v1/post/{{ $post->id }}/islikedbyme').success(function(result) {
                if (result == 'true') {
                    $scope.like_btn_text = "Delete Like";
                } else {
                    $scope.like_btn_text = "Like";
                }
            });
        };
    });
</script>
