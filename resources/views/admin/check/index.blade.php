{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master')

@section('content')
    <div class="osu-layout__row osu-layout__row--page">
        <h1>flag check</h1>
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <td>acronym</td>
                        <td>name</td>
                        <td>rankedscore</td>
                        <td>playcount</td>
                        <td>display</td>
                        <td colspan="2">flags</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{$country->acronym}}</td>
                        <td>{{$country->name}}</td>
                        <td>{{number_format($country->rankedscore)}}</td>
                        <td>{{number_format($country->playcount)}}</td>
                        <td>{{$country->display}}</td>
                        <td><img src="{{flag_path($country->acronym)}}" style="max-height: 1em;"></td>
                        <td><img src="//s.ppy.sh/images/flags/{{strtolower($country->acronym)}}.gif"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
