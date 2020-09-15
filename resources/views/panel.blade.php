@extends('layouts.app')

@section('title','Admin Panel')


<title>{{config('app.name')}}</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BeMo Admin Panel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->

                    <table>
                        <tr><td>a. Easy way to change images.</tr>
                        <tr><td>b. A simple switch to turn any page to "no-index" so it's not crawled by search engines.</td></tr>
                        <tr><td>c. Easy to change text.</td></tr>
                        <tr><td>d. Easy to style text (bold, italics, strikethrough, create links, center text, and turn text to H1, H2, H3).</td></tr>
                        <tr><td>e. Include a space for each page to include meta title and meta description.</td></tr>
                        <tr><td>f. Include a space in the panel to include Facebook advertising pixel and a separate section to include Google analytics tag - these should be global - i.e. including the code, will integrate the tags across all existing and future pages. (We will later test these by including our actual tags in the area you incidate in the panel to make sure they are functional - if oyu are not familiar with these tags a quick Internet search should result in sample codes and explanation about these codes by Google and Facebook themselves).</td></tr>
                        <tr><td>g. Create a space in the panel for the contact form to link any email address to the contact from as we will be testing the functionality.</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
