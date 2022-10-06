<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\Bool_;

class RepositoryController extends Controller
{
    protected $command;
    protected $educator_name_id;
    protected $educator_subject_name_id;
    protected $subject_module_name_id_date;
    protected $lesson_name_id_date;
    protected $uploadOk = true;
    protected $fileType;
    protected $target_dir = "Repo/";
    protected $extension = array('mp4'=> 0, 'mov'=>1, 'wmv'=>2, 
                                'avi'=>3, 'mkv'=>4, 'webm'=>5, 'doc'=>6, 'docx'=>7, 'pdf'=>8, 'ppt'=>9, 
                                'pptx'=>10,'jpeg'=>11, 'png'=>12, 'gif'=>13,'jpg'=>14 );

    //
    public function contentStore(Request $request)
    {
        $this->command = "C:/FFMPEG/ffmpeg -i ./".$this->target_dir."/\"". basename($_FILES["content"]["name"])."\"". " ./Repo/1.mp3";

        $this->fileType = $request->file('content')->extension();

        if ( array_key_exists($this->fileType, $this->extension) )
        {
            $done = $request->file('content')->storeAs("Repo/TeacherName_Id_date/Subject/Module/Lesson_ID", 'LessonName.'.$this->fileType);

            if ($done)
            {
                echo "running convert";
                echo "<pre>";
                echo shell_exec("C:/FFMPEG/ffmpeg -i ".Storage::url($done)." ".str_replace($this->fileType, 'mp3',Storage::url($done) ));
                echo str_replace($this->fileType, 'mp3',Storage::url($done) );
                echo "</pre>";
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
}
