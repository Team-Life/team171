<div class="modal" tabindex="-1" id="password-modal1">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" style="font-size:1.5rem">Enter Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="event.preventDefault(); Modalerase1()">
            <span aria-hidden="true" style="font-size:2rem;margin:0;padding-bottom: 4rem;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="password" id="password-input1" class="form-control" placeholder="Password" style="font-size:1.5rem">
        </div>
        <div class="modal-footer" style="display: flex; position:relative;height: 3.8rem;">
          <p id="error-message1" style="font-size:1.5rem;color: red; pading:0.5rem auto 1.5rem;font-weight:bold;position:absolute; top:0.5rem; left:0.5rem;"></p>
          <div>
              <div style="position:absolute; top:0.5rem; right:0.5rem; pading:0.5rem;">
                  <button type="button" class="btn btn-secondary" style="background-color: blue;" data-dismiss="modal" onclick="event.preventDefault(); Modalerase1()">Close</button>
                  <button type="button" class="btn btn-primary" style="background-color: blue;" id="password-submit1" onclick="event.preventDefault(); passwordCheck1()">Submit</button>
              </div>
          </div>
      </div>
  </div>
</div>
