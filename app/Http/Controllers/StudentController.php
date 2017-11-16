<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Http\Requests\StudentRequest;
use Intervation\Image\ImageManager;
use App\Student;

class StudentController extends Controller
{
    private $student;

    public function __construct(Student $student, Filesystem $filesystem, ImageManager $imageManager)
    {
        $this->student = $student;
        $this->filesystem = $filesystem;
        $this->imageManager = $imageManager;
    }
    public function index()
    {
        $students = $this->student->paginate(10);

        return view('student.index', compact('students'));
    }

    public function search(Request $request)
    {
       $keyword = $request->input('keyword');
       
       $students = $this->student->where('name', 'LIKE', "%$keyword%")
            ->orderBy('id', 'DESC')->paginate();
            $students->appends(['keyword' => $keyword]);

            return view('student.search', compact('students'));
    }

    public function create()
    {
        return view('student.create');
        
    }

    public function store(StudentRequest $request)
    {
        
        $this->student->create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            ]);
        // dd($request->all());
        session()->flash('success_message', 'Data tersimpan');
            return redirect('/student');
                  
    }

    public function edit($id)
    {
       $student = $this->student->find($id);

        return view('student.edit', compact('student'));
    }

  

    public function update($id, StudentRequest $request)
    {
        $student = $this->student->find($id);

        if($student){
            $student->update($request->all());
        }

        session()->flash('success_message', 'Data terupdate');
        return redirect('/student');
                // ->('success_message', 'Data terupdate');
    }

    public function destroy($id)
    {
        $student = $this->student->find($id);

        if($student) 
        {
            $student->delete();
        }
        return redirect()->back();
            
    }
}
