      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            {{ Auth::user()->password }}
            <li><a href="">Nav item</a></li>
          </ul>
          <button type="button" class="btn btn-secondary btn-lg btn-block">+ Add Goal</button>
        </div>
      </div>