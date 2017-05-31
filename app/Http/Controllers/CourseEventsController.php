<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CourseEventCreateRequest;
use App\Http\Requests\CourseEventUpdateRequest;
use App\Repositories\CourseEventRepository;
use App\Validators\CourseEventValidator;


class CourseEventsController extends Controller
{

    /**
     * @var CourseEventRepository
     */
    protected $repository;

    /**
     * @var CourseEventValidator
     */
    protected $validator;

    public function __construct(CourseEventRepository $repository, CourseEventValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $courseEvents = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $courseEvents,
            ]);
        }

        return view('courseEvents.index', compact('courseEvents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CourseEventCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CourseEventCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $courseEvent = $this->repository->create($request->all());

            $response = [
                'message' => 'CourseEvent created.',
                'data'    => $courseEvent->toArray(),
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


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseEvent = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $courseEvent,
            ]);
        }

        return view('courseEvents.show', compact('courseEvent'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $courseEvent = $this->repository->find($id);

        return view('courseEvents.edit', compact('courseEvent'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CourseEventUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CourseEventUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $courseEvent = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CourseEvent updated.',
                'data'    => $courseEvent->toArray(),
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'CourseEvent deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CourseEvent deleted.');
    }
}
