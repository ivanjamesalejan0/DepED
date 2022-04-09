<div class="panel-body">
  <h5>1. Type of Small-Scale Hazards:</h5>
  <p> A. Natural Hazards</p>
  <select name="natural-hazards" class="form-control">
    <option value="Fire caused by another natural hazards, eg. lighting" {{ ($report->data->{'natural-hazards'} ?? null) == 'Fire caused by another natural hazards, eg. lighting' ? 'selected' : '' }}>Fire caused by another natural hazards, eg.
      lighting , eg.lighting Flood </option>
    <option value="Fallen trees caused by another natural hazards, eg. strong winds" {{ ($report->data->{'natural-hazards'} ?? null) == 'Fallen trees caused by another natural hazards, eg. strong winds' ? 'selected' : '' }}>Fallen trees caused by another
      natural hazards, eg. strong winds</option>
    <option value="Others, please specify" {{ ($report->data->{'natural-hazards'} ?? null) == 'Others, please specify' ? 'selected' : '' }}>Others, please specify</option>
  </select>
  <textarea id="natural-hazard-specific-others" name="natural-hazard-specific-others" class="form-control {{($report->data->{'natural-hazards'} ?? null) == 'Others, please specify' ? '' : 'hidden' }}" rows="1.5" cols="50" placeholder="Others, please specify">{{$report->data->{'natural-hazard-specific-others'} ?? ''}} </textarea>
</div>


<div class="panel-body">
  <p> B. Human-indicated Hazards</p>
  <select name="human-indicated-hazards" class="form-control">
    <option value="Crime against learners" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Crime against learners' ? 'selected' : '' }}>Crime against learners</option>
    <option value="Crime against school heads" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Crime against school heads' ? 'selected' : '' }}>Crime against school heads</option>
    <option value="Crime against teachers" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Crime against teachers' ? 'selected' : '' }}>Crime against teachers</option>
    <option value="Crime against school property" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Crime against school property' ? 'selected' : '' }}>Crime against school property</option>
    <option value="Hostage-taking" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Hostage-taking' ? 'selected' : '' }}>Hostage-taking</option>
    <option value="Kidnapping of personnel" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Kidnapping of personnel' ? 'selected' : '' }}>Kidnapping of personnel</option>
    <option value="Kidnapping of learner/s" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Kidnapping of learner/s' ? 'selected' : '' }}>Kidnapping of learner/s</option>
    <option value="Kidnapping threats" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Kidnapping threats' ? 'selected' : '' }}>Kidnapping threats</option>
    <option value="Bombing" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Bombing' ? 'selected' : '' }}>Bombing</option>
    <option value="Bomb threat" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Bomb threat' ? 'selected' : '' }}>Bomb threat</option>
    <option value="Fire(Electrical wiring failure, etc.)" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Fire(Electrical wiring failure, etc.)' ? 'selected' : '' }}>Fire(Electrical wiring failure, etc.)</option>
    <option value="Shooting incident" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Shooting incident' ? 'selected' : '' }}>Shooting incident</option>
    <option value="Structural collapse as a result of engineering failures" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Structural collapse as a result of engineering failures' ? 'selected' : '' }}>Structural collapse as a result of engineering
      failures</option>
    <option value="Armed Conflict" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Armed Conflict' ? 'selected' : '' }}>Armed Conflict</option>
    <option value="Others, please specify" {{ ($report->data->{'human-indicated-hazards'} ?? null) == 'Others, please specify' ? 'selected' : '' }}>Others, please specify</option>
  </select>
  <textarea id="human-indicated-hazards-others" name="human-indicated-hazards-others" class="form-control {{($report->data->{'human-indicated-hazards'} ?? null) == 'Others, please specify' ? '' : 'hidden' }}" rows="1.5" cols="50" placeholder="Others, please specify">{{$report->data->{'human-indicated-hazards-others'} ?? ''}}</textarea>
</div>

<div class="panel-body">
  <h5>2. Was the school at evaluation center due to the above incident/s?</h5>
  <select name="school-at-evalation-center" class="form-control">
    <option value="No" {{ ($report->data->{'school-at-evalation-center'} ?? null) == 'No' ? 'selected' : '' }}>No</option>
    <option value="Yes" {{ ($report->data->{'school-at-evalation-center'} ?? null) == 'Yes' ? 'selected' : '' }}>Yes</option>
  </select>
  <div id="school-is-used-as-evaluation" class="hidden">
    <h5>If school was used as evaluation center, how many rooms were occupied?</h5>
    <input type="number" name="rooms-occupied" class="form-control" value="{{$report->data->{'rooms-occupied'} ?? ''}}">

    <h5>If school was as evacuation center, how many households were accommodated?</h5>
    <input type="number" name="households-accommodated" class="form-control" value="{{$report->data->{'households-accommodated'} ?? ''}}">
  </div>
</div>