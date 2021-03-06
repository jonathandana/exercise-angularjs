<lx-tabs>
    <lx-tab heading="Post">
        <div class="p+">
            <div class="card top-space" ng-repeat="post in posts">
                <div class="p+">
                    <strong class="fs-headline display-block tc-red-900">
                        {{post.title}}
                    </strong>
                    <div class="paragraph fs-body-1 mt+">
                        {{post.body}}
                    </div>
                </div>
                <div class="card_actions p+">
                    <a href="post/{{post.id}}" class="btn btn--m btn--blue btn--flat" lx-ripple>Read More</a>
                    <a href="edit/{{post.id}}" class="btn btn--m btn--blue btn--flat btn--orange" lx-ripple>Edit</a>
                    <a ng-click="removePost(post)" class="btn btn--m btn--red btn--flat" lx-ripple>Remove</a>

                </div>
            </div>
        </div>
    </lx-tab>
    <lx-tab heading="User">
        <div class="p+">
            <div class="card top-space" ng-repeat="user in users">
                <div flex-container="row">
                    <div class="card__img card__img--left" style="height: 160px">
                        <img src="imgs/user.jpg">
                    </div>
                    <div flex-item flex-container="column">
                        <div flex-item>
                            <strong class="fs-headline display-block tc-red-900">
                                {{user.name}}
                            </strong>
                            <strong class="fs-subhead display-block tc-black-2">
                                {{user.email}}
                            </strong>

                            <div class="cars__actions">
                                <a href="#">Ver Usuario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </lx-tab>
</lx-tabs>