<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Administrator;
use App\Models\Assesment;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Department;
use App\Models\Educator;
use App\Models\Faculty;
use App\Models\Grade;
use App\Models\Institute;
use App\Models\Lesson;
use App\Models\Library;
use App\Models\Modules;
use App\Models\Programme;
use App\Models\Question;
use App\Models\Repository;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        //institutes

        $Primary = Institute::create([
            'name' => 'Primary'
        ]);

        $secondary = Institute::create([
            'name' => 'Secondary'
        ]);

        $tertiary = Institute::create([
            'name' => 'Tertiary'
        ]);

        // Faculties

        $faculty_0 = Faculty::create([
            'name' => 'Junior Education',
            'institute_id' => $Primary->id
        ]);

        $faculty_1 = Faculty::create([
            'name' => 'Senior Education',
            'institute_id' => $secondary->id
        ]);

        $faculty_2 = Faculty::create([
            'name' => 'Health Sciences',
            'institute_id' => $tertiary->id
        ]);

        $faculty_3 = Faculty::create([
            'name' => 'Environmental Sciences',
            'institute_id' => $tertiary->id
        ]);

        $faculty_4 = Faculty::create([
            'name' => 'Education',
            'institute_id' => $tertiary->id
        ]);

        // Departments

        $department_0 = Department::create([
            'name' => 'Primary',
            'faculty_id' => $faculty_0->id
        ]);

        $department_1 = Department::create([
            'name' => 'Secondary',
            'faculty_id' => $faculty_1->id
        ]);

        $department_2 = Department::create([
            'name' => 'Nursing',
            'faculty_id' => $faculty_2->id
        ]);

        $department_3 = Department::create([
            'name' => 'Land Surveying',
            'faculty_id' => $faculty_3->id
        ]);

        $department_4 = Department::create([
            'name' => 'Science Education',
            'faculty_id' => $faculty_4->id
        ]);

        //Programmes

        $PLSC = Programme::create([
            'name' => 'Primary School Leaving Certificate'
        ]);

        $JCE = Programme::create([
            'name' => 'Junior Certificate'
        ]);

        $MSCE = Programme::create([
            'name' => 'Malawi Secondary School Certificate'
        ]);

        $Cert = Programme::create([
            'name' => 'Certificate'
        ]);

        $Diploma = Programme::create([
            'name' => 'Diploma'
        ]);

        $Bachelors = Programme::create([
            'name' => 'Bachelors Degree'
        ]);

        $honor = Programme::create([
            'name' => 'Honors Degree'
        ]);

        $Masters = Programme::create([
            'name' => 'Master Degree'
        ]);

        $Doctorate = Programme::create([
            'name' => 'Doctor of Philosophy Degree'
        ]);

        // classrooms std, form, 

        $std_0 = Classroom::create([
            'name' => "Std 1",
            'programme_id' => $PLSC->id
        ]);

        $std_1 = Classroom::create([
            'name' => "Std 2",
            'programme_id' => $PLSC->id
        ]);

        $std_2 = Classroom::create([
            'name' => "Std 3",
            'programme_id' => $PLSC->id
        ]);

        $std_3 = Classroom::create([
            'name' => "Std 4",
            'programme_id' => $PLSC->id
        ]);

        $std_4 = Classroom::create([
            'name' => "Std 5",
            'programme_id' => $PLSC->id
        ]);

        $std_5 = Classroom::create([
            'name' => "Std 6",
            'programme_id' => $PLSC->id
        ]);

        $std_6 = Classroom::create([
            'name' => "Std 7",
            'programme_id' => $PLSC->id
        ]);

        $std_7 = Classroom::create([
            'name' => "Std 8",
            'programme_id' => $PLSC->id
        ]);

        $form_1 = Classroom::create([
            'name' => "form 1",
            'programme_id' => $JCE->id
        ]);

        $form_2 = Classroom::create([
            'name' => "form 2",
            'programme_id' => $JCE->id
        ]);

        $form_3 = Classroom::create([
            'name' => "form 3",
            'programme_id' => $MSCE->id
        ]);

        $form_4 = Classroom::create([
            'name' => "form 4",
            'programme_id' => $MSCE->id
        ]);

        $cert = Classroom::create([
            'name' => "level 1",
            'programme_id' => $Cert->id
        ]);

        $diploma_1 = Classroom::create([
            'name' => "Level 1",
            'programme_id' => $Diploma->id
        ]);

        $diploma_2 = Classroom::create([
            'name' => "Level 2",
            'programme_id' => $PLSC->id
        ]);

        $bachelors_0 = Classroom::create([
            'name' => "1st Year",
            'programme_id' => $Bachelors->id
        ]);

        $bachelors_1 = Classroom::create([
            'name' => "2nd Year",
            'programme_id' => $Bachelors->id
        ]);

        $bachelors_2 = Classroom::create([
            'name' => "3rd Year",
            'programme_id' => $Bachelors->id
        ]);

        $bachelors_3 = Classroom::create([
            'name' => "4th Year",
            'programme_id' => $Bachelors->id
        ]);

        $honor_0 = Classroom::create([
            'name' => "1st Year",
            'programme_id' => $honor->id
        ]);

        $honor_1 = Classroom::create([
            'name' => "2nd Year",
            'programme_id' => $honor->id
        ]);

        $honor_2 = Classroom::create([
            'name' => "3rd Year",
            'programme_id' => $honor->id
        ]);

        $honor_3 = Classroom::create([
            'name' => "4th Year",
            'programme_id' => $honor->id
        ]);

        $honor_4 = Classroom::create([
            'name' => "5th Year",
            'programme_id' => $honor->id
        ]);

        $Masters_1 = Classroom::create([
            'name' => "1th Year",
            'programme_id' => $Masters->id
        ]);

        $Masters_2 = Classroom::create([
            'name' => "2th Year",
            'programme_id' => $Masters->id
        ]);

        $Doctorate_1 = Classroom::create([
            'name' => "1th Year",
            'programme_id' => $Doctorate->id
        ]);

        $Doctorate_2 = Classroom::create([
            'name' => "2th Year",
            'programme_id' => $Doctorate->id
        ]);

        $Doctorate_3 = Classroom::create([
            'name' => "1th Year",
            'programme_id' => $Doctorate->id
        ]);

        $Doctorate_4 = Classroom::create([
            'name' => "2th Year",
            'programme_id' => $Doctorate->id
        ]);

        $classrooms = array($std_0, $std_1, $std_2, $std_3, $std_4, $std_5, $std_6, $std_7, $form_1, $form_2, 
        $form_3, $form_4, $cert, $diploma_1, $diploma_2, $bachelors_0, $bachelors_1, 
        $bachelors_2, $bachelors_3, $honor_0, $honor_1, $honor_2, $honor_3,$honor_4, $Masters_1, 
        $Masters_2, $Doctorate_1, $Doctorate_2, $Doctorate_3, $Doctorate_4);

        //Department Programme

        $department_0->programme()->attach($PLSC);

        $department_1->programme()->attach($JCE);
        $department_1->programme()->attach($MSCE);

        $department_2->programme()->attach($Cert);
        $department_2->programme()->attach($Diploma);
        $department_2->programme()->attach($Bachelors);
        $department_2->programme()->attach($honor);
        $department_2->programme()->attach($Masters);
        $department_2->programme()->attach($Doctorate);

        $department_3->programme()->attach($Cert);
        $department_3->programme()->attach($Diploma);
        $department_3->programme()->attach($Bachelors);
        $department_3->programme()->attach($honor);
        $department_3->programme()->attach($Masters);
        $department_3->programme()->attach($Doctorate);

        $department_4->programme()->attach($Cert);
        $department_4->programme()->attach($Diploma);
        $department_4->programme()->attach($Bachelors);
        $department_4->programme()->attach($honor);
        $department_4->programme()->attach($Masters);
        $department_4->programme()->attach($Doctorate);

        $curri_0 = Curriculum::create([
            'name' => "std 1",
            'classroom_id' => $std_0->id
        ]);

        $curri_1 = Curriculum::create([
            'name' => "std 2",
            'classroom_id' => $std_1->id
        ]);

        $curri_2 = Curriculum::create([
            'name' => "std 3",
            'classroom_id' => $std_2->id
        ]);

        $curri_3 = Curriculum::create([
            'name' => "std 4",
            'classroom_id' => $std_3->id
        ]);

        $curri_4 = Curriculum::create([
            'name' => "std 5",
            'classroom_id' => $std_4->id
        ]);

        $curri_5 = Curriculum::create([
            'name' => "std 6",
            'classroom_id' => $std_5->id
        ]);

        $curri_6 = Curriculum::create([
            'name' => "std 7",
            'classroom_id' => $std_6->id
        ]);

        $curri_7 = Curriculum::create([
            'name' => "std 8",
            'classroom_id' => $std_7->id
        ]);

        $curri_8 = Curriculum::create([
            'name' => "form 1",
            'classroom_id' => $form_1->id
        ]);

        $curri_9 = Curriculum::create([
            'name' => "form 2",
            'classroom_id' => $form_2->id
        ]);

        $curri_10 = Curriculum::create([
            'name' => "form 3",
            'classroom_id' => $form_3->id
        ]);

        $curri_11 = Curriculum::create([
            'name' => "form 4",
            'classroom_id' => $form_4->id
        ]);

        $curri_12 = Curriculum::create([
            'name' => "certifcate 1",
            'classroom_id' => $cert->id
        ]);

        $curri_13 = Curriculum::create([
            'name' => 'Bachelors level 1',
            'classroom_id' => $bachelors_0->id
        ]);

        $curri_14 = Curriculum::create([
            'name' => 'Bachelors level 2',
            'classroom_id' => $bachelors_1->id
        ]);

        $curri_15 = Curriculum::create([
            'name' => 'Bachelors level 3',
            'classroom_id' => $bachelors_2->id
        ]);

        $curri_16 = Curriculum::create([
            'name' => 'Bachelors level 4',
            'classroom_id' => $bachelors_3->id
        ]);

        $curri_17 = Curriculum::create([
            'name' => 'honors level 1',
            'classroom_id' => $honor_0->id
        ]);

        $curri_18 = Curriculum::create([
            'name' => 'honors level 2',
            'classroom_id' => $honor_1->id
        ]);

        $curri_19 = Curriculum::create([
            'name' => 'honors level 3',
            'classroom_id' => $honor_2->id
        ]);

        $curri_20 = Curriculum::create([
            'name' => 'honors level 4',
            'classroom_id' => $honor_3->id
        ]);

        $curri_21 = Curriculum::create([
            'name' => 'honors level 5',
            'classroom_id' => $honor_4->id
        ]);

        $curri_22 = Curriculum::create([
            'name' => 'diploma level 1',
            'classroom_id' => $diploma_1->id
        ]);

        $curri_23 = Curriculum::create([
            'name' => 'diploma level 2',
            'classroom_id' => $diploma_2->id
        ]);

        $curri_24 = Curriculum::create([
            'name' => 'masters level 1',
            'classroom_id' => $Masters_1->id
        ]);

        $curri_25 = Curriculum::create([
            'name' => 'masters level 2',
            'classroom_id' => $Masters_2->id
        ]);

        $curri_26 = Curriculum::create([
            'name' => 'PhD level 1',
            'classroom_id' => $Doctorate_1->id
        ]);

        $curri_27 = Curriculum::create([
            'name' => 'PhD level 2',
            'classroom_id' => $Doctorate_2->id
        ]);
        
        $curri_28 = Curriculum::create([
            'name' => 'PhD level 3',
            'classroom_id' => $Doctorate_3->id
        ]);

        $curri_29 = Curriculum::create([
            'name' => 'PhD level 4',
            'classroom_id' => $Doctorate_4->id
        ]);

        $curriculum = array(
            $curri_0, $curri_1, $curri_2, $curri_3, 
            $curri_4, $curri_5, $curri_6, $curri_7,
            $curri_8,$curri_9,$curri_10,$curri_11,
            $curri_12,$curri_13,$curri_14,$curri_15,
            $curri_16,$curri_17,$curri_18,$curri_19,
            $curri_20,$curri_21,$curri_22,$curri_23,
            $curri_24,$curri_25,$curri_26,$curri_27,$curri_28,$curri_29);

        $subjects = array();

        for ($i = 0; $i < 50; $i++)
        {
            $course = Course::create([
                'name' => $faker->unique()->name()
            ]);

            array_push($subjects, $course);
        }

        $modules = array();

        foreach($subjects as $subject)
        {
            $module = Modules::create([
                'name' => $faker->unique()->name(),
                'course_id' => $subject->id
            ]);

            array_push($modules,$module);
        }

        $educators = array();

        for ($i = 0; $i < 10; $i++)
        {
            $educator = Educator::create([
                'name' => $faker->unique()->name()
            ]);

            array_push($educators, $educator);
        }

        $students = array();

        for ($i = 0; $i < 20; $i++)
        {
            $student = Student::create([
                'name' => $faker->unique()->name(),
                'classroom_id' => $faker->randomElement($classrooms)['id']
            ]);

            array_push($students, $student);
        }

        $admins = array();

        for ($i = 0; $i < 20; $i++)
        {
            $admin = Administrator::create([
                'name' => $faker->unique()->name()
            ]);

            array_push($admins, $admin);
        }

        $lessons = array();

        for ($i = 0; $i < 10; $i++)
        {
            $lesson = Lesson::create([
                'name' => $faker->unique()->name(),
                'module_id' => $modules[$i]["id"],
                'educator_id' => $educators[$i]["id"]
            ]);

            array_push($lessons, $lesson);
        }

        $repos = array();

        for ($i = 0; $i < 10; $i++)
        {
            $repo = Repository::create([
                'url' => $faker->unique()->name(),
                'lesson_id' => $lessons[$i]["id"]
            ]);

            array_push($repos, $repo);
        }

        $books = array();

        for ($i = 0; $i < 30; $i++)
        {
            $book = Library::create([
                'name' => $faker->unique()->name()
            ]);

            array_push($books, $book);
        }

        $assessments = array();

        for ($i = 0; $i < 10; $i++)
        {
            $assessment = Assesment::create([
                'name' => $faker->unique()->country(),
                'lesson_id' => $lessons[$i]["id"]
            ]);

            array_push($assessments, $assessment);
        }

        $questions = array();

        for($i = 0; $i < 10; $i++)
        {
            array_push( $questions , $question = Question::create([
                'assesment_id' => $assessment->id,
                'question' => $faker->text(100),
                'answer' => $faker->buildingNumber(),
                'marks' => $faker->numberBetween(0,100),
                'Option_1' => $faker->buildingNumber(),
                'Option_2' => $faker->buildingNumber(),
                'Option_3' => $faker->buildingNumber(),
                'Option_4' => $faker->buildingNumber()
            ]) );
        }

        foreach ($assessments as $assessment)
        {
            $grade = Grade::create([
                'score' => $faker->numberBetween(0, 100),
                'assesment_id' => $assessment->id,
                'question_id' => $faker->randomElement($questions)['id'],
                'student_id' => $faker->randomElement($students)['id']
            ]);
        }

        foreach ($curriculum as $curriculia)
        {
            foreach($subjects as $subject){
                $curriculia->courses()->attach($subject);
            }
        }

        foreach ($books as $key => $value)
        {
            $value->course()->attach($subjects[$key]);
        }

        foreach ($students as $student)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('1234567890')
            ]);
        }


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}