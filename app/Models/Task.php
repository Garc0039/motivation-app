<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    use HasFactory;
    protected $guarded =[];


    /**
     * Creates the tasks according to the file
     */
    public static function createTasks()
    {
        $file=File::all()->first();
        $content=$file->content;
        //criteria 1
        $stop="Criteria-1:";
        $pos=strpos($content,$stop);
        $criteria1=substr($content,$pos+11,216);
        $criteria1=substr($criteria1, 0,(strrpos($criteria1, 'Cri')));
        //first task
        //title
        $pos=strpos($criteria1,'-1:');
        $title=substr($criteria1,$pos+3,216);
        $title=(substr($title, 0,strrpos($title, 'Deadline')));
        //deadline
        $pos=strpos($criteria1,'Deadline:');
        $deadline=substr($criteria1,$pos+9,216);
        $deadline=(substr($deadline, 0,strrpos($deadline, 'Weight')));
        //setting the time
        $arrayTimeAsString = str_split($deadline);
        $newString = [$arrayTimeAsString[8],$arrayTimeAsString[9],$arrayTimeAsString[10],$arrayTimeAsString[11],"-"
            ,$arrayTimeAsString[5],$arrayTimeAsString[6],"-", $arrayTimeAsString[2], $arrayTimeAsString[3]];
        $deadline = Carbon::createFromFormat('Y-m-d', implode($newString))->toDateString();
        //weight
        $pos=strpos($criteria1,'Weight:');
        $weight=substr($criteria1,$pos+7,216);
        $weight=(substr($weight, 0,strrpos($weight, '%')));
        Task::create(['title'=>$title,'deadline'=>$deadline,'weight'=>$weight.'%']);

        //criteria2
        $stop="2:";
        $pos=strpos($content,$stop);
        $criteria2=substr($content,$pos+11,216);
        $criteria2=substr($criteria2, 0,(strrpos($criteria2, 'Cri')));
        //first task
        //title
//        $pos=strpos($criteria2,'2:');
        $title=substr($criteria2,0,216);
        $title=(substr($title, 0,strrpos($title, 'Deadline')));
        //deadline
        $pos=strpos($criteria2,'Deadline:');
        $deadline=substr($criteria2,$pos+9,216);
        $deadline=(substr($deadline, 0,strrpos($deadline, 'Weight')));
        //setting the time
        $arrayTimeAsString = str_split($deadline);
        $newString = [$arrayTimeAsString[8],$arrayTimeAsString[9],$arrayTimeAsString[10],$arrayTimeAsString[11],"-"
            ,$arrayTimeAsString[5],$arrayTimeAsString[6],"-", $arrayTimeAsString[2], $arrayTimeAsString[3]];
        $deadline = Carbon::createFromFormat('Y-m-d', implode($newString))->toDateString();
        //weight
        $pos=strpos($criteria2,'Weight:');
        $weight=substr($criteria2,$pos+7,216);
        $weight=(substr($weight, 0,strrpos($weight, '%')));
        Task::create(['title'=>$title,'deadline'=>$deadline,'weight'=>$weight.'%']);

        //criteria3
        $stop="3:";
        $pos=strpos($content,$stop);
        $criteria3=substr($content,$pos+11,216);
        $criteria3=substr($criteria3, 0,(strrpos($criteria3, '')));
        //first task
        //title
//        $pos=strpos($criteria2,'2:');
        $title=substr($criteria3,0,216);
        $title=(substr($title, 0,strrpos($title, 'Deadline')));
        //deadline
        $pos=strpos($criteria3,'Deadline:');
        $deadline=substr($criteria3,$pos+9,216);
        $deadline=(substr($deadline, 0,strrpos($deadline, 'Weight')));
        //setting the time
        $arrayTimeAsString = str_split($deadline);
        $newString = [$arrayTimeAsString[8],$arrayTimeAsString[9],$arrayTimeAsString[10],$arrayTimeAsString[11],"-"
            ,$arrayTimeAsString[5],$arrayTimeAsString[6],"-", $arrayTimeAsString[2], $arrayTimeAsString[3]];
        $deadline = Carbon::createFromFormat('Y-m-d', implode($newString))->toDateString();
        //weight
        $pos=strpos($criteria3,'Weight:');
        $weight=substr($criteria3,$pos+7,216);
        $weight=(substr($weight, 0,strrpos($weight, '%')));
        Task::create(['title'=>$title,'deadline'=>$deadline,'weight'=>$weight.'%']);
    }

}
