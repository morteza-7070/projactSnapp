namespace App\Http\Controllers\API;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
public function index()
{
$tasks = Task::all();
return response()->json(['tasks' => $tasks], 200);
}

public function create(Request $request)
{
$task = Task::create($request->all());
return response()->json(['task' => $task], 201);
}

public function edit($id)
{
$task = Task::find($id);
if (!$task) {
return response()->json(['error' => 'Task not found'], 404);
}
return response()->json(['task' => $task], 200);
}

public function update(Request $request, $id)
{
$task = Task::find($id);
if (!$task) {
return response()->json(['error' => 'Task not found'], 404);
}
$task->update($request->all());
return response()->json(['task' => $task], 200);
}

public function delete($id)
{
$task = Task::find($id);
if (!$task) {
return response()->json(['error' => 'Task not found'], 404);
}
$task->delete();
return response()->json(['message' => 'Task deleted successfully'], 200);
}
}
