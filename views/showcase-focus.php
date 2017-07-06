<div class="outer" ng-if="toggleFocus == true" ng-click="closeFocus($event)">
  <div class="middle">
    <div class="inner-wrapper">

        <div class="image-view">
            
            <img ng-src="assets/img/uploaded/{{selectedItem.url}}">

        </div>

        <div class="technology-view">
            
            <i class="fa fa-times" ng-click="closeFocus($event)"></i>

            <h2>TECHNOLOGIES USED:</h2>

                <div class="icon-wrapper">

                    <figure ng-repeat="item in selectedItem.techarray">
                        <img ng-src="assets/img/uploaded/tech/{{item.img}}" alt="{{item.title}}">
                        <md-tooltip class="showme" md-direction="bottom">{{item.title}}</md-tooltip>
                    </figure>
                    
                </div>

        </div>

        <div class="description-view">

            <div class="slant">

                <h2>{{selectedItem.title}}</h2>

                <p><i>{{selectedItem.desc}}</i></p>

            </div>

            <p class="desc" ng-bind-html="selectedItem.text"></p>
<md-tooltip md-direction="bottom">hello</md-tooltip>
        </div>

        <div class="next-view" style="background-image:url('assets/img/uploaded/{{showcase[2].url}}');">
        
            <div class="next-view-overlay">

                <a href="#">Next <i class="fa fa-angle-right"></i></a>

            </div>
        
        </div>

        <div class="more-image-view">
        
            <div class="no-image"><h3>No additional images</h3></div>

        </div>

    </div>
  </div>
</div>