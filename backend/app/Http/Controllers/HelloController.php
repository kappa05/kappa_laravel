namespace App\Http\Controllers;
class helloContorller extends BaseController
{
    public function goodmorning($message)
    {
        return 'Hello World' . $message;
    }
    public function index()
    {
        $coolString = 'Hello from Controller.';

        return view('subviews/hello', compact('coolString'));
    }
}
