<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class AdminController extends Controller
{
    public function adminPanel(){
        
        $data = Leader::all();
        $totalParticipants = Leader::count();
    $totalBinusian = Leader::whereHas('group', function($query) {
        $query->where('status', 'binusian');
    })->count();

    $totalNonBinusian = Leader::whereHas('group', function($query) {
        $query->where('status', 'non-binusian');
    })->count();

        return view('admin_panel', compact('data', 'totalParticipants', 'totalBinusian', 'totalNonBinusian'));
    }

    public function search(Request $request)
{
    $output = "";
    $items = Leader::where(function($query) use ($request) {
            $query->where('full_name', 'like', '%'.$request->search.'%')
                ->orWhere('email', 'like', '%'.$request->search.'%')
                ->orWhere('whatsapp_number', 'like', '%'.$request->search.'%')
                ->orWhere('line_id', 'like', '%'.$request->search.'%')
                ->orWhere('github_id', 'like', '%'.$request->search.'%')
                ->orWhere('birth_place', 'like', '%'.$request->search.'%')
                ->orWhere('birth_date', 'like', '%'.$request->search.'%')
                ->orWhere('cv_path', 'like', '%'.$request->search.'%')
                ->orWhere('card_path', 'like', '%'.$request->search.'%');
        })
        ->orWhereHas('group', function($query) use ($request) {
            $query->where('group', 'like', '%'.$request->search.'%')
                ->orWhere('status', 'like', '%'.$request->search.'%');
        })
        ->get();
    foreach($items as $item){
        $cv_path = 'storage/'. $item->cv_path;
        $card_path = 'storage/'. $item->card_path;
        $output .= 
        ' <tr>
        <td data-cell="group-id">'.$item->group->id.'</td>
        <td data-cell="nama-group">'.$item->group->group.'</td>
        <td data-cell="nama-leader">'.$item->full_name.'</td>
        <td data-cell="status">'.$item->group->status.'</td>
        <td data-cell="email">'.$item->email.'</td>
        <td data-cell="nomor">'.$item->whatsapp_number.'</td>
        <td data-cell="line">'.$item->line_id.'</td>
        <td data-cell="github">'.$item->github_id.'</td>
        <td data-cell="tempat-lahir">'.$item->birth_place.'</td>
        <td data-cell="tanggal-lahir">'.$item->birth_date.'</td>
        <td class="img-button" data-cell="cv"><button onclick="openModal(`{{ asset('.$cv_path.') }}`)">'.$item->cv_path.'</button></td>
        <td class="img-button" data-cell="card"><button onclick="openModal(`{{ asset('.$card_path.') }}`)">'.$item->card_path.'</button></td>
        <td>
        <a href="/update/{{ $item->id }}" class="edit"></a>
              <a href="/delete/{{ $item->id }}" class="delete"></a>
        </td>
    </tr>';
    }

    return response($output);
}

public function adminSort(Request $request){
    $data = Leader::with('group')->get();
    $sort = $request->input('sort');
    $order = $request->input('order', 'asc');

    switch ($sort) {
        case 'group-asc':
            $data = $data->sortBy('group.group');
            break;
        case 'group-dsc':
            $data = $data->sortByDesc('group.group');
            break;
        case 'newest':
            $data = $data->sortByDesc('created_at');
            break;
        case 'oldest':
            $data = $data->sortBy('created_at');
            break;
        default:
            $data = $data->sortBy('group.group');
            break;
    }


    if ($order == 'desc') {
        $data = $data->reverse();
    }

    $totalParticipants = Leader::count();
    $totalBinusian = Leader::whereHas('group', function($query) {
        $query->where('status', 'binusian');
    })->count();

    $totalNonBinusian = Leader::whereHas('group', function($query) {
        $query->where('status', 'non-binusian');
    })->count();

    return view('admin_panel', compact('data', 'totalParticipants', 'totalBinusian', 'totalNonBinusian'));
}


public function updatePage($id){
    $data = Leader::findOrFail($id);
    return view('update', compact('data'));
}

public function update(Request $request, $id){
    $request->validate([
        'full_name' => 'required',
        'email' => 'required',
        'whatsapp_number' => 'required',
        'line_id' => 'required',
        'github_id' => 'required',
        'birth_place' => 'required',
        'birth_date' => 'required',
        'cv_path' => 'required|mimes:png,jpg,jpeg,pdf', // Adjust the allowed file types
        'card_path' => 'required|mimes:png,jpg,jpeg,pdf', // Adjust the allowed file types
    ]);

    $data = Leader::find($id);
    $group = $data->group; // Get the related group

    // Delete old files
    Storage::delete(['public/' . $data->cv_path, 'public/' . $data->card_path]);

    // Update Leader data
    $data->update([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'whatsapp_number' => $request->whatsapp_number,
        'line_id' => $request->line_id,
        'github_id' => $request->github_id,
        'birth_place' => $request->birth_place,
        'birth_date' => $request->birth_date,
        'cv_path' => '', 
        'card_path' => '', 
    ]);

    $group->update([
        'group' => $request->group,
        'status' => $request->status,
    ]);
    $cv_path = $request->file('cv_path');
            $cv_file_name = $data->id . $cv_path->getClientOriginalName();
            $cv_path->storeAs('public/CV', $cv_file_name);
            $data->cv_path = 'CV/' . $cv_file_name;
     $card_path = $request->file('card_path');
                $card_file_name = $data->id . $card_path->getClientOriginalName();
            if($request->status == 'binusian'){
                $card_path->storeAs('public/Flazz', $card_file_name);
                $data->card_path = 'Flazz/' . $card_file_name;
            }else{
                $card_path->storeAs('public/ID', $card_file_name);
                $data->card_path = 'ID/' . $card_file_name;
            }
            $data->save();

    return redirect('/admin/panel');
}

public function delete($id){
    
    $leader = Leader::find($id);
    if($leader){
        Storage::delete('/public/'.$leader->cv_path);
        Storage::delete('/public/'.$leader->card_path);
    }

    Leader::destroy($id);
    User::destroy($leader->group->id);
    

    return redirect('/admin/panel');
}
}
