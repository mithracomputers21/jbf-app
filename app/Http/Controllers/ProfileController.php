<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Plan;
use App\Models\District;
use App\Models\Block;
use App\Models\Village;
use App\Models\Habitation;
use App\Models\MemberLibrary;
use App\Models\MemberPayment;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function joiningForm()
    {
        return view('joining-form');
    }

    public function ambedkariyamAmbassadors(Plan $plan, District $district, Block $block, Village $village, Habitation $habitation)
    {
        $members = DB::table('members')
            ->join('member_libraries', 'members.id', '=', 'member_libraries.member_id')
            ->join('member_payments', 'members.id', '=', 'member_payments.member_id')
            ->select('members.*', 'member_payments.receipt_number as receipt_number', 'member_libraries.district_id as district', 'member_libraries.block_id as block', 'member_libraries.village_id as village', 'member_libraries.habitation_id as habitation')
            ->distinct()
            ->orderBy('receipt_number', 'asc')
            ->get();

        // $members = DB::table('members')
        // ->join('member_libraries', 'members.id', '=', 'member_libraries.member_id')
        // ->select('members.*', 'member_libraries.district_id as district')
        // ->get();
        return view('ambedkariyam-ambassadors', compact('members', 'plan', 'district', 'block', 'village', 'habitation'));
    }
}
