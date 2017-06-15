<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserTypeUserCreateRequest;
use App\Http\Requests\UserTypeUserUpdateRequest;
use App\Repositories\UserTypeUserRepository;
use App\Validators\UserTypeUserValidator;


class UserTypeUsersController extends Controller
{

    /** ------------------------------------------Import repository  Usuario tipo de Usuario-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator  Usuario tipo de Usuario-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(UserTypeUserRepository $repository, UserTypeUserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $userTypeUsers = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userTypeUsers,
            ]);
        }

        return view('userTypeUsers.index', compact('userTypeUsers'));
    }
    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(UserTypeUserCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $userTypeUser = $this->repository->create($request->all());

            $response = [
                'message' => 'UserTypeUser created.',
                'data'    => $userTypeUser->toArray(),
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
        $userTypeUser = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userTypeUser,
            ]);
        }

        return view('userTypeUsers.show', compact('userTypeUser'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {

        $userTypeUser = $this->repository->find($id);

        return view('userTypeUsers.edit', compact('userTypeUser'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(UserTypeUserUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $userTypeUser = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'UserTypeUser updated.',
                'data'    => $userTypeUser->toArray(),
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
                'message' => 'UserTypeUser deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'UserTypeUser deleted.');
    }
}
