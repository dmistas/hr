@extends('layouts.main')

@section('content')
    @dump($cv)


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt8 mb32"><a href="#"><img src="{{ asset('images/blue-left-arrow.svg') }}" alt="arrow">
                        Резюме в
                        Кемерово</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-5 mobile-mb32">
                <div class="profile-foto resume-profile-foto"><img src="{{ asset($cv->account->photo) }}"
                                                                   alt="profile-foto">
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="main-title d-md-flex justify-content-between align-items-center mobile-mb16">
                    {{ $cv->specialization->specialization }}
                </div>
                <div class="paragraph-lead mb16">
                    <span class="mr24">{{ $cv->salary }} ₽</span>
                    <span>
                        Опыт работы:
                        @if($cv->years_experience['years']|$cv->years_experience['months'])
                            @if($cv->years_experience['years'])
                                {{ $cv->years_experience['years'] }}
                                {{trans_choice('messages.years', $cv->years_experience['years']<21 ? $cv->years_experience['years']: substr($cv->years_experience['years'], -1)) }}
                            @endif
                            @if($cv->years_experience['months'])
                                {{ $cv->years_experience['months'] }}
                                {{trans_choice('messages.months', $cv->years_experience['months'])}}
                            @endif
                        @else
                            без опыта
                        @endif

                    </span>
                </div>
                <div class="profile-info company-profile-info resume-view__info-blick">
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">Имя
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right">
                            @empty(!$cv->account['name'])
                                {{ $cv->account['name'] }}
                            @endempty
                            @empty(!$cv->account['middle_name'])
                                {{ $cv->account['middle_name'] }}
                            @endempty
                            @empty(!$cv->account['surname'])
                                {{ $cv->account['surname'] }}
                            @endempty
                        </div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">Возраст
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right">
                            {{ $cv->account->age }}
                            {{trans_choice('messages.years', $cv->account->age<21 ? $cv->account->age: substr($cv->account->age, -1)) }}
                        </div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">Занятость</div>
                        <div class="profile-info__block-right company-profile-info__block-right">
                            @foreach($cv->employments as $employment)
                                @if($loop->first)
                                    {{ ucfirst($employment->type_empl) }}
                                @else
                                    {{ $employment->type_empl }}
                                @endif
                                @if(!($loop->last))
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">График работы
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right">
                            @foreach($cv->work_schedule as $work_schedule)
                                @if($loop->first)
                                    {{ ucfirst($work_schedule->ws) }}
                                @else
                                    {{ $work_schedule->ws }}
                                @endif
                                @if(!($loop->last))
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">Город проживания
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right">
                            {{ $cv->account->city->city_name }}
                        </div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">
                            Электронная почта
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right"><a
                                href="#">{{ $cv->account->email }}</a></div>
                    </div>
                    <div class="profile-info__block company-profile-info__block mb8">
                        <div class="profile-info__block-left company-profile-info__block-left">
                            Телефон
                        </div>
                        <div class="profile-info__block-right company-profile-info__block-right"><a
                                href="#">{{ $cv->account->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="devide-border mb32 mt50"></div>
                <div class="tabs mb50">
                    <div class="tabs__content active">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="heading mb16">
                                            Опыт работы
                                            @if($cv->years_experience['years']|$cv->years_experience['months'])
                                                @if($cv->years_experience['years'])
                                                    {{ $cv->years_experience['years'] }}
                                                    {{trans_choice('messages.years', $cv->years_experience['years']<21 ? $cv->years_experience['years']: substr($cv->years_experience['years'], -1)) }}
                                                @endif
                                                @if($cv->years_experience['months'])
                                                    {{ $cv->years_experience['months'] }}
                                                    {{trans_choice('messages.months', $cv->years_experience['months'])}}
                                                @endif
                                            @else
                                                без опыта
                                            @endif
                                        </h3>
                                    </div>
                                </div>
                                @foreach($cv->experiences as $experiences)
                                    <div class="row mb16">
                                        <div class="col-md-4 mb16">
                                            <div class="paragraph tbold mb8">
                                                {{ $experiences->start_date }}
                                                @if($experiences->work_until_now)
                                                    по настоящее время
                                                @else
                                                    {{ $experiences->stop_date }}
                                                @endif
                                            </div>
                                            <div class="mini-paragraph">7 лет 1 месяц</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="paragraph tbold mb8">{{ $experiences->organization }}</div>
                                            <div class="paragraph tbold mb8">{{ $experiences->position }}</div>
                                            <div class="paragraph">
                                                {{$experiences->responsibility}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--                                <div class="row mb16">--}}
                                {{--                                    <div class="col-md-4 mb16">--}}
                                {{--                                        <div class="paragraph tbold mb8">Май 2006 — по Март 2013</div>--}}
                                {{--                                        <div class="mini-paragraph">6 лет 10 месяцев</div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-md-8">--}}
                                {{--                                        <div class="paragraph tbold mb8">Программные системы Атлансис</div>--}}
                                {{--                                        <div class="paragraph tbold mb8">Директор по стратегическому развитию--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="paragraph">Lorem ipsum dolor sit amet, consectetur--}}
                                {{--                                            adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida--}}
                                {{--                                            dolor sit amet lacus accumsan et viverra justo commodo. Proin--}}
                                {{--                                            sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis--}}
                                {{--                                            parturient montes, nascetur ridiculus mus. Nam fermentum, nulla--}}
                                {{--                                            luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus--}}
                                {{--                                            sapien nunc eget.--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="col-lg-7">
                                <div class="company-profile-text mb64">
                                    <h3 class="heading mb16">Обо мне</h3>
                                    <p>{!! $cv->about !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
