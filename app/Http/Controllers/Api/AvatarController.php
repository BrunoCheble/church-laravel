<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class AvatarController extends Controller
{
    public function show($file)
    {
        return Storage::exists($file) ? Storage::response($file) : '';
    }

    public function store(Request $request, $id) {

        if(!$request->hasFile('avatar')) {
            return false;
        }

        $savedFile = Storage::putFile('', $request->file('avatar'));

        $member = Member::findOrFail($id);

        if($member->avatar_url) {
            Storage::delete($member->avatar_url);
        }

        $member->update(['avatar_url' => $savedFile]);
        return Storage::url($savedFile);
    }
}
