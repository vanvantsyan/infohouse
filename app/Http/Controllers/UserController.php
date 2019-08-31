<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends AppBaseController
{
    /**
     * @var  User
     */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('admin.pages.users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.users.create', [
            'roleList' => Role::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateUserRequest $request)
    {
        $attributes = array_replace($request->validated(), [
            'password' => bcrypt($request->get('password')),
        ]);
        $user = $this->user->create($attributes);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.pages.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.pages.users.edit', [
            'roleList' => Role::pluck('name', 'id'),
            'user' => $user
        ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->user->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $attributes = array_except($request->validated(), ['password', 'force_validate_email']);
        if ($password = $request->get('password')) {
            $attributes += ['password' => bcrypt($password)];
        }
        if ($request->get('force_validate_email'))
            $attributes['email_verified_at'] = Carbon::now();

        $user = $this->user->update($attributes, $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Gate::denies('delete-user', $id))
            Flash::error('You are not allowed to do this action.');
        else {
            $user = $this->user->find($id);

            if (empty($user)) {
                Flash::error('User not found');

                return redirect(route('users.index'));
            }
            $this->user->delete($id);

            Flash::success('User deleted successfully.');
        }
        return redirect(route('users.index'));
    }


}
