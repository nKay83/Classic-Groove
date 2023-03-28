<div class="control-btn">
  <div>
    <i class="fa-solid fa-album-collection"></i>
  </div>
  <div>
    <i class="fa-solid fa-heart"></i>
  </div>
  <div class="prev-track" onclick="prevTrack()"><i class="fa-solid fa-backward-step"></i></div>
  <div class="playpause-track" onclick="playpauseTrack()"><i class="fa-duotone fa-play"></i></div>
  <div class="next-track" onclick="nextTrack()"><i class="fa-solid fa-forward-step"></i></div>
  <div class="volume-container">
    <i class="fa-sharp fa-solid fa-volume"></i>
    <div>
      <input type="range" value="99" min="1" max="100" class="volume_slider" onchange="setVolume()">
    </div>
  </div>
</div>
<div class="time-btn">
  <span class="current-time">0:00</span>
  <input type="range" min="0" max="100" value="0" class="seek_slider" onchange="changeInputColorRange(), seekTo()">
  <span class="total-duration">0:30</span>
</div>
<div class="note">
  <span class="track-name">First song on the track list</span>
</div>