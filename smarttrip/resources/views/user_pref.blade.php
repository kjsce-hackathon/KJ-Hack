@extends('layouts.app')

@section('css')	
	
	<link rel="stylesheet" href="jquery-bar-rating-master/examples/css/normalize.min.css">
    
    <link rel="stylesheet" href="jquery-bar-rating-master/examples/css/examples.css">

    <!-- Icons -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   
	<link rel="stylesheet" href="jquery-bar-rating-master/dist/themes/bars-pill.css">

	<link rel="stylesheet" href="jquery-bar-rating-master/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="jquery-bar-rating-master/dist/themes/css-stars.css">
    <link rel="stylesheet" href="jquery-bar-rating-master/dist/themes/bootstrap-stars.css">
    <link rel="stylesheet" href="jquery-bar-rating-master/dist/themes/fontawesome-stars-o.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div id="page-wrapper">
    	<div class="row"><br></div>
    	<div class="row">
    		<div class="col-sm-4">
    			<img src="img/user.PNG" style="height: 150px; width: 150px;">
    		</div>
    		<h3 class="pull-center">Welcome! <b>{{ Auth::user()->name }}</b></h3>
    		<h4>Please Add your Preferences here</h4>
    	</div>
    	<p class="page-header"></p>
    	@if (session('status'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('status') }}</strong>
            </div>
        @endif
    	<form action="{{ url('pref-profile') }}" method="post">
    			{{ csrf_field() }}
    			<div class="row">
		    		<div class="col-sm-1"><br>
		    			<img src="img/family-icon.PNG" style="height: 50px;width: 50px;">
		    		</div>
		    		<p class="pull-center">
		    		<h3 class="page-header">Family Preference </h3>
		    		<label>Select the checkbox for preference 1</label>
		    		<input type="checkbox" name="preference1" value="1">
		    		</p>
		    	</div>
    			<div class="row">   		
    				<div class="col-sm-3">
    					<label>Nature</label>
			                <select class="example-pill" name="NA" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Adventure</label>
			                <select class="example-pill" name="ADV" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Educational</label>
			                <select class="example-pill" name="EDU" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Religious places</label>
			                <select class="example-pill" name="RP" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Historical places</label>
			                <select class="example-pill" name="HP" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Shopping</label>
			                <select class="example-pill" name="S" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Entertainment</label>
			                <select class="example-pill" name="ENT" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Food</label>
			                <select class="example-pill" name="F" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Night Life</label>
			                <select class="example-pill" name="NL" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Sightseeing</label>
			                <select class="example-pill" name="SS" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>
				</div>

				<div class="row">
		    		<div class="col-sm-1"><br>
		    			<img src="img/friends-icon.PNG" style="height: 50px;width: 50px;">
		    		</div>
		    		<h3 class="pull-center page-header">Friends Preference</h3>
		    		<label>Select the checkbox for preference 2</label>
		    		<input type="checkbox" name="preference2" value="2">
		    	</div>
				<div class="row">   		
    				<div class="col-sm-3">
    					<label>Nature</label>
			                <select class="example-pill" name="NA_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Adventure</label>
			                <select class="example-pill" name="ADV_" autocomplete="off">
			                  <option value="A">A</option>
			                  <option value="B">B</option>
			                  <option value="C">C</option>
			                  <option value="D">D</option>
			                  <option value="E">E</option>
			                  <option value="F">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Educational</label>
			                <select class="example-pill" name="EDU_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Religious places</label>
			                <select class="example-pill" name="RP_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Historical places</label>
			                <select class="example-pill" name="HP_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Shopping</label>
			                <select class="example-pill" name="S_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Entertainment</label>
			                <select class="example-pill" name="ENT_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Food</label>
			                <select class="example-pill" name="F_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Night Life</label>
			                <select class="example-pill" name="NL_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>

            		<div class="col-sm-3">
    					<label>Sightseeing</label>
			                <select class="example-pill" name="SS_" autocomplete="off">
			                  <option value="0">A</option>
			                  <option value="1">B</option>
			                  <option value="2">C</option>
			                  <option value="3">D</option>
			                  <option value="4">E</option>
			                  <option value="5">F</option>
			                </select>			                
            		</div>
				</div>


				<div class="row"><br>
					<div class="col-sm-4">
    					<button type="submit" class="btn btn-primary btn-block">Save Preferences</button>
    				</div>
    				<br><br>
    			</div>
    		</form>
    	</div>
    </div>
@endsection

@section('script')
	
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="jquery-bar-rating-master/jquery.barrating.js"></script>
    <script src="jquery-bar-rating-master/examples/js/examples.js"></script>
@endsection