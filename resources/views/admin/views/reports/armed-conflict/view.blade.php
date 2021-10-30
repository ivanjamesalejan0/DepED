<script>
var requiredCSS = [
  "{{ asset('assets/css/pdf-style.css') }}",
];
loadCSS(requiredCSS);
</script>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{$report->name}}</h4>
        </div>
        <div class="panel-body">
          <div class="profile__avatar">
            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="...">
          </div>
          <div class="profile__header">
            <h4>{{$report->teacher->lastname}}, {{$report->teacher->firstname}} {{$report->teacher->middlename}}<small>Teacher</small></h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nostrum odio cum repellat veniam eligendi rem cumque magnam autem delectus qui.
            </p>
            <p>
              <a href="#">Bukidnon State University</a>
            </p>
          </div>
        </div>
      </div>

      <!-- User info -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Report Info</h4>
        </div>
        <div class="panel-body">
          <table class="table profile__table">
            <tbody>
              <tr>
                <th><strong>Location</strong></th>
                <td>{{$report->province}}, {{$report->municipality}}, {{$report->barangay}}</td>
              </tr>
              <tr>
                <th><strong>Type</strong></th>
                <td>{{ $report->data->{'report-type'} }}</td>
              </tr>
              <tr>
                <th><strong>Date</strong></th>
                <td>{{$report->created_at}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Community -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Report Detail</h4>
        </div>
        <div class="panel-body">
          <table class="table profile__table">
            <tbody>
              @foreach($report->data as $r=>$d)
              <tr>
                <th><strong>{{ strtoupper($r) }}</strong></th>
                <td>{{ strtoupper($d) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!-- Latest posts -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Latest posts</h4>
        </div>
        <div class="panel-body">
          <div class="profile__comments">
            <div class="profile-comments__item">
              <div class="profile-comments__controls">
                <a href="#"><i class="fa fa-share-square-o"></i></a>
                <a href="#"><i class="fa fa-edit"></i></a>
                <a href="#"><i class="fa fa-trash-o"></i></a>
              </div>
              <div class="profile-comments__avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
              </div>
              <div class="profile-comments__body">
                <h5 class="profile-comments__sender">
                  Richard Roe <small>2 hours ago</small>
                </h5>
                <div class="profile-comments__content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                </div>
              </div>
            </div>
            <div class="profile-comments__item">
              <div class="profile-comments__controls">
                <a href="#"><i class="fa fa-share-square-o"></i></a>
                <a href="#"><i class="fa fa-edit"></i></a>
                <a href="#"><i class="fa fa-trash-o"></i></a>
              </div>
              <div class="profile-comments__avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="...">
              </div>
              <div class="profile-comments__body">
                <h5 class="profile-comments__sender">
                  Richard Roe <small>5 hours ago</small>
                </h5>
                <div class="profile-comments__content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                </div>
              </div>
            </div>
            <div class="profile-comments__item">
              <div class="profile-comments__controls">
                <a href="#"><i class="fa fa-share-square-o"></i></a>
                <a href="#"><i class="fa fa-edit"></i></a>
                <a href="#"><i class="fa fa-trash-o"></i></a>
              </div>
              <div class="profile-comments__avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
              </div>
              <div class="profile-comments__body">
                <h5 class="profile-comments__sender">
                  Richard Roe <small>1 day ago</small>
                </h5>
                <div class="profile-comments__content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-xs-12 col-sm-3">

      <!-- Contact user -->
      <p>
        <a href="#" class="profile__contact-btn btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#profile__contact-form">
          Contact Teacher <span class="glyphicon glyphicon-envelope"></span>
        </a>
        <a href="views/admin/reports/{{$report->id}}?type={{$report->data->{'report-type'} ?? ''}}&download=pdf" target="_blank" class="profile__contact-btn btn btn-lg btn-block btn-primary">
          Download PDF <span class="glyphicon glyphicon-download-alt"></span>
        </a>
      </p>

      <hr class="profile__contact-hr">

      <!-- Contact info -->
      <div class="profile__contact-info">
        <div class="profile__contact-info-item">
          <div class="profile__contact-info-icon">
            <i class="fa fa-phone"></i>
          </div>
          <div class="profile__contact-info-body">
            <h5 class="profile__contact-info-heading">Work number</h5>
            (000)987-65-43
          </div>
        </div>
        <div class="profile__contact-info-item">
          <div class="profile__contact-info-icon">
            <i class="fa fa-phone"></i>
          </div>
          <div class="profile__contact-info-body">
            <h5 class="profile__contact-info-heading">Mobile number</h5>
            (000)987-65-43
          </div>
        </div>
        <div class="profile__contact-info-item">
          <div class="profile__contact-info-icon">
            <i class="fa fa-envelope-square"></i>
          </div>
          <div class="profile__contact-info-body">
            <h5 class="profile__contact-info-heading">E-mail address</h5>
            <a href="mailto:admin@domain.com">admin@domain.com</a>
          </div>
        </div>
        <div class="profile__contact-info-item">
          <div class="profile__contact-info-icon">
            <i class="fa fa-map-marker"></i>
          </div>
          <div class="profile__contact-info-body">
            <h5 class="profile__contact-info-heading">Work address</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

    </div>
  </div>
</div>