<div class="modal" tabindex="-1" id="password-modal3">
    <div class="modal-dialog" style="width: calc(60%);">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" style="font-size:1.5rem">Enter Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="event.preventDefault(); Modalerase3()">
            <span aria-hidden="true" style="font-size:2rem;margin:0;padding-bottom: 4rem;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="password" id="password-input3" class="form-control" placeholder="Password" style="font-size:1.5rem">
        </div>
        <div class="modal-footer" style="display: flex; position:relative;height: 3.8rem;">
          <p id="error-message3" style="font-size:1.5rem;color: red; pading:0.5rem auto 1.5rem;font-weight:bold;position:absolute; top:0.5rem; left:0.5rem;"></p>
          <div>
              <div style="position:absolute; top:0.5rem; right:0.5rem; pading:0.5rem;">
                  <button type="button" class="btn btn-secondary" style="background-color: blue;" data-dismiss="modal" onclick="event.preventDefault(); Modalerase3()">Close</button>
                  <button type="button" class="btn btn-primary" style="background-color: blue;" id="password-submit3" onclick="event.preventDefault(); passwordCheck3()">Submit</button>
              </div>
          </div>
      </div>
  </div>
</div>
