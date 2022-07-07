<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Membership::all();
        return response()->view('cms.memberships.index',['memberships'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.memberships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'username' => 'required|string|min:3|max:45',
            'membership_type' => 'required|string|min:3|max:100',
            'membership_price' => 'required|string|min:1',
            // 'membership_start_date' => 'required|date',
            'duration_days' => 'required|string|min:1',
            // 'membership_end_date' => 'required|date',
            // 'days_complete' => 'required|integer|min:1|max:45',
            // 'days_remaining' => 'required|integer|max:100',
            // 'membership_status' => 'required|boolean',
        ]);
        if (!$validator->fails()) {
            $membership = new Membership();
            $membership->username = $request->input('username');
            $membership->membership_type = $request->input('membership_type');
            $membership->membership_price = $request->input('membership_price');
            // $membership->membership_start_date = $request->input('membership_start_date');
            $membership->duration_days = $request->input('duration_days');
            // $membership->membership_end_date = $request->input('membership_end_date');
            // $membership->days_complete = $request->input('days_complete');
            // $membership->days_remaining = $request->input('days_remaining');
            // $membership->status = $request->input('membership_status');
            $isSaved = $membership->save();
            return response()->json([
                'message' => $isSaved ? 'Created Successfully' : 'Create failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        //
        return response()->view('cms.memberships.update',['membership'=>$membership]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        //
        $validator = Validator($request->all(), [
            'username' => 'required|string|min:3|max:45',
            'membership_type' => 'required|string|min:3|max:100',
            'membership_price' => 'required|string|min:1',
            // 'membership_start_date' => 'required|date',
            'duration_days' => 'required|string|min:1',
            // 'membership_end_date' => 'required|date',
            // 'days_complete' => 'required|integer|min:1|max:45',
            // 'days_remaining' => 'required|integer|max:100',
            // 'membership_status' => 'required|boolean',
        ]);

        if (!$validator->fails()) {
            $membership->username = $request->input('username');
            $membership->membership_type = $request->input('membership_type');
            $membership->membership_price = $request->input('membership_price');
            // $membership->membership_start_date = $request->input('membership_start_date');
            $membership->duration_days = $request->input('duration_days');
            // $membership->membership_end_date = $request->input('membership_end_date');
            // $membership->days_complete = $request->input('days_complete');
            // $membership->days_remaining = $request->input('days_remaining');
            // $membership->status = $request->input('membership_status');
            $isUpdated = $membership->save();
            return response()->json([
                'message' => $isUpdated ? 'Updated Successfully' : 'Update failed'
            ], $isUpdated ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        //
        $deleted = $membership->delete();
        return response()->json([
            // 'message' => $deleted ? 'Deleted successfully' : 'Deleted failed'
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }
}
