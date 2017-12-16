<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $visible = ['id', 'name', 'exercises', 'number_exercises', 'score_average', 'students', 'number_students', 'success_rate','students_at_risk'];
    protected $appends = array('score_average', 'number_exercises','number_students', 'success_rate', 'students_at_risk');

    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }
    public function students()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\Assistantship',
            'course_id',
            'id',
            'id',
            'user_id'
        );
    }

    public function getScoreAverageAttribute(){
        $average = 0;
        $exercises = $this->exercises;
        if (count($exercises) > 0) {
            foreach ($exercises as $exercise) {
                $average = $average + $exercise->getSubmissionsAverageAttribute();
            }
            $average = $average/$exercises->count();

            return number_format($average,2);
        } else{
            return 0;
        }


    }
    public function getStudentsAtRiskAttribute(){

        $studentsAtRisk = 0;
        $students = $this->students;
        foreach ($students as $student) {
            if($student->average < 5){
                $studentsAtRisk++;
            }
        }

        return $studentsAtRisk;
    }
    public function getSuccessRateAttribute(){

        $graphXData = [];
        $graphYData = [];
        $exercises = $this->exercises;
        foreach ($exercises as $exercise) {
            array_push( $graphXData, 'Tarea #'.$exercise->id);
            array_push( $graphYData, $exercise->getSubmissionsAverageAttribute());
        }
        $successRate = [
            'labels' =>  $graphXData,
            'data' =>  $graphYData
        ];


        return  $successRate;
    }
    public function getNumberExercisesAttribute(){

        return $this->exercises->count();

    }
    public function getNumberStudentsAttribute(){

        return $this->students->count();

    }

}
