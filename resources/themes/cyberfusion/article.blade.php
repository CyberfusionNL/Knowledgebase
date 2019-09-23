@extends('layouts.master')

@section('title')
    <h1 style="font-weight: 400"><strong>Aan de slag</strong> met <br/>de <strong>Cyberfusion-tutorials</strong></h1>
@endsection

@section('header')
    @include('partials.articles.header')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('partials.articles.sidebar')
                <div class="col-8">
                    <h2 style="font-size: 1.875em">Release-384</h2>
                    <h5>USERS CAN LIST FLOWS</h5>
                    <span>For some time now it’s been possible for users to list flows for their apps by calling the Hypernode-API. This lets users inspect which tasks are currently running for their node. This can be useful for users to anticipate when changes are going to be propagated when they requested changes via our tools. There’s also a CLI implementation for this endpoint on your hypernode calle hypernode-log. For more information on this endpoint check out the docs.</span>
                    <h5 class="mt-3">USERS CAN SET VARNISH SETTINGS</h5>
                    <span>It’s now possible for users to set or list their Varnish settings using the settings endpoint for Hypernode-API. Users can now set whether Varnish should be enabled, which Varnish version should be used and whether Varnish should ignore HTTPS for ESI. Users can also retrieve these settings and the Varnish secret for their node (note that this cannot be set). The hypernode-systemctl tool on your node also allows you to set these values more conveniently.</span>
                    <h5 class="mt-3">OTHER</h5>
                    <span>There have also been some stability and back-end changes for our own systems to improve the Hypernode experience.</span>
                    <h2 class="mt-3" style="font-size: 1.5em">PHP 5.5</h2>
                    <span>It’s not longer allowed to set PHP 5.5 since this version is no longer supported.</span>
                    <h2 class="mt-3" style="font-size: 1.5em">Mysql ft min word len</h2>
                    <span>It’s now possible to set the mysql_ft_min_word_len setting.</span>
                    <h2 class="mt-3" style="font-size: 1.5em">Archiving</h2>
                    <span>It’s now possible for our systems to archive apps via the API to retrieve them for later use.</span>
                </div>
            </div>
        </div>
    </section>
@endsection
