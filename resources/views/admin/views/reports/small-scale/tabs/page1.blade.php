<h5><b>1. Type of Small-Scale Hazards:</b></h5>
<p> A. Natural Hazards</p>
<select name="natural-hazards" class="form-control">
  <option value="Fire caused by another natural hazards, eg. lighting">Fire caused by another natural hazards, eg.
    lighting , eg.lighting Flood </option>
  <option value="Fallen trees caused by another natural hazards, eg. strong winds">Fallen trees caused by another
    natural hazards, eg. strong winds</option>
  <option value="Others, please specify">Others, please specify</option>
</select>
<textarea id="natural-hazard-specific-others" name="natural-hazard-specific-others" class="form-control natural-hazard-specific hidden" rows="1.5" cols="50"
  placeholder="Others, please specify">{{$report->data->{'natural-hazard-others'} ?? ''}}</textarea>


<br>
<p> B. Human-indicated Hazards</p>
<select name="human-indicated-hazards" class="form-control">
  <option value="Crime against learners">Crime against learners</option>
  <option value="Crime against school heads">Crime against school heads</option>
  <option value="Crime against teachers">Crime against teachers</option>
  <option value="Crime against school property">Crime against school property</option>
  <option value="Hostage-taking">Hostage-taking</option>
  <option value="Kidnapping of personnel">Kidnapping of personnel</option>
  <option value="Kidnapping of learner/s">Kidnapping of learner/s</option>
  <option value="Kidnapping threats">Kidnapping threats</option>
  <option value="Bombing">Bombing</option>
  <option value="Bomb threat">Bomb threat</option>
  <option value="Fire(Electrical wiring failure, etc.)">Fire(Electrical wiring failure, etc.)</option>
  <option value="Shooting incident">Shooting incident</option>
  <option value="Structural collapse as a result of engineering failures">Structural collapse as a result of engineering
    failures</option>
  <option value="Armed Conflict">Armed Conflict</option>
  <option value="Others, please specify">Others, please specify</option>
</select>
<textarea name="human-indicated-hazards-others" class="form-control" rows="1.5" cols="50"
  placeholder="Others, please specify">{{$report->data->{'human-indicated-hazards-others'} ?? ''}}</textarea>
<hr />

<label><b>2. Was the school at evaluation center due to the above incident/s?</b></label>
<select name="school-at-evalation-center" class="form-control">
  <option value="No">No</option>
  <option value="Yes">Yes</option>
</select></h5><br><br>
<label>If school was used as evaluation center, how many rooms were occupied?</label><br>
<input type="number" name="rooms-occupied" class="form-control" value="" required>>

<label>If school was as evacuation center, how many households were accommodated?</label><br>
<input type="number" name="households-accommodated" class="form-control" value="" required>>
<br>