@extends('master')

@section('header')
    {{ link_css('assets/css/text-list.css') }}
    {{ link_css('assets/css/404.css') }}
@stop

@section('bodyAtt')
    class="error-page error-404-page logged-in logged-in-1 responsive no-right-column be-network no-has-touch has-placeholders globalnav__external__no-touch"
@stop

@section('content')
    <div id="site-content">

        <div class="error-box">

            <div id="page-header" class="error-header">
                <h4>Oops! This page cannot be found</h4>
            </div>

            <div class="cfix">

                <img src="https://a2.behance.net/img/site/bsod_mac.png" class="left">

                <div class="error-message left">

                    <ul>
                        <li class="bullet-item">Make sure the URL is entered correctly.</li>
                        <li class="bullet-item"><a href="{{ route('index') }}">Browse our Gallery</a> of the world's best creative work.</li>
                    </ul>

                    <form action="/" id="error-search-form" accept-charset="utf-8" class="form form-site-searchi relative" method="get" name="error-search-form">
                        <p>Try searching for what you are looking for:</p>
                        <div id="navmenui-search-container" class="form-item form-item-text">
                            <input type="text" placeholder="Search..." onsubmit="return false;" id="error-search" class="form-text form-text form-search validate[optional,Generic]" name="search">
                        </div><input type="submit" style="position: absolute; left: -99999px; top: -99999px;">
                    </form>


                </div> <!-- .error-message -->

            </div>

        </div> <!-- .error-box -->

    </div>
@stop