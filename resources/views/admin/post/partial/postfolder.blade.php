<div class="card">
    <div class="card-header">
      <h3 class="card-title">Folders</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body p-0" style="display: block;">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item active">
          <a href="#" class="nav-link">
            <i class="fas fa-inbox"></i> Post
            <span class="badge bg-primary float-right">{{$count}}</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i> Drafts
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-blogger"></i> Publish
            <span class="badge bg-primary float-right">{{$countpublish}}</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.card-body -->
  </div>
