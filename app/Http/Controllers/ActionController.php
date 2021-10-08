<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Action;
use App\Models\ActionInfo;
use App\Models\City;
use App\Models\Quote;
use App\Models\Aaliaa;

class ActionController extends Controller
{
    //
    public function show($id)
    {
        $actions = Action::where('city', $id)
        ->where('active', '1')
        ->orderBy('time')
        ->get();

        $city = City::where('id', $id)
        ->FirstOrFail();


        $cityName = $city['name'];

        return view('actions', compact('actions', 'cityName'));
    }

    public function showAction($id)
    {
        $action = Action::where('id', $id)
        ->where('active', '1')
        ->FirstOrFail();

        $city = City::where('id', $action['city'])
        ->FirstOrFail();

        $actionInfo = ActionInfo::where('actionId', $id)
        ->get();

        Action::where('id', $id)
        ->increment('views');

        $cityName = $city['name'];

        return view('action', compact('action', 'cityName', 'actionInfo'));
    }

    public function showPanel()
    {
        if (!auth()->check())
        {
            return redirect('/logowanie');
        }
        $actions = Action::where('author', auth()->user()->id)
        ->orderBy('created_at', 'desc')
        ->get();

        $quotes = Quote::get();
        $quote = $quotes[rand(0, sizeof($quotes) - 1)];

        return view('panel', compact('actions', 'quote'));
    }

    public function showCreate()
    {
        $cities = City::get();

        return view('createAction', compact('cities'));
    }

    public function createAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
            'photo' => 'required|min:1',
            'city' => 'required|min:1',
            'address' => 'required|min:1',
            'time' => 'required|min:1',
        ]);

        Action::create([
            'title' => $request->get('title'),
            'photo' => $request->get('photo'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'time' => $request->get('time'),
            'author' => auth()->user()->id,
            'views' => 0,
            'takePart' => 0,
            'active' => 0,
            'share' => 0,
        ]);

        return redirect('/panel');
    }

    public function showActionPanel($id)
    {
        $action = Action::where('id', $id)
        ->where('author', auth()->user()->id)
        ->FirstOrFail();
        
        $actionInfo = ActionInfo::where('actionId', $id)
        ->get();

        $list = Aaliaa::where('actionId', $id)
        ->get();

        return view('editAction', compact('action', 'actionInfo', 'list'));
    }

    public function addMoreInfo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
            'description' => 'required|min:1',
        ]);

        ActionInfo::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'actionId' => $request->get('id'),
        ]);

        $id = $request->get('id');

        return redirect('/panel/zobacz/'.$id);
    }

    public function changeStatus(Request $request)
    {
        Action::where('id', $request->get('id'))
        ->update(['active' => $request->get('active')]);

        $id = $request->get('id');
        return redirect('/panel/zobacz/'.$id);
    }

    public function join(Request $request)
    {
        Aaliaa::create([
            'content' => $request->get('email'),
            'actionId' => $request->get('id'),
        ]);

        $temp = Action::where('id', $request->get('id'))
        ->increment('takePart');
        

        $id = $request->get('id');
        return redirect('/akcje/zobacz/'.$id);
    }

    public function delete($id)
    {
        if (!auth()->check())
        {
            return redirect('/logowanie');
        }
        $action = Action::where('id', $id)
        ->where('author', auth()->user()->id)
        ->FirstOrFail();

        Action::where('id', $id)
        ->update(['author' => 0]);

        return redirect('/panel');
    }
}
