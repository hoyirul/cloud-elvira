<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content rad-8">
      <div class="modal-header">
        <h5 class="modal-title" id="filterModalLabel">Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/" method="get">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <input type="text" name="search" class="form-control rad-8 fs-normal" placeholder="Search here">    
          </div>

          <div>
            <select name="category" id="category" class="form-control rad-8 fs-normal">
              <option value="{{ 1 }}">Category 1</option>
              <option value="{{ 1 }}">Category 1</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary rad-8 fs-normal">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>