<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ActivityUserCreateRequest;
use App\Http\Requests\ActivityUserUpdateRequest;
use App\Repositories\ActivityUserRepository;
use App\Validators\ActivityUserValidator;


class ActivityUsersController extends Controller
{

    /** ------------------------------------------Import repository Actividade User-------------------------------------------------------------------------
     */
    protected $repository;

    /** ------------------------------------------Import validator Actividade User-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(ActivityUserRepository $repository, ActivityUserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /** ------------------------------------------Index-------------------------------------------------------------------------
     */

    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $activityUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityUsers,
            ]);
        }

        return view('activityUsers.index', compact('activityUsers'));
    }


    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(ActivityUserCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $activityUser = $this->repository->create($request->all());

            $response = [
                'message' => 'ActivityUser created.',
                'data'    => $activityUser->toArray(),
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
        $activityUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $activityUser,
            ]);
        }

        return view('activityUsers.show', compact('activityUser'));
    }


    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {

        $activityUser = $this->repository->find($id);

        return view('activityUsers.edit', compact('activityUser'));
    }


    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(ActivityUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $activityUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'ActivityUser updated.',
                'data'    => $activityUser->toArray(),
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
                'message' => 'ActivityUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ActivityUser deleted.');
    }
}
