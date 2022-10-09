<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class RepositoryController extends Controller
{
    protected $educator_name_id;
    protected $educator_subject_name_id;
    protected $subject_module_name_id_date;
    protected $lesson_name_id_date;
    protected $fileType;
    protected $target_dir = "Repo/";
    protected $extension = array('mp4'=> 0, 'mov'=>1, 'wmv'=>2, 
                                'avi'=>3, 'mkv'=>4, 'webm'=>5, 'doc'=>6, 'docx'=>7, 'pdf'=>8, 'ppt'=>9, 
                                'pptx'=>10,'jpeg'=>11, 'png'=>12, 'gif'=>13,'jpg'=>14 );

    //
    public function contentStore(Request $request)
    {
        $lesson = Lesson::find( (int) $request->lesson_id );

        $this->fileType = $request->file('content')->extension();      

        if ( array_key_exists($this->fileType, $this->extension) )
        {
            $done = $request->file('content')->storeAs(
                "Repo/".auth('educator')->user()->name."_"
                .auth('educator')->user()->id."/".$lesson->module->course->name.
                "/".$lesson->module->name."/".$lesson->name."_".$lesson->id, $lesson->name.".".$this->fileType);

                //dd( $done );

            if ($done)
            {
                echo "running convert";

                FFMpeg::fromDisk('local')
                        ->open($done)
                        ->export()
                        ->onProgress(function ($percentage) {
                            echo "{$percentage}% transcoded";
                        })
                        ->toDisk('local')
                        ->inFormat(new \FFMpeg\Format\Audio\MP3)
                        ->save( str_replace( '/storage', '', str_replace( $this->fileType, 'mp3',Storage::url($done) ) ) );

                $repo = Repository::create([
                    'lesson_id' => (int) $request->lesson_id,
                    'url' => $done
                ]);

                return back()->with('success', 'successfully uploaded content, Repo updated '. $repo->url);

            }
        }

        // Storage::disk('local')->put('repo/', 'Contents')

        //return back()->with("it happened");
        //dd($request->file('content'));
        //Storage::disk('local')->exists('example');
        //;

        //return Storage::url('example', 'empty_file');

        //echo Storage::url('example');
    }

    public function init ( )
    {
        $this->educator_name_id = auth('educator')->user()->name.'_'.auth('educator')->user()->id;
        $this->educator_subject_name_id;
    }
}
