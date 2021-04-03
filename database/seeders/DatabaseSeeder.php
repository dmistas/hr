<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\City;
use App\Models\Cv;
use App\Models\Experience;
use Database\Factories\AccountFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        City::factory(20)->create();
        DB::table('employment')->insert($this->getEmployment());
        DB::table('work_schedule')->insert($this->getWorkSchedule());
        DB::table('specialization')->insert($this->getSpecialization());
        Account::factory(10)->create();
        Cv::factory(20)->has(Experience::factory()->count(2))->create();
    }

    public function getEmployment()
    {
        return [
            ['type_empl' => 'Полная занятость'],
            ['type_empl' => 'Проектная/Временная работа'],
            ['type_empl' => 'Волонтёрствоь'],
            ['type_empl' => 'Стажировка'],
        ];
    }

    public function getWorkSchedule()
    {
        return [
          ['ws'=>'Полный день'],
          ['ws'=>'Сменный график'],
          ['ws'=>'Гибкий график'],
          ['ws'=>'Удалённая работа'],
          ['ws'=>'Вахтовый метод'],
        ];
    }

    public function getSpecialization()
    {
        return [
          ['specialization' => 'Администратор баз данных'],
          ['specialization' => 'Аналитик'],
          ['specialization' => 'Арт-директор'],
          ['specialization' => 'Инженер'],
          ['specialization' => 'Компьютерная безопасность'],
          ['specialization' => 'Контент'],
          ['specialization' => 'Маркетинг'],
          ['specialization' => 'Мультимедиа'],
          ['specialization' => 'Оптимизация сайта (SEO)'],
          ['specialization' => 'Передача данных и доступ в интернет'],
          ['specialization' => 'Программирование, Разработка'],
          ['specialization' => 'Продажи'],
          ['specialization' => 'Продюсер'],
          ['specialization' => 'Развитие бизнеса'],
          ['specialization' => 'Системный администратор'],
          ['specialization' => 'Системы управления предприятием (ERP)'],
          ['specialization' => 'Сотовые, Беспроводные технологии'],
          ['specialization' => 'Стартапы'],
          ['specialization' => 'Телекоммуникации'],
          ['specialization' => 'Тестирование'],
          ['specialization' => 'Технический писатель'],
          ['specialization' => 'Управление проектами'],
          ['specialization' => 'Электронная коммерция'],
          ['specialization' => 'CRM системы'],
          ['specialization' => 'Web инженер'],
          ['specialization' => 'Web мастер'],
        ];
    }
}
