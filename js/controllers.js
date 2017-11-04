angular.module("FinalApp")
    .controller("MainController",function($scope,$resource,PostResource){

        User = $resource("http://jsonplaceholder.typicode.com/users/:id",{id:"@id"});

        $scope.posts = PostResource.query();
        $scope.users = User.query();

        $scope.removePost = function(post){
            PostResource.delete({id:post.id},function(data){

                //response true
                if(data.$resolved){
                    $scope.posts = $scope.posts.filter(function(element){
                        return element.id !== post.id;
                    })
                }else{
                    alert('try again');
                }
            });


        }


    })

    .controller("PostController",['$scope','$routeParams','PostResource',
        function($scope,$routeParams,PostResource){
        $scope.title = 'Edit Post';
        $scope.post = PostResource.get({id:$routeParams.id});
            $scope.savePost = function() {
                PostResource.update({id: $scope.post.id}, {data: $scope.post}, function (data) {
                    console.log(data);
                });
            }

    }])

    .controller("NewPostController",['$scope','PostResource',
        function($scope,PostResource){
        $scope.title = 'Create Post';
        $scope.post = {};
        $scope.savePost = function(){
            PostResource.save({data:$scope.post},function(data){
                console.log(data);
            });
        }
    }]);