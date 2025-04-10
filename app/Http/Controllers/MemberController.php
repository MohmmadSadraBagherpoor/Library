<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function show(Member $member)
    {
        return view('member.show', compact('member'));
    }
}
