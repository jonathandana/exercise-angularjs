<form ng-submit="savePost()">
    <div class="card top-space">
        <div class="p+">
            <h1>{{title}}</h1>
            <div flex-container="row">
                <div flex-item="">
                    <lx-text-field label="Title">
                        <input type="text" ng-model="post.title">
                    </lx-text-field>
                </div>
            </div>
            <div flex-container="row">
                <div flex-item="">
                    <lx-text-field label="Body">
                        <textarea  ng-model="post.body"></textarea>
                    </lx-text-field>
                </div>
            </div>
            <div class="card__actions">
                <button type="submit" class="btn btn--blue btn--l btn--raised">Save</button>
            </div>
        </div>
    </div>
</form>