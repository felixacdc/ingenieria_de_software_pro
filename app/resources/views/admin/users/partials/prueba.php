public function userExists()
{
    $user = User::all()->lists('username');
    if (in_array(Input::get('username'), $user)) {
        return Response::json(Input::get('username').' is already taken');
    } else {
        return Response::json(Input::get('username').' Username is available');
    }
}
