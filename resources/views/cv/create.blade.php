@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mt8 mb40"><a href="#"><img src="{{ asset('images/blue-left-arrow.svg') }}" alt="arrow"> Вернуться без
                    сохранения</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="main-title mb24">Новое резюме</div>
        </div>
    </div>
    <div class="col-12">
        <form action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb32">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Фото</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="profile-foto-upload mb8"><img src="{{ asset('images/profile-foto.jpg') }}" alt="foto">
                    </div>
                    <label class="custom-file-upload">
                        <input type="file" name="image">
                        Изменить фото
                    </label>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Фамилия</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100" name="surname" value="{{ old('surname') }}">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Имя</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Отчество</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100" name="middle_name" value="{{ old('middle_name') }}">
                </div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Дата рождения</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="datepicker-wrap input-group date">
                        <input type="text" class="dor-input dpicker datepicker-input" name="birthday">
                        <img src="{{ asset('images/mdi_calendar_today.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Пол</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <ul class="card-ul-radio profile-radio-list">
                        <li>
                            <input type="radio" id="test1" name="gender" value="1" checked>
                            <label for="test1">Мужской</label>
                        </li>
                        <li>
                            <input type="radio" id="test2" name="gender" value="0">
                            <label for="test2">Женский</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Город проживания</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100" name="city_name" value="{{ old('city_name') }}">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="heading">Способы связи</div>
                </div>
                <div class="col-lg-7 col-10"></div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Электронная почта</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="p-rel">
                        <input type="text" class="dor-input w100" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Телефон</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div style="width: 140px;" class="p-rel mobile-w100">
                        <input type="text" class="dor-input w100" name="phone" value="{{old('phone')}}" placeholder="+7 ___ ___-__-__">
                    </div>
                </div>
            </div>
            <div class="row mb24">
                <div class="col-12">
                    <div class="heading">Желаемая должность</div>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Специализация</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="citizenship-select">
                        <select class="nselect-1" data-title="Выбрать специализацию..." name="specialization">
                            @foreach($specializations as $specialization)
                                <option value="{{ $specialization->id }}">{{ $specialization->specialization }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Зарплата</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="p-rel">
                        <input placeholder="От" type="text" class="dor-input w100" name="salary" value="{{ old('salary') }}">
                        <img class="rub-icon" src="{{ asset('images/rub-icon.svg') }}" alt="rub-icon">
                    </div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">Занятость</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="profile-info">
                        @foreach($employments as $employment)
                        <div class="form-check d-flex">
                            <input type="checkbox" class="form-check-input" id="emplCheck{{ $employment->id }}" name="employments[]" value="{{ $employment->type_empl }}">
                            <label class="form-check-label" for="emplCheck{{ $employment->id }}"></label>
                            <label for="emplCheck{{ $employment->id }}" class="profile-info__check-text job-resolution-checkbox">
                                {{ $employment->type_empl }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">График работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="profile-info">
                        @foreach($work_schedules as $work_schedule)
                        <div class="form-check d-flex">
                            <input type="checkbox" class="form-check-input" id="ws{{ $work_schedule->id }}" name="work_schedules[]" value="{{ $work_schedule->ws }}">
                            <label class="form-check-label" for="ws{{ $work_schedule->id }}"></label>
                            <label for="ws{{ $work_schedule->id }}" class="profile-info__check-text job-resolution-checkbox">
                                {{ $work_schedule->ws }}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-12">
                    <div class="heading">Опыт работы</div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">Опыт работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <ul class="card-ul-radio profile-radio-list">
                        <li>
                            <input type="radio" id="have_exp_0" name="have_exp" value="0" checked="">
                            <label for="have_exp_0">Нет опыта работы</label>
                        </li>
                        <li>
                            <input type="radio" id="have_exp_1" name="have_exp" value="1">
                            <label for="have_exp_1">Есть опыт работы</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Начало работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="d-flex justify-content-between">
                        <div class="citizenship-select w100 mr16">
                            <select class="nselect-1" data-title="Май">
                                <option value="01">Июнь</option>
                                <option value="02">Июль</option>
                                <option value="03">Август</option>
                                <option value="04">Сентябрь</option>
                            </select>
                        </div>
                        <div class="citizenship-select w100">
                            <input placeholder="2006" type="text" class="dor-input w100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb8">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Окончание работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="d-flex justify-content-between">
                        <div class="citizenship-select w100 mr16">
                            <select class="nselect-1" data-title="Март">
                                <option value="01">Июнь</option>
                                <option value="02">Июль</option>
                                <option value="03">Август</option>
                                <option value="04">Сентябрь</option>
                            </select>
                        </div>
                        <div class="citizenship-select w100">
                            <input placeholder="2006" type="text" class="dor-input w100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="profile-info">
                        <div class="form-check d-flex">
                            <input type="checkbox" class="form-check-input" id="exampleCheck111">
                            <label class="form-check-label" for="exampleCheck111"></label>
                            <label for="exampleCheck111"
                                   class="profile-info__check-text job-resolution-checkbox">По настоящее
                                время</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Организация</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Должность</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">Обязанности, функции, достижения</div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                            <textarea class="dor-input w100 h96 mb8"
                                      placeholder="Расскажите о своих обязанностях, функциях и достижениях"></textarea>
                    <div><a href="#">Удалить место работы</a></div>
                </div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="devide-border"></div>
                </div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Начало работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="d-flex justify-content-between">
                        <div class="citizenship-select w100 mr16">
                            <select class="nselect-1" data-title="Май">
                                <option value="01">Июнь</option>
                                <option value="02">Июль</option>
                                <option value="03">Август</option>
                                <option value="04">Сентябрь</option>
                            </select>
                        </div>
                        <div class="citizenship-select w100">
                            <input placeholder="2006" type="text" class="dor-input w100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb8">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Окончание работы</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="d-flex justify-content-between">
                        <div class="citizenship-select w100 mr16">
                            <select class="nselect-1" data-title="Март">
                                <option value="01">Июнь</option>
                                <option value="02">Июль</option>
                                <option value="03">Август</option>
                                <option value="04">Сентябрь</option>
                            </select>
                        </div>
                        <div class="citizenship-select w100">
                            <input placeholder="2006" type="text" class="dor-input w100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb24">
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <div class="profile-info">
                        <div class="form-check d-flex">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1112">
                            <label class="form-check-label" for="exampleCheck1112"></label>
                            <label for="exampleCheck1112"
                                   class="profile-info__check-text job-resolution-checkbox">По настоящее
                                время</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Организация</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100">
                </div>
            </div>
            <div class="row mb16">
                <div class="col-lg-2 col-md-3 dflex-acenter">
                    <div class="paragraph">Должность</div>
                </div>
                <div class="col-lg-3 col-md-4 col-11">
                    <input type="text" class="dor-input w100">
                </div>
            </div>
            <div class="row mb64 mobile-mb32">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">Обязанности, функции, достижения</div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                            <textarea class="dor-input w100 h96 mb8"
                                      placeholder="Расскажите о своих обязанностях, функциях и достижениях"></textarea>
                    <div class="mb24"><a href="#">Удалить место работы</a></div>
                    <div><a href="#">+ Добавить место работы</a></div>
                </div>
            </div>
            <div class="row mb32">
                <div class="col-12">
                    <div class="heading">Расскажите о себе</div>
                </div>
            </div>
            <div class="row mb64 mobile-mb32">
                <div class="col-lg-2 col-md-3">
                    <div class="paragraph">О себе</div>
                </div>
                <div class="col-lg-5 col-md-7 col-12">
                    <textarea name="about" class="dor-input w100 h176 mb8"></textarea>
                </div>
            </div>
            <div class="row mb128 mobile-mb64">
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-10 col-md-9">
                    <button class="orange-btn link-orange-btn" type="submit">
                        Сохранить
                    </button>

                </div>
            </div>
        </form>
    </div>
</div>

@endsection
