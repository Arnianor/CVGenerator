@extends('layouts.app')

@section('content')
        <!-- TODO Change the homepage to something more flashy -->
        <!-- Example: http://getbootstrap.com/examples/cover/ -->

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="inner cover">
					<h1>Welcome to CVGenerator</h1>

					<p class="lead">Want to get started on building your beautiful CV?</p>

					<p>
						@if (Auth::guest())
							<a class="btn btn-lg btn-success" href="auth/register" role="button">Yes please!</a>
							<a class="btn btn-lg btn-success" href="auth/login" role="button">Yep, log me in!</a>
						@else
							<a class="btn btn-lg btn-success" href="cvs" role="button">See your CVs</a>
						@endif
					</p>
				</div>
			</div>
		</div>
	</div>
    <!-- Ignore for now
    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
    -->

@endsection
