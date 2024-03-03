<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
  
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName]);
  
        return back()->with('success', 'Avatar a été mis-à-jour avec succés.');
    }



    public function update(Request $request)
    {
        $user = Auth()->user();

        $data = $request->only(['name', 'prenom', 'email']);

        $user->update($data);

        return back()->with('success', 'Les données ont été mises à jour avec succès.');
    }



    public function destroy()
    {
       
        Auth()->user()->delete();

        return redirect()->route('register')->with('success', 'Votre compte a été supprimé avec succès.Vous pouvez créer un autre compte si vous voulez ');
    }

}