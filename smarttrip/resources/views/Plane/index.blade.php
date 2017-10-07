@extends('layouts.app')




@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8" style="margin-top: 50px;">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  Make Plan
                </div>
                <div class="panel-body">
                  <form role="form" action="{{ url('make-plan') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Number of Days</label>
                      <input type="number" name="noDays" class="form-control" required>
                      <p class="help-block">Example: 10.</p>
                    </div>

                    <div class="form-group">
                      <label>Number of Person</label>
                      <input type="number" name="noPerson" class="form-control" required>
                      <p class="help-block">Example: 2.</p>
                    </div>

                    <div class="form-group">
                      <label>Select Profile</label>
                      <select class="form-control" name="preference" required>
                        <option>Select your preference</option>
                        <option value="family">Family</option>
                        <option value="friends">Friends</option>
                      </select>
                    </div>

                    <div class="page-header"></div>
                    <div class="form-group">
                      <button class="btn btn-md btn-success pull-right" type="submit">Show Available Plan</button>
                    </div>
                  </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
@endsection