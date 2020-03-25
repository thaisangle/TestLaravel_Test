<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
  protected $UserRepository;

  function __construct(UserRepository $UserRepository)
  {
    $this->UserRepository = $UserRepository;

  }
  public function index()
  {
    $user = $this->UserRepository->getAlllist();

    return view('ALL\User\viewtest')
    ->withUser($user);

  }
}
