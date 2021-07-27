<?php
  
namespace App\Http\Controllers;
   
use App\Models\Teacher;
use Illuminate\Http\Request;
  
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teachers = Teacher::latest()->get();
    
        return view('teachers.index',compact('teachers'));
    }
     
    public function create()
    {
        return view('teachers.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class_id' => 'required',
            'password' => 'required',
        ]);
    
        Teacher::create($request->all());
     
        return redirect()->route('teachers.index')
                        ->with('success','Teacher created successfully.');
    }
     
    public function show(Teacher $teacher)
    {
        $title = 'Show Teacher Data';
        $teacher =Teacher::join('class','class.id' ,'=', 'teachers.class_id')->where('teachers.id',$teacher->id)
                    ->first(['teachers.name','teachers.email','teachers.phone_no','class.title']);
        return view('teachers.show',compact('teacher' ,'title'));

    } 
     
    public function edit(Teacher $teacher)
    {
        $title = 'Edit Teacher Data';
        $teacher =Teacher::find($teacher->id);
        return view('teachers.edit',compact('teacher','title'));
    }
    
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class_id' => 'required',
        ]);
    
        $teacher->update($request->all());
    
        return redirect()->route('teachers.index')
                        ->with('success','Teacher updated successfully');
    }
    
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
    
        return redirect()->route('teachers.index')
                        ->with('success','Teacher deleted successfully');
    }
}