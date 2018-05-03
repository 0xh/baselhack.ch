<?php

namespace App\Http\Controllers\Backend\Association\Members;

use App\Domain\Association\Models\Member;
use App\App\Controllers\Controller;
use App\Domain\Association\Models\MemberExport;
use App\Http\Requests\Backend\Association\Members\StoreMemberRequest;
use App\Http\Requests\Backend\Association\Members\UpdateMemberRequest;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;


class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['web', 'auth', 'role:member']);
    }


    public function index()
    {
        $members = Member::orderBy('firstname', 'asc')->get();

        return view('backend.association.members.index', compact('members'));
    }

    public function create()
    {
        return view('backend.association.members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        Member::create($request->only(['firstname', 'lastname','email','mobile','github','birthdate','member_since']));

        toast('Member successfully stored!', 'success', 'bottom-right');


        return view('backend.association.members.create');
    }

    public function edit(Member $member)
    {
        return view('backend.association.members.edit', compact('member'));
    }

    public function update(Member $member, UpdateMemberRequest $request)
    {
        $member->update($request->only(['status','firstname', 'lastname','email','mobile','github','birthdate','member_since']));

        toast('Member successfully updated!', 'success', 'bottom-right');


        return back();
    }

    public function export()
    {
        return Excel::download(new MemberExport(), 'members'. Carbon::now()->toDayDateTimeString() . '.xlsx');
    }
}
