<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Account
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $middle_name
 * @property string|null $birthday
 * @property int $gender
 * @property int $id_city
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $photo
 * @property-read \App\Models\City $city
 * @property-read mixed $age
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $resumes
 * @property-read int|null $resumes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereIdCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $city_name
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cv
 *
 * @property int $id
 * @property int $id_account
 * @property int $id_specialization
 * @property int|null $salary
 * @property string|null $about
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Account $account
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employment[] $employments
 * @property-read int|null $employments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Experience[] $experiences
 * @property-read int|null $experiences_count
 * @property-read mixed $years_experience
 * @property-read \App\Models\Specialization $specialization
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WorkSchedule[] $work_schedule
 * @property-read int|null $work_schedule_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereIdAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereIdSpecialization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereUpdatedAt($value)
 */
	class Cv extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employment
 *
 * @property int $id
 * @property string $type_empl
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $cvs
 * @property-read int|null $cvs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employment whereTypeEmpl($value)
 */
	class Employment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Experience
 *
 * @property int $id_cv
 * @property string $organization
 * @property string $position
 * @property string $responsibility
 * @property string $start_date
 * @property string $stop_date
 * @property int $id
 * @property int $work_until_now
 * @property-read \App\Models\Cv $cvs
 * @property-read mixed $range
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereIdCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereOrganization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereResponsibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereStopDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereWorkUntilNow($value)
 */
	class Experience extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specialization
 *
 * @property int $id
 * @property string $specialization
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $cvs
 * @property-read int|null $cvs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialization whereSpecialization($value)
 */
	class Specialization extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WorkSchedule
 *
 * @property int $id
 * @property string $ws
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cv[] $cvs
 * @property-read int|null $cvs_count
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSchedule whereWs($value)
 */
	class WorkSchedule extends \Eloquent {}
}

