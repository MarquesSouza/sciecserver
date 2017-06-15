<?php

namespace App\Http\Controllers;


use App\Entities\Instution;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Repositories\CourseRepository;
use App\Validators\CourseValidator;


class CoursesController extends Controller
{
    /** ------------------------------------------Import repository Cursos-------------------------------------------------------------------------
     */
    protected $repository;

    /** ------------------------------------------Import validator Cursos-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(CourseRepository $repository, CourseValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $courses = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $courses,
            ]);
        }

        return view('curso.list_curso', compact('courses'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */

    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $course = $this->repository->create($request->all());

            $response = [
                'message' => 'Course created.',
                'data'    => $course->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
    /** ------------------------------------------Show-------------------------------------------------------------------------
     */
    public function show($id)
    {
        $course = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $course,
            ]);
        }

        return view('courses.show', compact('course'));
    }
    /** ------------------------------------------Edit------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo = "Editar Curso";

        $instution = Instution::all();
        $courses = $this->repository->find($id);
        return view('curso.create-edit', compact('titulo','courses','instution'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $course = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Course updated.',
                'data'    => $course->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
    /** ------------------------------------------Destroy Logic-------------------------------------------------------------------------
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Course deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Course deleted.');
    }
    /** ------------------------------------------Formulario de cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $titulo = "Cadastrar Curso";
        $instution = Instution::all();
        return view('curso.create-edit',compact('titulo','instution'));
    }
}
