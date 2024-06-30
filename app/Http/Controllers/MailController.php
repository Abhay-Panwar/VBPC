

namespace App\Http\Controllers;
// use Session;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\signup;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;
class Mycontroller extends Controller
{
    function home()
    {
        // return view('myFolder/view');
        return view('pages.home');
    }
    function contact()
    {
        // return view('myFolder/view');
        return view('pages.contact');
    }
    function loading()
    {
        // return view('myFolder/view');
        return view('pages.login2');
    }
    function registration()
    {
        // return view('myFolder/view');
        return view('pages.registration');
    }
    public function dashboard2(Request $request)
    {   
        return view('pages.dashboard2');
 
    }
    public function store(Request $request)
    {
        $signup = new signup();
        $signup->user = $request->input('user');
        $signup->email = $request->input('email');
        $signup->password = bcrypt($request->input('password'));
        $signup->save();

        return redirect()->back()->with('success', 'data stored successfully');
    }
    public function login3(Request $request)
    {
        $username = Employee::where('email', $request->input('email'))->first();
      //  dd($username->user);

        if ($username) {
            $hashedPassword = $username->password;

            if (Hash::check($request->input('password'), $hashedPassword)) {
                Session::put('logged',true);
                Session::put('username',$username->user);

                return redirect()->route('index');
              
            } else {
                
                return redirect()->back()->with('error', 'Incorrect username or password');
            }
        } else {
          
            return redirect()->back()->with('error', 'User does not exist');
        }
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended('loading');
    }
}
