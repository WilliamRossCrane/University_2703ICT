namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task3Controller extends Controller
{
    public function foreachGet(Request $request)
    {
        $urlVariables = $request->query();

        if (empty($urlVariables)) {
            return "No URL variables";
        }

        return view('task3.foreach_get', compact('urlVariables'));
    }
}
