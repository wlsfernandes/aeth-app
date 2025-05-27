@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .wrapper-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 4em;
            letter-spacing: 3px;
            color: #4a235a;
            margin: 0 0 20px;
        }

        .wrapper-2 h4 {
            margin: 0 0 14px;
            font-size: 1.3em;
            color: #3e3e3e;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .wrapper-2 p {
            margin: 0;
            color: #5f5f5f;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
            font-size: 18px;
        }

        .go-home {
            color: #fff;
            background: #4a235a;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }

        .footer-like {
            margin-top: auto;
            background: #dadada;
            padding: 6px;
            text-align: center;
        }

        .footer-like p {
            margin: 0;
            padding: 4px;
            color: #5892FF;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .footer-like p a {
            text-decoration: none;
            color: #5892FF;
            font-weight: 600;
        }

        @media (min-width: 360px) {
            h1 {
                font-size: 4.5em;
            }

            .go-home {
                margin-bottom: 20px;
            }
        }

        @media (min-width: 600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }

            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 100px auto 0;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }
        }
    </style>

    <div class="content" style="margin-bottom:100px;">
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>@lang('messages.gracias.title')</h1>
                <h4>@lang('messages.gracias.subtitle_member')</h4>
                <p>@lang('messages.gracias.message_1')</p>
                <p>@lang('messages.gracias.message_2')</p>
                <p>@lang('messages.gracias.message_3')</p>
                <p>@lang('messages.gracias.message_4')</p>
                <a href="{{ url('/login') }}">
                    <button class="go-home">@lang('messages.gracias.button_login')</button>
                </a>
            </div>
            <div class="footer-like">
                <p>
                    @lang('messages.gracias.email_note')
                    <a href="{{ url('/contact') }}">@lang('messages.gracias.contact_link')</a>
                </p>
            </div>
        </div>
    </div>
@endsection